
@extends('layouts.frontbase')

@section('title', 'Appointment ')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@section('content')

    <h1>make an Appointment</h1>
    <div class="container">
        <div class="row">


            <form action="#" style="display: block;">
                <div class="form-group">
                    <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
                    <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <!-- <label for="appointment_email" class="text-black">Email</label> -->
                    <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="appointment_date" class="text-black">Date</label> -->
                            <input type="text" class="form-control appointment_date" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="appointment_time" class="text-black">Time</label> -->
                            <input type="text" class="form-control appointment_time" placeholder="Time">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <!-- <label for="appointment_message" class="text-black">Message</label> -->
                    <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Make an Appointment" class="btn btn-primary">
                </div>
            </form>


                    </div>

                </div>
        </div>
    </div>

@endsection

