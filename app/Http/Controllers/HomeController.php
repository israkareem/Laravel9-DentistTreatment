<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata = Category::all();
        return view('home.index',['sliderdata'=>$sliderdata]);
    }

    public function test(){
       return view('home.test');
    }
    public function param($id,$number)
    {
//      echo "parameter 1:  ".$id;
//        echo "<br>parameter 2:  ",$number;
//        echo "<br>parameter :  " , $id+$number;
        return view('home.test2', [
            'id' => $id,
            'number' => $number
        ]);

    }
    public function save(){
//        echo "Save Function<br>";
//        echo " First name : ".$_REQUEST["fname"];
//        echo "<br>Lasst name : ".$_REQUEST["lname"];
        return view('home.test2',
            [
            'fname' => $_REQUEST['fname'],
            'lname' =>  $_REQUEST['lname']
        ]);
    }


}
