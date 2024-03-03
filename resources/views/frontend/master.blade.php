<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="One Net">
    <meta name="author" content="One Net">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backendAssets') }}/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>@yield('title')</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backendAssets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('backendAssets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('backendAssets') }}/css/custom.css" rel="stylesheet">
    <link href="{{ asset('backendAssets') }}/css/responsive.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('backendAssets') }}/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backendAssets') }}/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('backendAssets') }}/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('backendAssets') }}/switcher/demo.css" rel="stylesheet">

</head>

<style>
    form .error_text {
        color: red;
    }
</style>

<body class="app ltr landing-page horizontal">
    @include('sweetalert::alert')
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backendAssets') }}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal" href="{{ route('/') }}">
                            <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/logo.png"
                                class="header-brand-img light-logo1" alt="logo"
                                style="max-width: 165px; height: auto;">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                                    <!-- SEARCH -->
                                    <div class="header-nav-right p-5">
                                        @if (Auth::check())
                                            <a href="{{ url('/dashboard') }}"
                                                class="btn ripple btn-min w-sm btn-danger me-2 my-auto"
                                                target="_blank">Dashboard
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="btn ripple btn-min w-sm btn-danger me-2 my-auto"
                                                target="_blank">Login
                                            </a>
                                            <a href="{{ route('register') }}"
                                                class="btn ripple btn-min w-sm btn-dark me-2 my-auto"
                                                target="_blank">Register
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            @include('frontend.include.topbar')
            @include('frontend.include.header')


            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container">
                        @yield('content')
                    </div>
                    <!-- CONTAINER CLOSED-->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER OPEN -->
        @include('frontend.include.footer')
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('backendAssets') }}/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- COUNTERS JS-->
    <script src="{{ asset('backendAssets') }}/plugins/counters/counterup.min.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/counters/waypoints.min.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/counters/counters-1.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backendAssets') }}/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/company-slider/slider.js"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('backendAssets') }}/plugins/fileuploads/js/fileupload.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/fileuploads/js/file-upload.js"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('backendAssets') }}/plugins/rating/jquery-rate-picker.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/rating/rating-picker.js"></script>

    <!-- Star Rating-1 Js-->
    <script src="{{ asset('backendAssets') }}/plugins/ratings-2/jquery.star-rating.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/ratings-2/star-rating.js"></script>

    <!-- Sticky js -->
    <script src="{{ asset('backendAssets') }}/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backendAssets') }}/js/landing.js"></script>

</body>

</html>
