
@extends('layouts.frontbase')

@section('title', 'User Registration Page | ')

@section('content')

    <div class="container">
        <div class="row">
            @include('auth.register')
        </div>
    </div>

@endsection
