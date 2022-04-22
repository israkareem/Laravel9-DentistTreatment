
@extends('layouts.adminwindow')

@section('title', 'Treatment List')

@section('content')

@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <!-- Required meta tags-->--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="au theme template">--}}
{{--    <meta name="author" content="Hau Nguyen">--}}
{{--    <meta name="keywords" content="au theme template">--}}

{{--    <!-- Title Page-->--}}
{{--    <title>Treatment Image Gallery</title>--}}

{{--    <!-- Fontfaces CSS-->--}}
{{--    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">--}}

{{--    <!-- Bootstrap CSS-->--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">--}}

{{--    <!-- Vendor CSS-->--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">--}}
{{--    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">--}}

{{--    <!-- Main CSS-->--}}
{{--    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">--}}
{{--    <style>--}}
{{--    </style>--}}
{{--    @yield('head')--}}



    <style>.container {
            padding: 2rem 0rem;
        }

        h4 {
            margin: 2rem 0rem 1rem;
        }

        .table-image {
        td, th {
            vertical-align: middle;
        }
        }
        .page-container{
            background-color: #FFFFFF;
        }
    </style>

    <h2>{{$treatment->title}}</h2>
    <form action="{{route('admin.image.store'),['tid=>$treatment->id']}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">

            <div class="form-control">
                <label>Parent Category</label>
                <select class="form-control select2" name="parent_id" >
                    <option value="0" selected="selected">Main Category</option>
                    @foreach($images as $rs)
                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                    @endforeach
                </select>
            </div>
        </div>



        <label for="exampleInputEmail">Title </label>

        <input type="text"  placeholder="Title" class="form-control" name="title">



        <div class="form-group">

            <label for="exampleInputEmail">Keywords</label>

            <input type="text"  placeholder="Keywords" class="form-control" name="keywords">


        </div>
        <div class="form-group">

            <label for="exampleInputEmail">Description</label>

            <input type="text"  placeholder="Description" class="form-control" name="description">


        </div>

        <div class="form-group">
            <label class=" form-control-label">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" id="exampleInputFıle" name="image">
                </div>

            </div>

        </div>




        <div class="row form-group">
            <div class="col col-md-3">
                <label class=" form-control-label">Status</label>
            </div>
            <div class="col-12 col-md-9">
                <select class="form-control" name="status">
                    <option value="unknown">Status</option>
                    <option value="true">True</option>
                    <option value="false">False</option>

                </select>
            </div>
        </div>




        <div class="form-actions form-group">
            <button type="submit" class="btn btn-success btn-sm">Save</button>
        </div>
    </form>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- MAIN CONTENT-->
        <div class="main-content">


            <div class="section__content section__content--p30">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>


                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif

                                        </td>

                                        <td>
                                            <a href="{{route('admin.image.edit',['id'=>$rs->id])}}" type="button" class="btn btn-success">Update</a>
                                            <a href="{{route('admin.image.delete',['id'=>$rs->id])}}" type="button" class="btn btn-danger"
                                               onclick="return confirm('Deleting!! Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTAINER-->
