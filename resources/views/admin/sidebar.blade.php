<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('assets')}}/admin/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">


                        <a href="{{route('admin.category.index')}}">  <i class="fa fa-home" style="font-size:18px" ></i>Dashboard</a></a>
                </li>

                <li>
                <li>

                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>

                            <a href="index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="index2.html">Dashboard 2</a>
                        </li>

                    </ul>
                </li>


                <li>

                    <a href="{{route('admin.category.index')}}"><i class="fas fa-table"></i>Categories</a></li>
                <li>
                    <a href="{{route('admin.treatment.index')}}"><i class="fas fa-table"></i>Treatments</a></li>

                <li>
                    <a href="{{route('admin.comment.index')}}"><i class="fas fa-comment"></i>Comments</a></li>
                <li>
                    <a href="{{route('admin.faq.index')}}"><i class="fas fa-question"></i>FAQ</a></li>
                <li>
                    <a href="{{route('admin.message.index')}}"><i class="fa fa-envelope" style="font-size:18px"></i>Messages</a></li>

                <li>
                    <a href="#" ><i class="fas fa-user text-green"></i>Users</a></li>

                <li class="nav-item">
                    <a href="{{route('admin.setting')}}"  class="nav-link" >
                        <p class="fa fa-gear fa-spin" style="font-size:19px;margin-right: 12px"></p>Settings</a>

                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->


<!-- Jquery JS-->
<script src="{{asset('assets')}}/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="{{asset('assets')}}/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="{{asset('assets')}}/admin/vendor/slick/slick.min.js">
</script>
<script src="{{asset('assets')}}/admin/vendor/wow/wow.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/animsition/animsition.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="{{asset('assets')}}/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="{{asset('assets')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('assets')}}/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="{{asset('assets')}}/admin/js/main.js"></script>

