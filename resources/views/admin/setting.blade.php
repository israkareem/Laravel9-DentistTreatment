
@extends('layouts.adminbase')


@section('title', 'Edit Treatment: '.$data->title)

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@section('title', 'Settings')

@section('content')



    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search" value="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>

                    </div>
                </div>
            </div>

        </header>
        <!-- HEADER DESKTOP-->

        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top:100px " >
                    <div class="card" style="height: 900px;width: 900px">
                        <div class="card-header">
                            <h4>Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="default-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="false">General</a>
                                        <a class="nav-item nav-link active show" id="nav-email-tab" data-toggle="tab" href="#nav-email" role="tab" aria-controls="nav-email" aria-selected="true">Smtp Email</a>
                                        <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false">Social Media</a>

                                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About Us</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Page</a>
                                        <a class="nav-item nav-link" id="nav-reference-tab" data-toggle="tab" href="#nav-reference" role="tab" aria-controls="nav-reference" aria-selected="false">References</a>
                                    </div>
                                </nav>
                                <form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">

                                    <div class="tab-pane fade" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">

                                        <div class="form-group">


                                              <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                              <label for="exampleInputEmail"><b>Title</b></label>
                                              <input type="text" value="{{$data->title}}" class="form-control" name="title">

                                              <label for="exampleInputEmail"><b>Keywords</b></label>
                                              <input type="text" value="{{$data->keywords}}" class="form-control" name="keywords">

                                              <label for="exampleInputEmail"><b>Description</b></label>
                                              <input type="text" value="{{$data->description}}" class="form-control" name="description">

                                              <label for="exampleInputEmail"><b>Company</b></label>
                                              <input type="text" value="{{$data->company}}" class="form-control" name="company">

                                              <label for="exampleInputEmail"><b>Address</b></label>
                                              <input type="text" value="{{$data->address}}" class="form-control" name="address">

                                              <label for="exampleInputEmail"><b>Phone</b></label>
                                              <input type="text" value="{{$data->phone}}" class="form-control" name="phone">

                                              <label for="exampleInputEmail"><b>Email</b></label>
                                              <input type="text" value="{{$data->email}}" class="form-control" name="email">

                                              <div class="form-group">
                                                  <label class=" form-control-label"><b>Icon</b></label>
                                                  <div class="input-group">
                                                      <div class="custom-file">
                                                          <input type="file" id="exampleInputFıle" name="icon">
                                                      </div>

                                                  </div>

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


                                        </div>
                                    </div>


                                    <div class="tab-pane fade active show" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab">
                                        <div class="form-group">

                                            <label for="exampleInputEmail"><b>Smtp Server</b></label>
                                            <input type="text" value="{{$data->smtpserver}}" class="form-control" name="smtpserver">

                                            <label for="exampleInputEmail"><b>Smtp Email</b></label>
                                            <input type="text" value="{{$data->smtpemail}}" class="form-control" name="smtpemail">

                                            <label for="exampleInputEmail"><b>Smtp Password</b></label>


                                            <input type="password" value="{{$data->smtppassword}}" class="form-control" name="smtppassword">

                                            <label for="exampleInputEmail"><b>Smtp Port</b></label>
                                            <input type="text" value="{{$data->smtpport}}" class="form-control" name="smtpport">





                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                        <div class="form-group">

                                            <label for="exampleInputEmail"><b>Fax</b></label>
                                            <input type="text" value="{{$data->fax}}" class="form-control" name="fax">

                                            <label for="exampleInputEmail"><b>Facebook</b></label>
                                            <input type="text" value="{{$data->facebook}}" class="form-control" name="facebook">

                                            <label for="exampleInputEmail"><b>Instagram</b></label>
                                            <input type="text" value="{{$data->instagram}}" class="form-control" name="instagram">

                                            <label for="exampleInputEmail"><b>Twitter</b></label>
                                            <input type="text" value="{{$data->twitter}}" class="form-control" name="twitter">






                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <div class="form-group">

                                            <label for="exampleInputEmail"><b>About Us</b></label>
                                            <textarea class="form-control" id="about-us" name="aboutus">
                                                {{$data->aboutus}}

                                    </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#about-us' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>






                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <div class="form-group">

                                            <label for="exampleInputEmail"><b>References</b></label>
                                            <textarea class="form-control" id="contact" name="contact">
                                                {{$data->contact}}
                                    </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#contact' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>






                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-reference" role="tabpanel" aria-labelledby="nav-reference-tab">
                                        <div class="form-group">

                                            <label for="exampleInputEmail"><b>References</b></label>

                                            <textarea class="form-control" id="references" name="references">

                                                {{$data->references}}
                                    </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create( document.querySelector( '#references' ) )
                                                    .then( editor => {
                                                        console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                        console.error( error );
                                                    } );
                                            </script>






                                        </div>

                                    </div>



                                    <div class="form-actions form-group" style="margin-top: 25px;margin-left: 25px ">
                                        <button type="submit" class="btn btn-success btn-sm">Update Setting</button>
                                    </div>

                                </div>



                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- END PAGE CONTAINER-->
    </div>

@endsection
