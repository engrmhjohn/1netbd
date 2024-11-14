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
        <img src="{{ asset('backendAssets') }}/images/wifii.gif" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <div class="hor-header header">
                <div class="container main-container">
                    <div class="mobile_nav">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal" href="{{ route('/') }}">
                            <img src="{{ asset($company_info->color_logo) }}" class="header-brand-img light-logo1" alt="Color logo" style="max-width: 165px; height: auto; margin-top: -5px;">
                            <img src="{{ asset($company_info->white_logo) }}" class="logo-3" style="height: auto; max-width: 165px; margin-top: -5px;">
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

    <!-- Chat Widget Toggle Button -->
    <div id="chat-widget" class="wow zoomIn" data-wow-delay="0.1s">
        <button id="toggle-button" onclick="toggleChat()">
            <i class="fa fa-comments-o"></i>
        </button>

        <!-- Chat options -->
        <div id="chat-options" class="chat-options">
            <a href="https://maps.app.goo.gl/16jiftsFNSZoCVZc7" target="_blank" class="chat-option"> <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/maps.jpg" alt="Social Logo"> </a>
            <a href="mailto:info@1netbd.com" class="chat-option"> <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/mail.jpg" alt="Social Logo"> </a>
            <a href="tel:+8801720930101" class="chat-option"> <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/call.jpg" alt="Social Logo"> </a>
            <a href="https://m.me/OneNet.ISP" target="_blank" class="chat-option"> <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/messenger.jpg" alt="Social Logo"> </a>
            <a href="https://wa.me/+8801909102555" target="_blank" class="chat-option"> <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/wa.jpg" alt="Social Logo"> </a>
        </div>
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

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('backendAssets') }}/plugins/select2/select2.full.min.js"></script>
    <!-- SELECT2 JS -->
    <script src="{{ asset('backendAssets') }}/js/select2.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('backendAssets') }}/js/formelementadvnced.js"></script>
    <script src="{{ asset('backendAssets') }}/js/form-elements.js"></script>


    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
            var Tawk_API = Tawk_API || {}
                , Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script")
                    , s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/668396079d7f358570d60985/1i1p044b7';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();

        </script> --}}
    <!--End of Tawk.to Script-->

</body>

</html>
