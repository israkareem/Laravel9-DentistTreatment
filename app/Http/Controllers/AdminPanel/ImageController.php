<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tid)
    {
        $treatment=Treatment::find($tid);
        $images= DB::table('images')->where('treatment_id',$tid)->get();
        return view('admin.image.index',[
            'treatment'=>$treatment,
            'images'=>$images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *  @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$tid)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$tid)
    {
        $data = new Image();
        $data->title = $request->title;
        $data->treatment_id = $tid;

        if ($request->file('image')) {
            $data->image = $request->file('image')->store('image');
        }
       else{
            $data->image = "REsult:".$request->file('image');
        }

        $data->save();
        return redirect()->route('admin.image.index',['tid'=>$tid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tid, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($tid,$id)
    {
        $data= Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect()->route('admin.image.index',['tid'=>$tid]);
    }
}
