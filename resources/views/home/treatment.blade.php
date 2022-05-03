
@extends('layouts.frontbase')

@section('title', $data->title)




@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 600px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="d-block w-100" alt="{{$data->title}}">
                    </div>

                    @foreach($images as $rs)
                        <div class="carousel-item">
                            <img src="{{Storage::url($rs->image)}}" class="d-block w-100" alt="{{$rs->title}}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-6">
            <h4>{{$data->title}}</h4>
            <p>{{$data->description}}</p>


        </div>
    </div>

</div>

@endsection


