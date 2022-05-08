<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index(){
        $page = 'home';
        $sliderdata = Category::all();
        $datalist = Treatment::all();
        $setting=Setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'datalist'=>$datalist]);

    }

    public function about(){


        $setting=Setting::first();
        return view('home.about',[
            'setting'=>$setting,
            ]);

    }

    public function references(){


        $setting=Setting::first();
        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function contact(){

        $setting=Setting::first();
        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function treatment($id){

        $data = Treatment::find($id);
        $images= DB::table('images')->where('treatment_id',$id)->get();
        return view('home.treatment',[
            'data'=>$data,
            'images'=>$images]
        );
    }
    public function categorytreatments($id){

        $category = Category::find($id);
        $treatments= DB::table('treatments')->where('category_id',$id)->get();
        return view('home.categorytreatments',[
                'category'=>$category,
                'treatments'=>$treatments]
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
