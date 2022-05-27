
@extends('layouts.adminbase')

@section('title', 'Show Comment: '.$data->title)

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


            <h4 style="margin-left:30px;margin-bottom:30px;">Show Treatment: {{$data->title}}</h4>

            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div   class="card">

                        <div class="card-body card-block">
                            <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                @csrf



                                <div class="row m-t-30">
                                    <div class="col-md-12">

                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                 <tr>
                                                    <th>Id</th>
                                                   <td>{{$data->id}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Name & Surname</th>
                                                    <td> {{$data->user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Subject</th>
                                                    <td>{{$data->subject}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Comment</th>
                                                    <td>{{$data->comment}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Rate</th>
                                                    <td>{{$data->rate}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>{{$data->status}}</td>
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
                                                    <th>Admin Note</th>
                                                    <td>
                                                        <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">

                                                            @csrf
                                                        <textarea cols="50" id="note" name="note">{{$data->note}}</textarea>

                                                            <select name="status">
                                                    <option selected>{{$data->status}}</option>

                                                                <option>True</option>
                                                                <option>False</option>
                                                            </select>

                                                            <div class="form-actions form-group">
                                                                <button type="submit" class="btn btn-success btn-sm">Update Comment</button>
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

                            </form>


                    </div>


                    </div>
                </div>
            </div>
        </div>
    <!-- END PAGE CONTAINER-->

@endsection
