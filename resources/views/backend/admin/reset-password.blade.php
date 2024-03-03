<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backendAssets') }}/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>Reset Password</title>

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

    <style>
        .container-login100 {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('backendAssets') }}/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- Theme-Layout -->

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset('backendAssets') }}/images/brand/logo.png"
                                class="header-brand-img m-0" alt=""></a>
                    </div>
                </div>

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <div class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                Reset Password
                            </span>
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                    
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="wrap-input100 validate-input input-group"
                                    data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 ms-0 form-control" type="email"
                                        placeholder="Email" name="email" value="{{ $request->email }}" required autofocus
                                        autocomplete="email" readonly>
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="password"
                                        id="password" name="password" required autocomplete="new-password"
                                        placeholder="New Password">
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                    </a>
                                    <input class="input100 border-start-0 form-control ms-0" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm New Password">
                                </div>
                                <div class="submit">
                                    <button type="submit" class="btn btn-primary d-grid form-control">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
    <!-- JQUERY JS -->
    <script src="{{ asset('backendAssets') }}/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('backendAssets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('backendAssets') }}/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{ asset('backendAssets') }}/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backendAssets') }}/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('backendAssets') }}/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backendAssets') }}/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="{{ asset('backendAssets') }}/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="{{ asset('backendAssets') }}/switcher/js/switcher.js"></script>

</body>

</html>