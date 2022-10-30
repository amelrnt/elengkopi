<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.1
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="/./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title') | Eleng Kopi</title>
    <link rel="manifest" href="/admin/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/admin/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/admin/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/admin/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="/admin/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
    {{--
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" /> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            Eleng Kopi
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="/penjualan/dashboard">
                    <svg class="nav-icon">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard</a></li>
            <li class="nav-title">Data Master</li>
            <li class="nav-item"><a class="nav-link" href="/penjualan/transaksi">
                    <svg class="nav-icon">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg> Data Transaksi</a></li>




        </ul>

    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="/admin/#">
                </a>
                <div style="max-width: 118; max-height: 46">
                    Eleng Kopi
                </div>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="/admin/#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md">
                                <svg class="icon icon-xl">
                                    <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="/profile">
                                <svg class="icon me-2">
                                    <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Settings</a><a class="dropdown-item" href="/admin/#">

                                <div class="dropdown-divider"></div><a class="dropdown-item" href="/logout">
                                    <svg class="icon me-2">
                                        <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                    </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span>@yield('title')</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        @section('content')
        @show

        <footer class="footer">
            <div>Sistem Pendukung Keputusan Pengadaan Barang © 2022 Eleng Kopi.</div>

        </footer>
    </div>
    <script src="/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <script src="/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="/admin/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js "></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{--
    https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js
    https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js
    https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js
    https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js
    --}}


    @section('scripts')


    @show


</body>

</html>
