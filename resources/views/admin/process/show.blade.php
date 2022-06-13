
@extends('layouts.adminbase')

@section('title', 'Show Process: '.$data->title)

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


            <h4 style="margin-left:30px;margin-bottom:30px;">Show Process: {{$data->title}}</h4>

            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div   class="card">

                        <div class="card-body card-block">
                            <form action="{{route('admin.process.update',['id'=>$data->id])}}" method="post">
                                @csrf



                                <div class="row m-t-30">
                                    <div class="col-md-12">

                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                 <tr>
                                                    <th>User</th>
                                                   <td>{{$data->user->name}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Treatment</th>
                                                    <td> {{$data->treatment->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Dentist</th>
                                                    <td>{{$data->dentist->name}}</td>
                                                </tr>


                                                <tr>
                                                    <th>Created Date</th>
                                                    <td>{{$data->created_at}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Update Date</th>
                                                    <td>{{$data->updated_at}}</td>
                                                </tr>
                                            </table>

                                            <table class="table table-borderless table-data3">
                                                <form action="{{route('admin.process.update',['id'=>$data->id])}}" method="post">
                                                    @csrf
                                                <tr>
                                                    <th>Date</th>
                                                    <td>
                                                        <input type="text" class="form-control appointment_date" placeholder="Date" name="date" value="{{$data->date}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Time</th>
                                                    <td>
                                                        <input type="text" class="form-control appointment_date" placeholder="Date" name="time" value="{{$data->time}}">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        <select class="form-control" name="status">
                                                            <option value="{{$data->status}}">{{$data->status}}</option>
                                                            <option value="finished">Finished</option>
                                                            <option value="postponed">Postponed</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                    <tr>
                                                        <th>Note</th>
                                                        <td>
                                                            <textarea class="form-control" id="detail" name="note">
                                                                                        {{$data->note}}
                                                                 </textarea>
                                                            <script>
                                                                ClassicEditor
                                                                    .create( document.querySelector( '#detail' ) )
                                                                    .then( editor => {
                                                                        console.log( editor );
                                                                    } )
                                                                    .catch( error => {
                                                                        console.error( error );
                                                                    } );
                                                            </script>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th></th>
                                                        <td>
                                                            <div class="form-actions form-group">
                                                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </form>
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
