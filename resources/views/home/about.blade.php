
@extends('layouts.frontbase')

@section('title', 'About Us | '.$setting->title)

@section('content')

<div class="container">
    <div class="row">
        {!!  $setting->aboutus!!}
    </div>
</div>

@endsection
