<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backendAssets') }}/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>Admin Register</title>

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

</head>

<body class="app sidebar-mini ltr login-img">
    @php
    $company_info = \App\Models\CompanyInfo::first();
    @endphp
    @php
    $areas = App\Models\Area::where('status', '1')->orderBy('en_area_name','asc')->get();
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
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="{{ url('/') }}"><img src="{{ asset($company_info->color_logo) }}" class="header-brand-img" alt="" style="height: auto; max-width: 165px;"></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <span class="login100-form-title pb-3">
                                User Register
                            </span>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid name is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-account text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid username is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-edit text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Employee ID" name="employee_id" value="{{ old('employee_id') }}" required autofocus autocomplete="employee_id">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid phone is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-phone text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Phone" type="text" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="phone">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            </div>

                                            <div class="form-group">
                                                <select name="area_id" required class="form-control select2-show-search form-select" data-placeholder="Choose Branch">
                                                    <option label="Choose one"></option>
                                                    @foreach ($areas as $item)
                                                    <option value="{{ $item->id }}">{{ $item->en_area_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" id="password" name="password" required autocomplete="new-password" placeholder="Password (Min. 8)">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button class="login100-form-btn btn-primary" type="submit">Register</button>
                                            </div>
                                            <label class="login-social-icon"><span>Already Admin?</span></label>
                                            <div class="d-flex justify-content-center">

                                                <a href="{{ route('login') }}" class="text-primary ms-1">Sign In
                                                    Instead</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

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

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('backendAssets') }}/plugins/select2/select2.full.min.js"></script>
    <!-- SELECT2 JS -->
    <script src="{{ asset('backendAssets') }}/js/select2.js"></script>

    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('backendAssets') }}/js/formelementadvnced.js"></script>
    <script src="{{ asset('backendAssets') }}/js/form-elements.js"></script>

</body>

</html>
