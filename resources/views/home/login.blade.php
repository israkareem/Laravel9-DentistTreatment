
@extends('layouts.frontbase')

@section('title', 'User Login | ')

@section('content')

    <div class="container">
        <div class="row">
            @include('auth.login')
        </div>
    </div>

@endsection
