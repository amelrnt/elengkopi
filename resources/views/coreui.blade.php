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
    <base href="/admin/./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/admin/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/admin/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/admin/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/admin/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/admin/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/admin/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/admin/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/admin/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/admin/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/admin/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/admin/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/admin/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/admin/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
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
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="/admin/index.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg> Dashboard</a></li>
            <li class="nav-title">Theme</li>
            <li class="nav-item"><a class="nav-link" href="/admin/colors.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
                    </svg> Colors</a></li>
            <li class="nav-item"><a class="nav-link" href="/admin/typography.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                    </svg> Typography</a></li>
            <li class="nav-title">Components</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                    </svg> Base</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/base/accordion.html"><span
                                class="nav-icon"></span> Accordion</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/breadcrumb.html"><span
                                class="nav-icon"></span> Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/cards.html"><span
                                class="nav-icon"></span> Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/carousel.html"><span
                                class="nav-icon"></span> Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/collapse.html"><span
                                class="nav-icon"></span> Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/list-group.html"><span
                                class="nav-icon"></span> List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/navs-tabs.html"><span
                                class="nav-icon"></span> Navs &amp; Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/pagination.html"><span
                                class="nav-icon"></span> Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/placeholders.html"><span
                                class="nav-icon"></span> Placeholders</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/popovers.html"><span
                                class="nav-icon"></span> Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/progress.html"><span
                                class="nav-icon"></span> Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/scrollspy.html"><span
                                class="nav-icon"></span> Scrollspy</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/spinners.html"><span
                                class="nav-icon"></span> Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/tables.html"><span
                                class="nav-icon"></span> Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/base/tooltips.html"><span
                                class="nav-icon"></span> Tooltips</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                    </svg> Buttons</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/buttons/buttons.html"><span
                                class="nav-icon"></span> Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/buttons/button-group.html"><span
                                class="nav-icon"></span> Buttons Group</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/buttons/dropdowns.html"><span
                                class="nav-icon"></span> Dropdowns</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/admin/charts.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                    </svg> Charts</a></li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                    </svg> Forms</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/form-control.html"> Form Control</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/select.html"> Select</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/checks-radios.html"> Checks and
                            radios</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/range.html"> Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/input-group.html"> Input group</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/floating-labels.html"> Floating
                            labels</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/layout.html"> Layout</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/forms/validation.html"> Validation</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg> Icons</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/icons/coreui-icons-free.html"> CoreUI
                            Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/icons/coreui-icons-brand.html"> CoreUI Icons -
                            Brand</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/icons/coreui-icons-flag.html"> CoreUI Icons -
                            Flag</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg> Notifications</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/notifications/alerts.html"><span
                                class="nav-icon"></span> Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/notifications/badge.html"><span
                                class="nav-icon"></span> Badge</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/notifications/modals.html"><span
                                class="nav-icon"></span> Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/notifications/toasts.html"><span
                                class="nav-icon"></span> Toasts</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="/admin/widgets.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                    </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
            <li class="nav-divider"></li>
            <li class="nav-title">Extras</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="/admin/#">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                    </svg> Pages</a>
                <ul class="nav-group-items">
                    <li class="nav-item"><a class="nav-link" href="/admin/login.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/register.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/404.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg> Error 404</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/500.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                            </svg> Error 500</a></li>
                </ul>
            </li>
            <li class="nav-item mt-auto"><a class="nav-link"
                    href="/admin/https://coreui.io/docs/templates/installation/" target="_blank">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                    </svg> Docs</a></li>
            <li class="nav-item"><a class="nav-link nav-link-danger" href="/admin/https://coreui.io/pro/" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                    </svg> Try CoreUI
                    <div class="fw-semibold">PRO</div>
                </a></li>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="/admin/#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="/admin/#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md">
                                <svg class="icon me-2">
                                    <use xlink:href="/admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">

                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="/admin/#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Profile</a><a class="dropdown-item" href="/admin/#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Settings</a><a class="dropdown-item" href="/admin/#">

                            <div class="dropdown-divider"></div><a class="dropdown-item" href="/admin/#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
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
                        <li class="breadcrumb-item active"><span>Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-primary">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Users</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="/admin/#">Action</a><a class="dropdown-item" href="/admin/#">Another
                                            action</a><a class="dropdown-item" href="/admin/#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Income</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="/admin/#">Action</a><a class="dropdown-item" href="/admin/#">Another
                                            action</a><a class="dropdown-item" href="/admin/#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart2" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-warning">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Conversion Rate</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="/admin/#">Action</a><a class="dropdown-item" href="/admin/#">Another
                                            action</a><a class="dropdown-item" href="/admin/#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3" style="height:70px;">
                                <canvas class="chart" id="card-chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-danger">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div>Sessions</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="/admin/#">Action</a><a class="dropdown-item" href="/admin/#">Another
                                            action</a><a class="dropdown-item" href="/admin/#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart4" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mb-0">Traffic</h4>
                                <div class="small text-medium-emphasis">January - July 2022</div>
                            </div>
                            <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                                <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                                    <input class="btn-check" id="option1" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary"> Day</label>
                                    <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off"
                                        checked="">
                                    <label class="btn btn-outline-secondary active"> Month</label>
                                    <input class="btn-check" id="option3" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary"> Year</label>
                                </div>
                                <button class="btn btn-primary" type="button">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                            <canvas class="chart" id="main-chart" height="300"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-1 row-cols-md-5 text-center">
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Visits</div>
                                <div class="fw-semibold">29.703 Users (40%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Unique</div>
                                <div class="fw-semibold">24.093 Users (20%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Pageviews</div>
                                <div class="fw-semibold">78.706 Views (60%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">New Users</div>
                                <div class="fw-semibold">22.123 Users (80%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col mb-sm-2 mb-0">
                                <div class="text-medium-emphasis">Bounce Rate</div>
                                <div class="fw-semibold">40.15%</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card.mb-4-->
            </div>
        </div>
        <footer class="footer">
            <div><a href="/admin/https://coreui.io">CoreUI </a><a href="/admin/https://coreui.io">Bootstrap Admin
                    Template</a> © 2022 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="/admin/https://coreui.io/docs/">CoreUI UI Components</a></div>
        </footer>
    </div>
    <script src="/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <script src="/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="/admin/js/main.js"></script>
    <script>
    </script>

</body>

</html>
