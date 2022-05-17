
@extends('layouts.adminbase')

@section('title', 'Add Faq')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
@section('content')




    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">

            <h4 style="margin-left:30px;margin-bottom:30px;">Add FAQ</h4>

            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div   class="card">

                        <div class="card-body card-block">
                            <form action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                        <label for="exampleInputEmail"><b>Question</b></label>

                                        <input type="text"  placeholder="question" class="form-control" name="question">



                                <div class="form-group">

                                    <label for="exampleInputEmail"><b>Answer</b></label>

                                    <input type="text"  placeholder="answer" class="form-control" name="answer">


                                </div>
                                <div class="form-group">
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label"><b>Status</b></label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select class="form-control" name="status">
                                            <option value="true">True</option>
                                            <option value="false">False</option>

                                        </select>
                                    </div>
                                </div>




                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PAGE CONTAINER-->

@endsection
