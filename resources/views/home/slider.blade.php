
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets')}}/css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/ionicons.min.css">

<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/jquery.timepicker.css">


<link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

<section class="home-slider owl-carousel">
    @foreach($sliderdata as $rs)
    <div class="slider-item" style="background-image: url({{Storage::url($rs->image)}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text align-items-center" data-scrollax-parent="true">
                <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$rs->title}}</h1>
                    <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$rs->description}}</p>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>


