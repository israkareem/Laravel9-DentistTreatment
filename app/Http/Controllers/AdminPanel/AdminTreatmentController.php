<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTreatmentController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Treatment::all();
        return view('admin.treatment.index',[
            'data'=>$data
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.treatment.create',[
            'data'=>$data
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Treatment();

        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->price =$request->price;
        $data->status =$request->status;
        if($request->file('image')){
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('admin/treatment');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment,$id)
    {
        $data=Treatment::find($id);
        return view('admin.treatment.show',[
            'data'=>$data
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment,$id)
    {
        $data=Treatment::find($id);
        $datalist=Category::all();
        return view('admin.treatment.edit',[
            'data'=> $data,
            'datalist'=>$datalist
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment,$id)
    {
        $data=Treatment::find($id);
        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->price =$request->price;
        $data->status =$request->status;

        if($request->file('image')){
            $data->image = $request->file('image')->store('image');
        }
        $data->save();
        return redirect('admin/treatment');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function delete(Treatment $treatment,$id)
    {
        $data= Treatment::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/treatment');
        //
    }
}
