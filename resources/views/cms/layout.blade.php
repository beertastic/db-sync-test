<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>@yield('page_title', 'Superyachts Admin')</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="/cms/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/cms/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="/cms/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="/cms/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/cms/vendor/ladda/dist/ladda-themeless.min.css" />
    <link rel="stylesheet" href="/cms/vendor/sweetalert/lib/sweet-alert.css" />
    <link rel="stylesheet" href="/cms/vendor/toastr/build/toastr.min.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="/cms/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/cms/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="/cms/styles/style.css">

    <!-- REMOVE TO A SEP FILE!! -->
    <style>
        .progress-bar-purple {
            background-color: purple !important;
        }

    </style>

</head>
<body class="fixed-footer fixed-small-header sidebar-scroll fixed-navbar">
<body class="fixed-footer fixed-small-header sidebar-scroll fixed-navbar">
<body class="fixed-footer fixed-small-header sidebar-scroll fixed-navbar">
<body class="fixed-footer fixed-small-header sidebar-scroll fixed-navbar">
<body class="fixed-footer fixed-small-header sidebar-scroll fixed-navbar">

<!-- Simple splash screen-->
<div class="splash">
    <div class="color-line"></div>
    <div class="splash-title">
        <h1>Superyachts - Responsive Admin Theme</h1>
        <p>Manage all Superyachts data</p>
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span>
            Superyachts
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">HOMER APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder="Search something special" class="form-control" name="search">
            </div>
        </form>
        <div class="mobile-menu">
            <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                <i class="fa fa-chevron-down"></i>
            </button>
            <div class="collapse mobile-navbar" id="mobile-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="" href="login.html">Login</a>
                    </li>
                    <li>
                        <a class="" href="login.html">Logout</a>
                    </li>
                    <li>
                        <a class="" href="profile.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                        <span class="label label-warning">2</span>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="sidebar" class="right-sidebar-toggle">
                        <i class="pe-7s-upload pe-7s-news-paper"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="login.html">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>




<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index.html">
                <img src="/cms/images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase">Tristan Pretty</span>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <small class="text-muted">Web App developer <b class="caret"></b></small>
                    </a>
                    <ul class="dropdown-menu animated flipInX m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <ul class="nav" id="side-menu">
            <li @if(Request::path() == 'admin') class="active"@endif>
                <a href="{{ url('admin') }}"> <span class="nav-label">Home</span> </a>
            </li>
            <li @if(Request::path() == 'admin/yacht') class="active"@endif>
                <a href=""> <span class="nav-label">Yachts</span> </a>
            </li>
            <li>
                <a href=""> <span class="nav-label">Brokers</span> </a>
            </li @if(Request::path() == 'admin/broker') class="active"@endif>
            <li>
                <a href=""> <span class="nav-label">Builders / Refitters</span> </a>
            </li>
            <li @if(Request::path() == 'admin/architech') class="active"@endif>
                <a href=""> <span class="nav-label">Architects</span> </a>
            </li>
            <li @if(Request::path() == 'admin/designer') class="active"@endif>
                <a href=""> <span class="nav-label">Designers</span> </a>
            </li>
            <li @if(Request::path() == 'admin/marina') class="active"@endif>
                <a href=""> <span class="nav-label">Marinas</span> </a>
            </li>
            <li @if(Request::path() == 'admin/multimedia') class="active"@endif>
                <a href=""> <span class="nav-label">Multimedia</span> </a>
            </li>
            <li>
                <span class="nav-label">------------------------------------------</span>
            </li>
            <li @if(Request::path() == 'admin/data') class="active"@endif>
                <a href="{{ url('admin/data') }}"> <span class="nav-label">Data Admin</span> </a>
            </li>

        </ul>
    </div>
</aside>



<!-- Main Wrapper -->
<div id="wrapper">


    @yield('main_content', 'This is the main section area')


    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="#" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="#" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="#" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>



    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Laravel 5.6 | PHP 7.2
        </span>
        Company 2008 - {{ date("Y") }}
    </footer>

</div>


<!-- Vendor scripts -->
<script src="/cms/vendor/jquery/dist/jquery.min.js"></script>
<script src="/cms/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="/cms/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/cms/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="/cms/vendor/jquery-flot/jquery.flot.pie.js"></script>
<script src="/cms/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="/cms/vendor/jquery.flot.spline/index.js"></script>
<script src="/cms/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="/cms/vendor/iCheck/icheck.min.js"></script>
<script src="/cms/vendor/peity/jquery.peity.min.js"></script>
<script src="/cms/vendor/sparkline/index.js"></script>
<script src="/cms/vendor/ladda/dist/spin.min.js"></script>
<script src="/cms/vendor/ladda/dist/ladda.min.js"></script>
<script src="/cms/vendor/ladda/dist/ladda.jquery.min.js"></script>
<script src="/cms/vendor/sweetalert/lib/sweet-alert.min.js"></script>
<script src="/cms/vendor/toastr/build/toastr.min.js"></script>

<script>

    $(function () {

        @yield('custom_jquery', '')

    });

</script>


<!-- App scripts -->
<script src="/cms/scripts/homer.js"></script>
<script src="/cms/scripts/charts.js"></script>

</body>
</html>