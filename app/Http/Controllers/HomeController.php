<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public function index(){
        $page = 'home';
        $sliderdata = Category::all();
        $datalist = Treatment::all();
        return view('home.index',[
            'page'=>$page,
            'sliderdata'=>$sliderdata,
            'datalist'=>$datalist]);

    }

    public function treatment($id){

        $data = Treatment::find($id);
        $images= DB::table('images')->where('treatment_id',$id)->get();
        return view('home.treatment',[
            'data'=>$data,
            'images'=>$images]
        );
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
