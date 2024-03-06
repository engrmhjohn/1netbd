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
    <title>Email Verification</title>

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
    @php
    $company_info = \App\Models\CompanyInfo::first();
@endphp
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
                        <a href="{{ route('/') }}"><img src="{{ asset($company_info->color_logo) }}"
                                class="header-brand-img m-0" alt="" style="height: auto; max-width: 165px;"></a>
                    </div>
                </div>

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <div class="login100-form validate-form">
                            <div class="alert alert-success" role="alert">
                                <ul>
                                    <li> <i class="zmdi zmdi-email" aria-hidden="true"></i> Verification Email Sent!
                                    </li>
                                </ul>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                              </div>
                        @endif
                            <p class="text-muted">Before continuing, could you verify your email address by clicking on
                                the link we just emailed to you? If you didn't receive the email, we will gladly send
                                you another.</p>
                            @if (session('status') == 'verification-link-sent')
                                <div class="text-danger mb-3">
                                    A new verification link has been sent to the email address you provided in your profile settings.
                                </div>
                            @endif
                            <div class="submit">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary form-control">Resend Verification
                                        Email</button>
                                </form>
                            </div>
                            <div class="text-center mt-4">
                                <p class="text-dark mb-0 d-inline-flex"><a class="text-primary ms-1"
                                        href="{{ route('profile.show') }}">Edit Profile</a></p>
                            </div>
                            <label class="login-social-icon"><span>OR</span></label>
                            <div class="d-flex justify-content-center">
                                <form method="POST" action="{{ route('logout') }}" class="inline">
                                    @csrf

                                    <button type="submit" class="btn btn-danger">
                                        Log Out
                                    </button>
                                </form>
                            </div>
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