
@extends('layouts.frontbase')

@section('title', $category->title." Treatments")




@section('content')

    <h1>{{$category->title}} Treatments</h1>

    <div class="container">
        <div class="row">
            @foreach($treatments as $rs)
            <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="Card image cap" style="height: 250px;width: 285px;">
                        <div class="card-body">
                            <h5 class="card-title">{{$rs->title}}</h5>
                            <p class="card-text">{{$rs->description}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
