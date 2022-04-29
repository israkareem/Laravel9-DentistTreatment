
@extends('layouts.frontbase')

@section('title', $data->title)




@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" style="width: 100%">
        </div>
        <div class="col-6">
            <h4>{{$data->title}}</h4>
            <p>{{$data->description}}</p>

            @foreach($images as $rs)
                <div class="treatment-view">
                <img src="{{Storage::url($rs->image)}}">
                </div>
            @endforeach

        </div>
    </div>

</div>

@endsection


