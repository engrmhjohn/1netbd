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

<body class="app ltr landing-page horizontal light-mode">
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
                    <div class="mobile_nav">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal" href="{{ route('/') }}">
                            <img src="{{ asset('backendAssets') }}/static_images/logo.png"
                                class="header-brand-img light-logo1" alt="logo"
                                style="max-width: 165px; height: auto;">
                                <img src="{{ asset('backendAssets') }}/static_images/logo_white.png" class="logo-3" style="height: auto; max-width: 165px;">
                        </a>
                        <!-- LOGO -->
                        <a class="nav-link icon theme-layout nav-link-bg layout-setting" id="theme-toggle">
                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                        </a>
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

    <!-- Sticky js -->
    <script src="{{ asset('backendAssets') }}/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backendAssets') }}/js/landing.js"></script>
    <script src="{{ asset('backendAssets') }}/js/custom.js"></script>

</body>

</html>
