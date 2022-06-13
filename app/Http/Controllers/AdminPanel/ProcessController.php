<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Process;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=Process::all();
        return view('admin.process.index',[
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
        $treatments = Treatment::all();
        $users = User::all();
        return view('admin.process.create',[
            'treatments'=>$treatments,
            'users'=>$users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Process();
        $data->treatment_id = $request->input('treatment_id');
        $data->note = $request->input('note');
        $data->price = $request->input('price');
        $data->amount = $request->input('amount');
        $data->user_id = $request->input('user_id');
        $data->dentist_id = $request->dentist_id;
        $data->status = $request->input('status');
        $data->payment = $request->input('payment');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->save();
        return redirect('admin/process');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Process::find($id);
        $data->save();
        return view('admin.process.show',[
            'data'=>$data
        ]);

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
    public function update(Request $request, $id)
    {
        $data= Process::find($id);
        $data->note =$request->note;
        $data->status = $request->status;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->save();
        return redirect(route('admin.process.show',['id'=>$id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data= Process::find($id);
        $data->delete();
        return redirect(route('admin.process.index'));
    }
}
