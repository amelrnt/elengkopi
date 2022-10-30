@extends('owner.template')
@section('title', 'Bahan Baku')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
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
                                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                        </li>
                                        <li class="nav-item dropdown res-dis-nn">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                            <div role="menu" class="dropdown-menu animated zoomIn">
                                                <a href="#" class="dropdown-item">Documentation</a>
                                                <a href="#" class="dropdown-item">Expert Backend</a>
                                                <a href="#" class="dropdown-item">Expert FrontEnd</a>
                                                <a href="#" class="dropdown-item">Contact Support</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item dropdown">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                            <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                <div class="message-single-top">
                                                    <h1>Message</h1>
                                                </div>
                                                <ul class="message-menu mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_2" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: 230px;" tabindex="0"><div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="message-img">
                                                                <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                                            </div>
                                                            <div class="message-content">
                                                                <span class="message-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </div></div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
                                                <div class="message-view">
                                                    <a href="#">View All Messages</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_3" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: 230px;" tabindex="0"><div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Advanda Cro</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Sulaiman din</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                <span class="notification-date">16 Sept</span>
                                                                <h2>Victor Jara</h2>
                                                                <p>Please done this project as soon possible.</p>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </div></div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
                                                <div class="notification-view">
                                                    <a href="#">View All Notification</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="img/product/pro4.jpg" alt="">
                                                    <span class="admin-name">Prof.Anderson</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                <ul class="nav nav-tabs custon-set-tab">
                                                    <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content custom-bdr-nt">
                                                    <div id="Notes" class="tab-pane fade in active">
                                                        <div class="notes-area-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                <p>You have 10 new message.</p>
                                                            </div>
                                                            <div class="notes-list-area notes-menu-scrollbar mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_4" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: 315px;" tabindex="0"><div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                <ul class="notes-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notes-list-flow">
                                                                                <div class="notes-img">
                                                                                    <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                                                                </div>
                                                                                <div class="notes-content">
                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div></div><div id="mCSB_4_scrollbar_vertical" class="mCSB_scrollTools mCSB_4_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_4_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                                                        </div>
                                                    </div>
                                                    <div id="Projects" class="tab-pane fade">
                                                        <div class="projects-settings-wrap">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                <p> You have 20 projects. 5 not completed.</p>
                                                            </div>
                                                            <div class="project-st-list-area project-st-menu-scrollbar mCustomScrollbar _mCS_5 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_5" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: 315px;" tabindex="0"><div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                                                                <ul class="projects-st-menu-list">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Software Development</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Graphic Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Web Design</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Business Card</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 28%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Ecommerce Business</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl">
                                                                                    <p>Completion with: 68%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Woocommerce Plugin</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content">
                                                                                    <p>Completion with: 78%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 78%;" class="progress-bar"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="project-list-flow">
                                                                                <div class="projects-st-heading">
                                                                                    <h2>Wordpress Theme</h2>
                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                </div>
                                                                                <div class="projects-st-content project-rating-cl2">
                                                                                    <p>Completion with: 38%</p>
                                                                                    <div class="progress progress-mini">
                                                                                        <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                    </div>
                                                                                    <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div></div><div id="mCSB_5_scrollbar_vertical" class="mCSB_scrollTools mCSB_5_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_5_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                                                        </div>
                                                    </div>
                                                    <div id="Settings" class="tab-pane fade">
                                                        <div class="setting-panel-area">
                                                            <div class="note-heading-indicate">
                                                                <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                <p> You have 20 Settings. 5 not completed.</p>
                                                            </div>
                                                            <ul class="setting-panel-list">
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show notifications</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                    <label class="onoffswitch-label" for="example">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Disable Chat</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Enable history</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Show charts</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Update everyday</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Global search</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="checkbox-setting-pro">
                                                                        <div class="checkbox-title-pro">
                                                                            <h2>Offline users</h2>
                                                                            <div class="ts-custom-check">
                                                                                <div class="onoffswitch">
                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                            <span class="onoffswitch-inner"></span>
                                                                                            <span class="onoffswitch-switch"></span>
                                                                                        </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        <div class="container mean-container"><div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="background:;color:;right:0;left:auto;"><span></span><span></span><span></span></a><nav class="mean-nav">
                            <ul class="mobile-menu-nav" style="display: none;">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="index.html">Dashboard v.1</a></li>
                                        <li><a href="index-1.html">Dashboard v.2</a></li>
                                        <li><a href="index-3.html">Dashboard v.3</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a href="events.html">Event</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="all-professors.html">All Professors</a>
                                        </li>
                                        <li><a href="add-professor.html">Add Professor</a>
                                        </li>
                                        <li><a href="edit-professor.html">Edit Professor</a>
                                        </li>
                                        <li><a href="professor-profile.html">Professor Profile</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="all-students.html">All Students</a>
                                        </li>
                                        <li><a href="add-student.html">Add Student</a>
                                        </li>
                                        <li><a href="edit-student.html">Edit Student</a>
                                        </li>
                                        <li><a href="student-profile.html">Student Profile</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="all-courses.html">All Courses</a>
                                        </li>
                                        <li><a href="add-course.html">Add Course</a>
                                        </li>
                                        <li><a href="edit-course.html">Edit Course</a>
                                        </li>
                                        <li><a href="course-profile.html">Courses Info</a>
                                        </li>
                                        <li><a href="course-payment.html">Courses Payment</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="library-assets.html">Library Assets</a>
                                        </li>
                                        <li><a href="add-library-assets.html">Add Library Asset</a>
                                        </li>
                                        <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demodepart" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="departments.html">Departments List</a>
                                        </li>
                                        <li><a href="add-department.html">Add Departments</a>
                                        </li>
                                        <li><a href="edit-department.html">Edit Departments</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="mailbox.html">Inbox</a>
                                        </li>
                                        <li><a href="mailbox-view.html">View Mail</a>
                                        </li>
                                        <li><a href="mailbox-compose.html">Compose Mail</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="google-map.html">Google Map</a>
                                        </li>
                                        <li><a href="data-maps.html">Data Maps</a>
                                        </li>
                                        <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                        </li>
                                        <li><a href="x-editable.html">X-Editable</a>
                                        </li>
                                        <li><a href="code-editor.html">Code Editor</a>
                                        </li>
                                        <li><a href="tree-view.html">Tree View</a>
                                        </li>
                                        <li><a href="preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="images-cropper.html">Images Cropper</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="bar-charts.html">Bar Charts</a>
                                        </li>
                                        <li><a href="line-charts.html">Line Charts</a>
                                        </li>
                                        <li><a href="area-charts.html">Area Charts</a>
                                        </li>
                                        <li><a href="rounded-chart.html">Rounded Charts</a>
                                        </li>
                                        <li><a href="c3.html">C3 Charts</a>
                                        </li>
                                        <li><a href="sparkline.html">Sparkline Charts</a>
                                        </li>
                                        <li><a href="peity.html">Peity Charts</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="static-table.html">Static Table</a>
                                        </li>
                                        <li><a href="data-table.html">Data Table</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="formsmob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Appviewsmob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top" style="display: none;">
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="lock.html">Lock</a>
                                        </li>
                                        <li><a href="password-recovery.html">Password Recovery</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li class="mean-last"><a href="500.html">500 Page</a></li>
                                    </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a></li>
                            </ul>
                        </nav></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <div class="mean-push"></div><nav id="dropdown" style="display: none;">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard v.1</a></li>
                                        <li><a href="index-1.html">Dashboard v.2</a></li>
                                        <li><a href="index-3.html">Dashboard v.3</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Event</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="all-professors.html">All Professors</a>
                                        </li>
                                        <li><a href="add-professor.html">Add Professor</a>
                                        </li>
                                        <li><a href="edit-professor.html">Edit Professor</a>
                                        </li>
                                        <li><a href="professor-profile.html">Professor Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="all-students.html">All Students</a>
                                        </li>
                                        <li><a href="add-student.html">Add Student</a>
                                        </li>
                                        <li><a href="edit-student.html">Edit Student</a>
                                        </li>
                                        <li><a href="student-profile.html">Student Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="all-courses.html">All Courses</a>
                                        </li>
                                        <li><a href="add-course.html">Add Course</a>
                                        </li>
                                        <li><a href="edit-course.html">Edit Course</a>
                                        </li>
                                        <li><a href="course-profile.html">Courses Info</a>
                                        </li>
                                        <li><a href="course-payment.html">Courses Payment</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="library-assets.html">Library Assets</a>
                                        </li>
                                        <li><a href="add-library-assets.html">Add Library Asset</a>
                                        </li>
                                        <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="departments.html">Departments List</a>
                                        </li>
                                        <li><a href="add-department.html">Add Departments</a>
                                        </li>
                                        <li><a href="edit-department.html">Edit Departments</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="mailbox.html">Inbox</a>
                                        </li>
                                        <li><a href="mailbox-view.html">View Mail</a>
                                        </li>
                                        <li><a href="mailbox-compose.html">Compose Mail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="google-map.html">Google Map</a>
                                        </li>
                                        <li><a href="data-maps.html">Data Maps</a>
                                        </li>
                                        <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                        </li>
                                        <li><a href="x-editable.html">X-Editable</a>
                                        </li>
                                        <li><a href="code-editor.html">Code Editor</a>
                                        </li>
                                        <li><a href="tree-view.html">Tree View</a>
                                        </li>
                                        <li><a href="preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="images-cropper.html">Images Cropper</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top">
                                        <li><a href="bar-charts.html">Bar Charts</a>
                                        </li>
                                        <li><a href="line-charts.html">Line Charts</a>
                                        </li>
                                        <li><a href="area-charts.html">Area Charts</a>
                                        </li>
                                        <li><a href="rounded-chart.html">Rounded Charts</a>
                                        </li>
                                        <li><a href="c3.html">C3 Charts</a>
                                        </li>
                                        <li><a href="sparkline.html">Sparkline Charts</a>
                                        </li>
                                        <li><a href="peity.html">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="static-table.html">Static Table</a>
                                        </li>
                                        <li><a href="data-table.html">Data Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="formsmob" class="collapse dropdown-header-top">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                        <li><a href="basic-form-element.html">Basic Form Elements</a>
                                        </li>
                                        <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                        </li>
                                        <li><a href="password-meter.html">Password Meter</a>
                                        </li>
                                        <li><a href="multi-upload.html">Multi Upload</a>
                                        </li>
                                        <li><a href="tinymc.html">Text Editor</a>
                                        </li>
                                        <li><a href="dual-list-box.html">Dual List Box</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="lock.html">Lock</a>
                                        </li>
                                        <li><a href="password-recovery.html">Password Recovery</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="500.html">500 Page</a></li>
                                    </ul>
                                </li>
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
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Dashboard V.1</span>
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
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Computer Technologies</h5>
                        <h2>$<span class="counter">5000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                        <span class="text-success">20%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:20%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Accounting Technologies</h5>
                        <h2>$<span class="counter">3000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                        <span class="text-danger">30%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Electrical Engineering</h5>
                        <h2>$<span class="counter">2000</span> <span class="tuition-fees">Tuition Fees</span></h2>
                        <span class="text-info">60%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">20% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Chemical Engineering</h5>
                        <h2>$<span class="counter">3500</span> <span class="tuition-fees">Tuition Fees</span></h2>
                        <span class="text-inverse">80%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>University Earnings</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>All Earnings are in million $</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>CSE</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Accounting</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Electrical</h5>
                        </li>
                    </ul>
                    <div id="extra-area-chart" style="height: 356px; position: relative;"><svg height="356" version="1.1" width="786" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.299988px;"><desc>Created with RaphaÃ«l 2.1.2</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="316" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,316H761" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="243.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">75</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,243.25H761" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="170.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">150</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,170.5H761" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="97.75" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">225</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,97.75H761" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">300</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,25H761" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="761" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2016</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="642.2042445736028" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2015</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="523.4084891472055" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2014</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="404.6127337208082" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2013</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="285.4915104713249" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="166.69575504492758" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2011</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="47.89999961853027" y="328.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2010</tspan></text><path style="fill-opacity: 0;" fill="#2c86f3" stroke="none" d="M47.89999961853027,267.5C77.5989384751296,248.1,136.99681618832824,193.5375,166.69575504492758,189.9C196.39469390152692,186.26250000000002,255.79257161472555,231.13495212038305,285.4915104713249,238.4C315.2718162836957,245.68495212038303,374.83242790843735,260.2415868673051,404.6127337208082,248.10000000000002C434.31167257740753,235.99158686730507,493.70955029060616,145.64375,523.4084891472055,141.4C553.1074280038048,137.15625,612.5053057170035,222.63750000000002,642.2042445736028,214.15C671.903183430202,205.6625,731.3010611434007,108.6625,761,73.5L761,316L47.89999961853027,316Z" fill-opacity="0"></path><path style="" fill="none" stroke="#006df0" d="M47.89999961853027,267.5C77.5989384751296,248.1,136.99681618832824,193.5375,166.69575504492758,189.9C196.39469390152692,186.26250000000002,255.79257161472555,231.13495212038305,285.4915104713249,238.4C315.2718162836957,245.68495212038303,374.83242790843735,260.2415868673051,404.6127337208082,248.10000000000002C434.31167257740753,235.99158686730507,493.70955029060616,145.64375,523.4084891472055,141.4C553.1074280038048,137.15625,612.5053057170035,222.63750000000002,642.2042445736028,214.15C671.903183430202,205.6625,731.3010611434007,108.6625,761,73.5" stroke-width="1"></path><circle cx="47.89999961853027" cy="267.5" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="166.69575504492758" cy="189.9" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="285.4915104713249" cy="238.4" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="404.6127337208082" cy="248.10000000000002" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="523.4084891472055" cy="141.4" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="642.2042445736028" cy="214.15" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="761" cy="73.5" r="3" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><path style="fill-opacity: 0;" fill="#a76bcb" stroke="none" d="M47.89999961853027,238.4C77.5989384751296,233.55,136.99681618832824,216.575,166.69575504492758,219C196.39469390152692,221.425,255.79257161472555,269.90841313269493,285.4915104713249,257.8C315.2718162836957,245.65841313269496,374.83242790843735,132.92742818057457,404.6127337208082,122C434.31167257740753,111.10242818057455,493.70955029060616,158.375,523.4084891472055,170.5C553.1074280038048,182.625,612.5053057170035,219,642.2042445736028,219C671.903183430202,219,731.3010611434007,182.625,761,170.5L761,316L47.89999961853027,316Z" fill-opacity="0"></path><path style="" fill="none" stroke="#933ec5" d="M47.89999961853027,238.4C77.5989384751296,233.55,136.99681618832824,216.575,166.69575504492758,219C196.39469390152692,221.425,255.79257161472555,269.90841313269493,285.4915104713249,257.8C315.2718162836957,245.65841313269496,374.83242790843735,132.92742818057457,404.6127337208082,122C434.31167257740753,111.10242818057455,493.70955029060616,158.375,523.4084891472055,170.5C553.1074280038048,182.625,612.5053057170035,219,642.2042445736028,219C671.903183430202,219,731.3010611434007,182.625,761,170.5" stroke-width="1"></path><circle cx="47.89999961853027" cy="238.4" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="166.69575504492758" cy="219" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="285.4915104713249" cy="257.8" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="404.6127337208082" cy="122" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="523.4084891472055" cy="170.5" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="642.2042445736028" cy="219" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="761" cy="170.5" r="3" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><path style="fill-opacity: 0;" fill="#7bc644" stroke="none" d="M47.89999961853027,296.6C77.5989384751296,282.05,136.99681618832824,244.4625,166.69575504492758,238.4C196.39469390152692,232.3375,255.79257161472555,255.36504787961698,285.4915104713249,248.10000000000002C315.2718162836957,240.815047879617,374.83242790843735,188.69911080711356,404.6127337208082,180.20000000000002C434.31167257740753,171.72411080711356,493.70955029060616,172.925,523.4084891472055,180.20000000000002C553.1074280038048,187.47500000000002,612.5053057170035,245.675,642.2042445736028,238.4C671.903183430202,231.125,731.3010611434007,151.1,761,122L761,316L47.89999961853027,316Z" fill-opacity="0"></path><path style="" fill="none" stroke="#65b12d" d="M47.89999961853027,296.6C77.5989384751296,282.05,136.99681618832824,244.4625,166.69575504492758,238.4C196.39469390152692,232.3375,255.79257161472555,255.36504787961698,285.4915104713249,248.10000000000002C315.2718162836957,240.815047879617,374.83242790843735,188.69911080711356,404.6127337208082,180.20000000000002C434.31167257740753,171.72411080711356,493.70955029060616,172.925,523.4084891472055,180.20000000000002C553.1074280038048,187.47500000000002,612.5053057170035,245.675,642.2042445736028,238.4C671.903183430202,231.125,731.3010611434007,151.1,761,122" stroke-width="1"></path><circle cx="47.89999961853027" cy="296.6" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="166.69575504492758" cy="238.4" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="285.4915104713249" cy="248.10000000000002" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="404.6127337208082" cy="180.20000000000002" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="523.4084891472055" cy="180.20000000000002" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="642.2042445736028" cy="238.4" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="761" cy="122" r="3" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="left: 595.539px; top: 117px; display: none;"><div class="morris-hover-row-label">2015</div><div class="morris-hover-point" style="color: #006DF0">
CSE:
105
</div><div class="morris-hover-point" style="color: #933EC5">
Accounting:
100
</div><div class="morris-hover-point" style="color: #65b12d">
Electrical:
80
</div></div></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Total Visit</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
                        </li>
                        <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success">1500</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Page Views</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
                        </li>
                        <li class="text-right graph-two-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-purple">3000</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Unique Visitor</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
                        </li>
                        <li class="text-right graph-three-ctn"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-info">5000</span></li>
                    </ul>
                </div>
                <div class="white-box analytics-info-cs table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                    <h3 class="box-title">Bounce Rate</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
                        </li>
                        <li class="text-right graph-four-ctn"><i class="fa fa-level-down" aria-hidden="true"></i> <span class="text-danger"><span class="counter">18</span>%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu">
                    <i class="fa fa-facebook"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Likes</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                    <i class="fa fa-twitter"></i>
                    <div class="social-edu-ctn">
                        <h3>30k followers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-linkedin"></i>
                    <div class="social-edu-ctn">
                        <h3>7k Connections</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <i class="fa fa-youtube"></i>
                    <div class="social-edu-ctn">
                        <h3>50k Subscribers</h3>
                        <p>You main list growing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="library-book-area mg-t-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#"><img src="img/product/profile-bg.jpg" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <img src="img/product/pro4.jpg" alt="">
                        <h4><a class="cards-hd-dn" href="#">Angela Dominic</a></h4>
                        <h5>Web Designer &amp; Developer</h5>
                        <p class="ctn-cards">Lorem ipsum dolor sit amet, this is a consectetur adipisicing elit</p>
                        <a class="follow-cards" href="#">Follow</a>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">199</span></h3>
                                    <p>Articles</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">599</span></h3>
                                    <p>Like</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="cards-dtn">
                                    <h3><span class="counter">399</span></h3>
                                    <p>Comment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                    <div class="single-review-st-hd">
                        <h2>Reviews</h2>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/1.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Sarah Graves</h3>
                            <p>Highly recommend</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/2.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Garbease sha</h3>
                            <p>Awesome Pro</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/3.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Gobetro pro</h3>
                            <p>Great Website</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/4.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Siam Graves</h3>
                            <p>That's Good</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/5.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Sarah Graves</h3>
                            <p>Highly recommend</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                    <div class="single-review-st-text">
                        <img src="img/notification/6.jpg" alt="">
                        <div class="review-ctn-hf">
                            <h3>Julsha Grav</h3>
                            <p>Sei Hoise bro</p>
                        </div>
                        <div class="review-item-rating">
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star"></i>
                            <i class="educate-icon educate-star-half"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <div class="single-product-image">
                        <a href="#"><img src="img/product/book-4.jpg" alt=""></a>
                    </div>
                    <div class="single-product-text edu-pro-tx">
                        <h4><a href="#">Title Demo Here</a></h4>
                        <h5>Lorem ipsum dolor sit amet, this is a consec tetur adipisicing elit</h5>
                        <div class="product-price">
                            <h3>$45</h3>
                            <div class="single-item-rating">
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star"></i>
                                <i class="educate-icon educate-star-half"></i>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">Read More</button>
                            <button type="button" class="button-default"><i class="fa fa-heart"></i></button>
                            <button type="button" class="button-default"><i class="fa fa-share"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Adminsion Statistic</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp actions-graph-rp">
                                    <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="" data-original-title="Refresh">
                                            <i class="fa fa-reply" aria-hidden="true"></i>
                                        </a>
                                    <a href="#" class="btn btn-blue-grey btn-circle active tip-top" data-toggle="tooltip" title="" data-original-title="Delete">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                        <li>
                            <h5><i class="fa fa-circle" style="color: #006DF0;"></i>Python</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #933EC5;"></i>PHP</h5>
                        </li>
                        <li>
                            <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Java</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart" style="position: relative;"><svg height="342" version="1.1" width="729" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.733276px;"><desc>Created with RaphaÃ«l 2.1.2</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="302" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,302H704" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="232.75" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">50</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,232.75H704" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="163.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">100</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,163.5H704" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="94.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">150</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,94.25H704" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="35.39999961853027" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">200</tspan></text><path style="" fill="none" stroke="#e0e0e0" d="M47.89999961853027,25H704" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="704" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2018</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="594.74977183429" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2017</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="485.2002279749752" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2016</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="375.94999980926514" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2015</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="266.6997716435551" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2014</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="157.44954347784503" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2013</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="47.89999961853027" y="314.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7.5)"><tspan dy="4">2012</tspan></text><path style="fill-opacity: 0.99;" fill="#7bc644" stroke="none" d="M47.89999961853027,302C75.28738558335897,267.375,130.06215751301633,194.70512995896033,157.44954347784503,163.5C184.76210051927254,132.3801299589603,239.38721460212759,52.69999999999999,266.6997716435551,52.69999999999999C294.0123286849826,52.69999999999999,348.6374427678376,163.5,375.94999980926514,163.5C403.26255685069265,163.5,457.88767093354767,52.69999999999999,485.2002279749752,52.69999999999999C512.5876139398039,52.69999999999999,567.3623858694613,163.5,594.74977183429,163.5C622.0623288757174,163.5,676.6874429585725,80.39999999999999,704,52.69999999999999L704,302L47.89999961853027,302Z" fill-opacity="0.99"></path><path style="" fill="none" stroke="#65b12d" d="M47.89999961853027,302C75.28738558335897,267.375,130.06215751301633,194.70512995896033,157.44954347784503,163.5C184.76210051927254,132.3801299589603,239.38721460212759,52.69999999999999,266.6997716435551,52.69999999999999C294.0123286849826,52.69999999999999,348.6374427678376,163.5,375.94999980926514,163.5C403.26255685069265,163.5,457.88767093354767,52.69999999999999,485.2002279749752,52.69999999999999C512.5876139398039,52.69999999999999,567.3623858694613,163.5,594.74977183429,163.5C622.0623288757174,163.5,676.6874429585725,80.39999999999999,704,52.69999999999999" stroke-width="0"></path><circle cx="47.89999961853027" cy="302" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="157.44954347784503" cy="163.5" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="266.6997716435551" cy="52.69999999999999" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="375.94999980926514" cy="163.5" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="485.2002279749752" cy="52.69999999999999" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="594.74977183429" cy="163.5" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><circle cx="704" cy="52.69999999999999" r="0" fill="#65b12d" stroke="#65b12d" style="" stroke-width="1"></circle><path style="fill-opacity: 0.99;" fill="#a76bcb" stroke="none" d="M47.89999961853027,302C75.28738558335897,274.3,130.06215751301633,217.20427496580027,157.44954347784503,191.2C184.76210051927254,165.26677496580027,239.38721460212759,92.51875,266.6997716435551,94.25C294.0123286849826,95.98125,348.6374427678376,205.05,375.94999980926514,205.05C403.26255685069265,205.05,457.88767093354767,94.25,485.2002279749752,94.25C512.5876139398039,94.25,567.3623858694613,205.05,594.74977183429,205.05C622.0623288757174,205.05,676.6874429585725,121.95,704,94.25L704,302L47.89999961853027,302Z" fill-opacity="0.99"></path><path style="" fill="none" stroke="#933ec5" d="M47.89999961853027,302C75.28738558335897,274.3,130.06215751301633,217.20427496580027,157.44954347784503,191.2C184.76210051927254,165.26677496580027,239.38721460212759,92.51875,266.6997716435551,94.25C294.0123286849826,95.98125,348.6374427678376,205.05,375.94999980926514,205.05C403.26255685069265,205.05,457.88767093354767,94.25,485.2002279749752,94.25C512.5876139398039,94.25,567.3623858694613,205.05,594.74977183429,205.05C622.0623288757174,205.05,676.6874429585725,121.95,704,94.25" stroke-width="0"></path><circle cx="47.89999961853027" cy="302" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="157.44954347784503" cy="191.2" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="266.6997716435551" cy="94.25" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="375.94999980926514" cy="205.05" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="485.2002279749752" cy="94.25" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="594.74977183429" cy="205.05" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><circle cx="704" cy="94.25" r="0" fill="#933ec5" stroke="#933ec5" style="" stroke-width="1"></circle><path style="fill-opacity: 0.99;" fill="#2c86f3" stroke="none" d="M47.89999961853027,302C75.28738558335897,279.49375,130.06215751301633,232.77841997264022,157.44954347784503,211.975C184.76210051927254,191.2284199726402,239.38721460212759,131.471875,266.6997716435551,135.8C294.0123286849826,140.128125,348.6374427678376,246.6,375.94999980926514,246.6C403.26255685069265,246.6,457.88767093354767,135.8,485.2002279749752,135.8C512.5876139398039,135.8,567.3623858694613,246.6,594.74977183429,246.6C622.0623288757174,246.6,676.6874429585725,163.5,704,135.8L704,302L47.89999961853027,302Z" fill-opacity="0.99"></path><path style="" fill="none" stroke="#006df0" d="M47.89999961853027,302C75.28738558335897,279.49375,130.06215751301633,232.77841997264022,157.44954347784503,211.975C184.76210051927254,191.2284199726402,239.38721460212759,131.471875,266.6997716435551,135.8C294.0123286849826,140.128125,348.6374427678376,246.6,375.94999980926514,246.6C403.26255685069265,246.6,457.88767093354767,135.8,485.2002279749752,135.8C512.5876139398039,135.8,567.3623858694613,246.6,594.74977183429,246.6C622.0623288757174,246.6,676.6874429585725,163.5,704,135.8" stroke-width="0"></path><circle cx="47.89999961853027" cy="302" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="157.44954347784503" cy="211.975" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="266.6997716435551" cy="135.8" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="375.94999980926514" cy="246.6" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="485.2002279749752" cy="135.8" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="594.74977183429" cy="246.6" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle><circle cx="704" cy="135.8" r="0" fill="#006df0" stroke="#006df0" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="analysis-progrebar res-mg-t-30 mg-ub-10 res-mg-b-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <div class="analysis-progrebar-content">
                        <h5>Usage</h5>
                        <h2 class="storage-right"><span class="counter">90</span>%</h2>
                        <div class="progress progress-mini ug-1">
                            <div style="width: 68%;" class="progress-bar"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 1:32 pm.</p>
                        </div>
                    </div>
                </div>
                <div class="analysis-progrebar reso-mg-b-30 res-mg-b-30 mg-ub-10 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="analysis-progrebar-content">
                        <h5>Memory</h5>
                        <h2 class="storage-right"><span class="counter">70</span>%</h2>
                        <div class="progress progress-mini ug-2">
                            <div style="width: 78%;" class="progress-bar"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 12:32 pm.</p>
                        </div>
                    </div>
                </div>
                <div class="analysis-progrebar reso-mg-b-30 res-mg-b-30 res-mg-t-30 mg-ub-10 tb-sm-res-d-n dk-res-t-d-n">
                    <div class="analysis-progrebar-content">
                        <h5>Data</h5>
                        <h2 class="storage-right"><span class="counter">50</span>%</h2>
                        <div class="progress progress-mini ug-3">
                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 8:32 pm.</p>
                        </div>
                    </div>
                </div>
                <div class="analysis-progrebar res-mg-t-30 table-dis-n-pro tb-sm-res-d-n dk-res-t-d-n">
                    <div class="analysis-progrebar-content">
                        <h5>Space</h5>
                        <h2 class="storage-right"><span class="counter">40</span>%</h2>
                        <div class="progress progress-mini ug-4">
                            <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                        </div>
                        <div class="m-t-sm small">
                            <p>Server down since 5:32 pm.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="courses-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Browser Status</h3>
                    <ul class="basic-list">
                        <li>Google Chrome <span class="pull-right label-danger label-1 label">95.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label-2 label">85.8%</span></li>
                        <li>Apple Safari <span class="pull-right label-success label-3 label">23.8%</span></li>
                        <li>Internet Explorer <span class="pull-right label-info label-4 label">55.8%</span></li>
                        <li>Opera mini <span class="pull-right label-warning label-5 label">28.8%</span></li>
                        <li>Mozila Firefox <span class="pull-right label-purple label-6 label">26.8%</span></li>
                        <li>Safari <span class="pull-right label-purple label-7 label">31.8%</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Visits from countries</h3>
                    <ul class="country-state">
                        <li>
                            <h2><span class="counter">1250</span></h2> <small>From Australia</small>
                            <div class="pull-right">75% <i class="fa fa-level-up text-danger ctn-ic-1"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger ctn-vs-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%;"> <span class="sr-only">75% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">1050</span></h2> <small>From USA</small>
                            <div class="pull-right">48% <i class="fa fa-level-up text-success ctn-ic-2"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info ctn-vs-2" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%;"> <span class="sr-only">48% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">6350</span></h2> <small>From Canada</small>
                            <div class="pull-right">55% <i class="fa fa-level-up text-success ctn-ic-3"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-3" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:55%;"> <span class="sr-only">55% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">950</span></h2> <small>From India</small>
                            <div class="pull-right">33% <i class="fa fa-level-down text-success ctn-ic-4"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success ctn-vs-4" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:33%;"> <span class="sr-only">33% Complete</span></div>
                            </div>
                        </li>
                        <li>
                            <h2><span class="counter">3250</span></h2> <small>From Bangladesh</small>
                            <div class="pull-right">60% <i class="fa fa-level-up text-success ctn-ic-5"></i></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-inverse ctn-vs-5" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span class="sr-only">60% Complete</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="courses-inner res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                    <div class="courses-title">
                        <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                        <h2>Apps Development</h2>
                    </div>
                    <div class="courses-alaltic">
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                        <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                    </div>
                    <div class="course-des">
                        <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> 6 Months</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                        <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                    </div>
                    <div class="product-buttons">
                        <button type="button" class="button-default cart-btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
    $('#table').DataTable();
});
</script>

@endsection
