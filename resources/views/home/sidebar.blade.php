
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
<style>
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    ul li {

        display: block;
        position: relative;
        float: left;

    }
    li ul { display: none; }

    ul li a {
        display: block;
        padding: 1em;
        text-decoration: none;
        white-space: nowrap;
    }

    li:hover > ul {
        display: block;
        position: absolute;
    }

    li:hover li { float: none; }


    .main-navigation li ul li { border-top: 0; }
    ul ul ul {
        left: 100%;
        top: 0;
    }
    ul:before,
    ul:after {
        content: " "; /* 1 */
        display: table; /* 2 */
    }

    ul:after { clear: both; }

    .mybg{
        background-color: white;
        color: blue;
    }
</style>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark @if(@isset($page)) ftco-navbar-light @endif"id="ftco-navbar " >

        @php
        $parentCategories = \App\Http\Controllers\HomeController::maincategoryList();
        @endphp

        <div class="container">
            <a class="navbar-brand " href="{{route('home')}}">Denta<span>Care</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto"  style="color:blue !important;">
                    <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white">Categories</a>
                        <ul class="mybg">
                            @foreach($parentCategories as $rs)
                                <li>
                               @if(count($rs->children))
                                        <a href="#">{{$rs->title}}</a>
                                   @include('home.categorytree',['children'=>$rs->children])
                               @else
                                   <a href="{{route('categorytreatments',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item"><a href="doctors.html" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{route('references')}}" class="nav-link">References</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                    <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('references')}}" class="nav-link">References</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="doctors.html" class="nav-link">Doctors</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="contact.html" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Make an Appointment</span></a></li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
