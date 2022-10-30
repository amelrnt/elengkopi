<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/owl.transitions.css')}}">
    <!-- animate CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('templatecss/calendar/fullcalendar.print.min.css')}}">
    <!-- touchspin CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
    <!-- datapicker CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/datapicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <!-- normalize CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/normalize.css')}}">
    <!-- meanmenu icon CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/meanmenu.min.css')}}">
    <!-- main CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/main.css')}}">
    <!-- educate icon CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS

            ============================================ -->

    <link rel="stylesheet" href="{{asset('template/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/calendar/fullcalendar.print.min.css')}}">
    <!-- modals CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/modals.css')}}">
    <!-- style CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/style.css')}}">
    <!-- responsive CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/responsive.css')}}">
    <!-- buttons CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/buttons.css')}}">
    <!-- dropzone CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/dropzone/dropzone.css')}} ">
    <!-- forms CSS
            ============================================ -->
    <link rel="stylesheet" href="{{asset('template/css/form/all-type-forms.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/alerts.css')}}">

    <!-- modernizr JS
            ============================================ -->
    <script src="{{asset('template/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Data Master</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="data menu" href="/operasional/menu"><span class="mini-sub-pro">Data
                                    Menu</span></a></li>
                        <li><a title="data bahanbaku" href="/operasional/bahanbaku"><span class="mini-sub-pro">Data
                                    Bahan Baku</span></a></li>
                        <li><a title="data pembelian bahanbaku" href="/operasional/pembelianbahanbaku"><span
                                    class="mini-sub-pro">Data Pembelian Bahan Baku</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="" href="/logout" aria-expanded="false"><span
                                    class="educate-icon educate-pages icon-wrap"></span> <span
                                    class="mini-click-non">Keluar/Logout</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12" style="padding-left: 65px;">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">SPK Pengadaan Bahan
                                                        Baku 'PEMBAWA KOPI'</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button"
                                                        aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="img/product/pro4.jpg" alt="" />
                                                        <span class="admin-name">{{ Auth::user()->name }}</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu"
                                                        class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="/logout"><span
                                                                    class="edu-icon edu-locked author-log-ic"></span>Log
                                                                Out</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Owner Menu <span
                                                    class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a title="data menu" href="/operasional/menu"><span class="mini-sub-pro">Data
                                                    Menu</span></a></li>
                                        <li><a title="data bahanbaku" href="/operasional/bahanbaku"><span class="mini-sub-pro">Data
                                                    Bahan Baku</span></a></li>
                                        <li><a title="data pembelian bahanbaku" href="/operasional/pembelianbahanbaku"><span
                                                    class="mini-sub-pro">Data Pembelian Bahan Baku</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/logout">Keluar/Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">@yield('title')</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @section('content')

        @show

        {{-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2022. All rights reserved. <a
                                    href=""></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- jquery
		============================================ -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('template/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('template/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('template/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('template/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('template/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('template/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('template/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('template/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{asset('template/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('template/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('template/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('template/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{asset('template/js/dropzone/dropzone.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('template/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{asset('template/js/morrisjs/morris.js')}}"></script>
    <script src="{{asset('template/js/morrisjs/morris-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('template/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('template/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{asset('template/js/sparkline/sparkline-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('template/js/tab.js')}}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('template/js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('template/js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('template/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('template/js/plugins.js')}}"></script>

    <!-- icheck JS
		============================================ -->
    <script src="{{asset('template/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('template/js/icheck/icheck-active.js')}}"></script>

    <script src="{{asset('template/js/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('template/js/datapicker/datepicker-active.js')}}"></script>

    <!-- main JS
		============================================ -->
    <script src="{{asset('template/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>


    @yield('scripts')
</body>

</html>
