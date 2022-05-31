
@extends('layouts.frontbase')

@section('title', 'About Us | '.$setting->title)

@section('content')

<div class="container">
    <div class="row" style="height: 500px;">
        <h1>ABOUT US</h1> <hr>
        <div style="margin-top: 20px;">
           <p style="font-size:16px;">{!!  $setting->aboutus!!}</p>
        </div>

    </div>
</div>

@endsection
