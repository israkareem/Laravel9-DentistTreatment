
@extends('layouts.frontbase')

@section('title', 'References | '.$setting->title)

@section('content')

<div class="container">
    <div class="row">
        {!!  $setting->references!!}
    </div>
</div>

@endsection
