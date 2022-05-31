
@extends('layouts.frontbase')

@section('title', 'User Panel ')

@section('content')

    <div class="container">

        <div class=" contact-info">
            <div class="col-md-6" >

                <h2 class="h4">User Panel </h2>

            </div>

            @include('home.user.usermenu')

        </div>
        <div class="container">

            <h3>User Menu</h3>
            @include('home.messages')


        </div>


    </div>



@endsection

