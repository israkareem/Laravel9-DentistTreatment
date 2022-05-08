
@extends('layouts.frontbase')

@section('title', 'Contact | '.$setting->title)

@section('content')

<div class="container">

            <div class=" contact-info">
                <div class="col-md-6" >

                    <h2 class="h4">Contact Information</h2>
                    {!! $setting->contact !!}
                </div>


            </div>
            <div class="container">

                <h3>Contact Form</h3>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>


        </div>



@endsection
