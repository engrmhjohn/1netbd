<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mehedi Hasan John">
    <meta name="author" content="Mehedi Hasan John">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backendAssets') }}/images/brand/favicon.ico">

    <!-- TITLE -->
    <title> @yield('title') </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backendAssets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('backendAssets') }}/css/style.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('backendAssets') }}/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backendAssets') }}/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('backendAssets') }}/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('backendAssets') }}/switcher/demo.css" rel="stylesheet">

    <!-- tostr alert css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="app sidebar-mini ltr light-mode">


    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backendAssets') }}/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            @include('backend.include.header')
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            @include('backend.include.left-sidebar')
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        @include('backend.include.page-header')
                        <!-- PAGE-HEADER END -->

                        @yield('content')

                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- FOOTER -->
        @include('backend.include.footer')
        <!-- FOOTER END -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="{{ asset('backendAssets') }}/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/popper.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SPARKLINE JS-->
        <script src="{{ asset('backendAssets') }}/js/jquery.sparkline.min.js"></script>

        <!-- Sticky js -->
        <script src="{{ asset('backendAssets') }}/js/sticky.js"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="{{ asset('backendAssets') }}/js/circle-progress.min.js"></script>

        <!-- PIETY CHART JS-->
        <script src="{{ asset('backendAssets') }}/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/peitychart/peitychart.init.js"></script>

        <!-- SIDEBAR JS -->
        <script src="{{ asset('backendAssets') }}/plugins/sidebar/sidebar.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{ asset('backendAssets') }}/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/p-scroll/pscroll.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/p-scroll/pscroll-1.js"></script>

        <!-- INTERNAL CHARTJS CHART JS-->
        <script src="{{ asset('backendAssets') }}/plugins/chart/Chart.bundle.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/chart/utils.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{ asset('backendAssets') }}/plugins/select2/select2.full.min.js"></script>


        <!-- DATA TABLE JS-->
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/jszip.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/buttons.html5.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/buttons.print.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/js/buttons.colVis.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/datatable/responsive.bootstrap5.min.js"></script>
        <script src="{{ asset('backendAssets') }}/js/table-data.js"></script>

        <!-- INTERNAL APEXCHART JS -->
        <script src="{{ asset('backendAssets') }}/js/apexcharts.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/apexchart/irregular-data-series.js"></script>

        <!-- INTERNAL Flot JS -->
        <script src="{{ asset('backendAssets') }}/plugins/flot/jquery.flot.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/flot/jquery.flot.fillbetween.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/flot/chart.flot.sampledata.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/flot/dashboard.sampledata.js"></script>

        <!-- INTERNAL Vector js -->
        <script src="{{ asset('backendAssets') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- SIDE-MENU JS-->
        <script src="{{ asset('backendAssets') }}/plugins/sidemenu/sidemenu.js"></script>

        <!-- TypeHead js -->
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap5-typehead/autocomplete.js"></script>
        <script src="{{ asset('backendAssets') }}/js/typehead.js"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{ asset('backendAssets') }}/js/index1.js"></script>

        <!-- Color Theme js -->
        <script src="{{ asset('backendAssets') }}/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="{{ asset('backendAssets') }}/js/custom.js"></script>

        <!-- Custom-switcher -->
        <script src="{{ asset('backendAssets') }}/js/custom-swicher.js"></script>

        <!-- Switcher js -->
        <script src="{{ asset('backendAssets') }}/switcher/js/switcher.js"></script>


        <!-- INPUT MASK JS-->
        <script src="{{ asset('backendAssets') }}/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- FILE UPLOADES JS -->
        <script src="{{ asset('backendAssets') }}/plugins/fileuploads/js/fileupload.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/fileuploads/js/file-upload.js"></script>

        <!-- INTERNAL File-Uploads Js-->
        <script src="{{ asset('backendAssets') }}/plugins/fancyuploder/jquery.ui.widget.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/fancyuploder/jquery.fileupload.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/fancyuploder/jquery.iframe-transport.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/fancyuploder/fancy-uploader.js"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('backendAssets') }}/js/select2.js"></script>

        <!-- FORMELEMENTS JS -->
        <script src="{{ asset('backendAssets') }}/js/formelementadvnced.js"></script>
        <script src="{{ asset('backendAssets') }}/js/form-elements.js"></script>

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- BOOTSTRAP-DATERANGEPICKER JS -->
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap-daterangepicker/moment.min.js"></script>

        <!-- INTERNAL Bootstrap-Datepicker js-->
        <script src="{{ asset('backendAssets') }}/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

        <!-- DATEPICKER JS -->
        <script src="{{ asset('backendAssets') }}/plugins/date-picker/date-picker.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/date-picker/jquery-ui.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/input-mask/jquery.maskedinput.js"></script>

        <!-- INTERNAL Sumoselect js-->
        <script src="{{ asset('backendAssets') }}/plugins/sumoselect/jquery.sumoselect.js"></script>

        <!-- INTERNAL SUMMERNOTE Editor JS -->
        <script src="{{ asset('backendAssets') }}/plugins/summernote/summernote1.js"></script>
        <script src="{{ asset('backendAssets') }}/js/summernote.js"></script>

        <!-- TIMEPICKER JS -->
        <script src="{{ asset('backendAssets') }}/plugins/time-picker/jquery.timepicker.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/time-picker/toggles.min.js"></script>

        <!-- INTERNAL intlTelInput js-->
        <script src="{{ asset('backendAssets') }}/plugins/intl-tel-input-master/intlTelInput.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/intl-tel-input-master/country-select.js"></script>
        <script src="{{ asset('backendAssets') }}/plugins/intl-tel-input-master/utils.js"></script>

        <!-- INTERNAL jquery transfer js-->
        <script src="{{ asset('backendAssets') }}/plugins/jQuerytransfer/jquery.transfer.js"></script>

        <!-- INTERNAL multi js-->
        <script src="{{ asset('backendAssets') }}/plugins/multi/multi.min.js"></script>




        <!-- tostr alert js  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if (Session::has('message'))
            <script>
                toastr.options = {
                    "progressBar": true,
                    "closeButton": true,
                }
                toastr.success("{{ Session::get('message') }}")
            </script>
        @else
        @endif

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

</body>

</html>
