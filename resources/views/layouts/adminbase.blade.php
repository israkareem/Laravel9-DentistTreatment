<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield("title")</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('assets')}}/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('assets')}}/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets')}}/admin/css/theme.css" rel="stylesheet" media="all">
    @yield('head')
</head>

<body class="animsition">

@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')


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
                @php
                    $msg_num = count(\App\Models\Message::all());
                 $cmn_num = count(\App\Models\Comment::all());

                @endphp
                <div class="header-button">
                    <div class="noti-wrap">
                        <a href="{{route('admin.comment.index')}}">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>

                            <span class="quantity">{{$cmn_num}}</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have 2 news message</p>
                                </div>

                                <div class="mess__item">

                                       <div class="image img-cir img-40">
                                           <img src="{{asset('assets')}}/admin/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                       </div>

                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Have sent a photo</p>
                                        <span class="time">3 min ago</span>
                                    </div>
                                </div>

                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('assets')}}/admin/images/icon/avatar-04.jpg" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>You are now connected on message</p>
                                        <span class="time">Yesterday</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">View all messages</a>
                                </div>
                            </div>
                        </div>
                        </a>
                        <a href="{{route('admin.message.index')}}">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">{{$msg_num}}</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have 3 New Emails</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('assets')}}/admin/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, 3 min ago</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('assets')}}/admin/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, Yesterday</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{{asset('assets')}}/admin/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Meeting about new dashboard...</p>
                                        <span>Cynthia Harvey, April 12,,2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">See all emails</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{asset('assets')}}/admin/images/icon/avatar-01.jpg" alt="{{Auth::user()->name}}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"> {{Auth::user()->name}} </a>

                            </div>
                            <a href="/logoutuser" class="nav-link"><span>Logout</span></a>

                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{asset('assets')}}/admin/images/icon/avatar-01.jpg" alt="{{Auth::user()->name}}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{Auth::user()->name}}</a>
                                        </h5>
                                        <span class="email">johndoe@example.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->

</body>
</html>

