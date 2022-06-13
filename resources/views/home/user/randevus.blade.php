
@extends('layouts.frontbase')

@section('title', 'User appointments ')

@section('content')

    <div class="container">

        <div class=" contact-info">
            <div class="container">

                <h3>User Menu</h3>
                @include('home.user.usermenu')


            </div>
            <div class="col-md-6" >

                <h2 class="h4">User appointments </h2>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Treatment</th>
                        <th scope="col">Dentist</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Note</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    </td>

                    @foreach($randevus as $rs)
                        <tr>

                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('treatment',['id'=>$rs->treatment_id])}}">{{$rs->treatment->title}}</a></td>
                            <td>{{$rs->dentist->name}}</td>
                            <td>{{$rs->date}}</td>
                            <td>{{$rs->time}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->status}}</td>


                            <td style="color:black !important;">


                                <form method="post" action="{{route('userpanel.randevudelete',['id'=>$rs->id])}}" style="display: inline-block">

                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="color:red;">delete</button>

                                </form>


                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            @include('profile.show')

        </div>



    </div>



@endsection


