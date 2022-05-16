
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
               @include('home.messages')
                    <form action="{{route('storemessage')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name">
                        </div>
                        <div class="form-group">
                             <input type="text" name="phone" class="form-control" placeholder="phone">
                        </div>
                        <div class="form-group">
                           <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="subject" name="subject">
                        </div>
                        <div class="form-group">
                          <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="message" ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>


        </div>



@endsection
