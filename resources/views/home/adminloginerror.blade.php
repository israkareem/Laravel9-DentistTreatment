
@extends('layouts.frontbase')

@section('title', "Role Error")




@section('content')

    <h1>Error!</h1>


          <h3>You do not have admin role, please contact one of admins or try to login with another account!</h3>
            <a href="/loginuser" class="btn btn-primary">Login</a>



@endsection

