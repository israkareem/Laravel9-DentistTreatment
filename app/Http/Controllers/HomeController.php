<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Randevu;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
    public function login(){
        return view('layouts.guest');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
//        dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
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

    public function Faq(){
        $setting=Setting::first();
        $datalist=Faq::all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request){
        //dd($request);
        $data=new Message();
        $data->name =$request->input('name');
        $data->phone =$request->input('phone');
        $data->email =$request->input('email');
        $data->subject =$request->input('subject');
        $data->message =$request->input('message');
        $data->ip =$request->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent.Thank you.');
    }

    public function storecomment(Request $request){
//        dd($request);
        $data=new Comment();
        $data->user_id =Auth::id();
        $data->comment =$request->input('comment');
        $data->treatment_id =$request->input('treatment_id');
        $data->subject =$request->input('subject');
        $data->rate =$request->input('rating-star');;

        $data->ip =$request->ip();
        $data->save();
        return redirect()->route('treatment',['id'=>$request->input('treatment_id')])->with('info','Your comment has been sent.Thank you.');
    }

  //  public function login(Request $request){
    //    return view('home.login');
      // }


    public function treatment($id){

        $data = Treatment::find($id);
        $images= DB::table('images')->where('treatment_id',$id)->get();
        $comments= Comment::where('treatment_id',$id)->get();

        return view('home.treatment',[
            'data'=>$data,
            'images'=>$images,
             'comments'=>$comments
            ]
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


    public function randevu(){
      /*   $randevu = new Randevu();
         $randevu->user_id = $uid;
         $randevu->treatment_id = $tid;
         $randevu->dentist_id = $did;
         $randevu->date = Carbon\Carbon::now()->toDateTimeString();
      */
        return view('home.randevu');



    }

    public function makerandevu(Request $request){
        $randevu = new Randevu();
        $randevu->user_id = Auth::id();
        $randevu->treatment_id = $request->treatment_id;
        $randevu->dentist_id = $request->dentist_id;
        $randevu->date = $request->date;
        $randevu->time = $request->time;
        $randevu->save();
        return $this->treatment($request->treatment_id);
    }



}
