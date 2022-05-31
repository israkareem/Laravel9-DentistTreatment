
@extends('layouts.frontbase')

@section('title', 'User Comments ')

@section('content')

    <div class="container">

        <div class=" contact-info">
            <div class="container">

                <h3>User Menu</h3>
                @include('home.user.usermenu')


            </div>
            <div class="col-md-6" >

                <h2 class="h4">User Comments </h2>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Treatment</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Comment</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    </td>

                    @foreach($comments as $rs)
                        <tr>

                            <td>{{$rs->id}}</td>
                            <td><a href="{{route('treatment',['id'=>$rs->treatment_id])}}">{{$rs->treatment->title}}</a></td>
                           <td>{{$rs->subject}}</td>
                            <td>{{$rs->comment}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>

                            <td>
                                <a href="{{route('userpanel.commentdelete',['id'=>$rs->id])}}" type="button" class="btn btn-danger"
                                   onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
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

