<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- favicon
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="">
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
    <link rel="stylesheet" href="css/touchspin/jquery.bootstrap-touchspin.min.css')}}">
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
    <script src="{{asset('template/js/vendor/modernizr-2.8.3.min.js')}}    "></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <br>
                <a href="index.html"><img class="main-logo" src="-" alt="" /></a>
                <strong><a href="index.html"><img src="" alt="" /></a></strong>
                <br>1
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">

                        <!-- Sidebar Data Master Start -->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span
                                class="bi bi-folder"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
</svg></span> <span
                                class="mini-click-non">Data Master</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="pegawai" href="/admin"><span
                                        class="mini-sub-pro">Data Pegawai</span></a></li>

                        </li>
                        <li><a title="data barang" href="/barang"><span
                                        class="mini-sub-pro">Data Barang</span></a></li>




                        </ul>
                        </li>
                        <!-- Sidebar Data Master End -->

                        <!-- Sidebar Constraint Start-->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span
                                class="bi bi-person-video2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                                <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                                </svg></span> <span
                                class="mini-click-non">Data Transaksional</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="penjualan" href="/penjualan"><span
                                        class="mini-sub-pro">Penjualan</span></a></li>

                        </li>
                        <li><a title="ketersediaan" href="/ketersediaan"><span
                                        class="mini-sub-pro">Ketersediaan</span></a></li>

                        </li>
                        <li><a title="pemesanan" href="/pesan"><span
                                        class="mini-sub-pro">Pemesanan</span></a></li>
                        </li>
                        <li><a title="hasil" href="/hasil/index"><span
                                        class="mini-sub-pro">Hasil</span></a></li>
                        </li>



                        </ul>
                        </li>


                        <li id="removable">
                            <a class="" href="/logout" aria-expanded="false"><span
                                class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Keluar/Logout</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
    <div class="all-content-wrapper">
        <!-- Start Navbar  area -->


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="educate-icon educate-nav"></i>
                                        </button>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">SPK Pengadaan Bahan Baku 'PEMBAWA KOPI'</a>
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
        </div>

        <!-- End Navbar menu area -->

        <!-- Content Area Start -->

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data Pegawai</h1>
                                </div>
                                <div class="add-product">
                                    <a href="/admin/create">Tambah Data</a>
                                </div>
                            </div>
                            <div class="static-table-list">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Nama Pegawai</th>
                                            <th>Jabatan</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($admin as $admin) --}}

                                        <tr>
                                            <td>$loop->iteration</td>
                                            <td>$admin -> id_pegawai</td>
                                            <td>$admin -> nama_pegawai</td>
                                            <td>$admin -> jabatan</td>
                                            <td>$admin -> username</td>
                                            <td>***..</td>
                                            <td>
                                                <a href="/admin/edit/$admin -> id_pegawai"><button data-toggle="tooltip"
                                                title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i></button> </a>
                                                <!-- <a href="/admin/delete/$admin -> id_pegawai" class="Primary mg-b-10"
                                            data-toggle="modal"><button class="pd-setting-ed"><i class="fa fa-trash-o"
                                                    aria-hidden="true"></i></button></a> -->
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area End -->
        <!-- Footer Area Start-->

        <!-- Footer Area End-->



    </div>

    <!-- jquery
		============================================ -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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


    @yield('scripts')

</body>

</html>
