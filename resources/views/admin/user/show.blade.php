
@extends('layouts.adminbase')

@section('title', 'Show User Detail: '.$data->title)

@section('content')



    <style>
        @media (min-width: 1000px) {
            .show{
                margin-left: 400px !important;
            }
        }

    </style>
        <!-- MAIN CONTENT-->
        <div class="main-content show">


            <h4 style="margin-left:30px;margin-bottom:30px;">Show User Detail: {{$data->title}}</h4>

            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div   class="card">

                        <div class="card-body card-block">




                                <div class="row m-t-30">
                                    <div class="col-md-12">

                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                 <tr>
                                                    <th>Id</th>
                                                   <td>{{$data->id}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Name</th>
                                                    <td> {{$data->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{$data->email}}</td>
                                                </tr>
                                                <tr>

                                                    <th>Status</th>
                                                    <td>{{$data->status}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Roles</th>
                                                    <td>@foreach($data->roles as $role)
                                                            {{$role->name}}
                                                        @endforeach</td>
                                                </tr>

                                                <tr>
                                                    <th>Created Date</th>
                                                    <td>{{$data->created_at}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Update Date</th>
                                                    <td>{{$data->updated_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Add Role</th>
                                                    <td>
                                                        <form action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">

                                                            @csrf
                                                            <div class="form-actions form-group">
                                                                <select name="role">
                                                                    @foreach($roles as $rs)
                                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-actions form-group">
                                                                <button type="submit" class="btn btn-success btn-sm">Add Role</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>

                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>




                    </div>


                    </div>
                </div>
            </div>
        </div>
    <!-- END PAGE CONTAINER-->

@endsection
