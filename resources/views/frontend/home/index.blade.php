@extends('frontend.master')
@section('title')
    One Net || Home
@endsection
@section('content')
    <!-- Slider OPEN -->
    <div class="pb-0" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel">
                        <div class="slide">
                            <a class="desktop_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/os web.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <a class="mobile_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/1st.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <div class="package_button">
                                <a class="btn btn-danger fw-bold d-block" href=""> Learn More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="slide">
                            <a class="desktop_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/tracker.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <a class="mobile_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/2nd.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <div class="package_button">
                                <a class="btn btn-danger fw-bold" href=""> Learn More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="slide">
                            <a class="desktop_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/internet.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <a class="mobile_slide" href="">
                                <img class="img-fluid" src="{{ asset('backendAssets') }}/static_images/3rd.jpg"
                                    style="height: auto; width: 100%; padding: 0px;" alt="">
                            </a>
                            <div class="package_button">
                                <a class="btn btn-danger fw-bold" href=""> Learn More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider OPEN -->
    <div class="section pb-0">
        <div class="container">
            <div class="row mb-5">
                <h2 class="text-center fw-semibold">Our Popular Packages</h2>
                <span class="landing-title"></span>
            </div>
            <div class="row">
                @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6 mt-5 wow fadeInUp reveal revealleft">
                    <div class="card card-shadow package_card">
                        <div class="package_header bg-primary-transparent">
                            <div class="package_icon_mbps">
                                <div class="icon_box">
                                    <i class="fe fe-wifi"></i>
                                </div>
                                <p>{{ $package->en_mbps_value }}</p>
                            </div>
                            <div class="package_name">
                                <strong>{{ $package->en_package_name }}</strong>
                            </div>
                            <div class="package_title mt-3">
                                <h1> <strong>{{ $package->en_amount_label }} {{ $package->en_amount }}</strong> <span>/month</span></h1>
                            </div>
                        </div>
                        <div class="package_body">
                            <p>Package Includes:</p>
                            <ul>
                                @if ($package->en_short_info_one)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_one }}
                                </li>
                                @endif
                                @if ($package->en_short_info_two)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_two }}
                                </li>
                                @endif
                                @if ($package->en_short_info_three)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_three }}
                                </li>
                                @endif
                                @if ($package->en_short_info_four)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                        {{ $package->en_short_info_four }}
                                    </li>
                                    @endif
                                @if ($package->en_short_info_five)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                        {{ $package->en_short_info_five }}
                                    </li>
                                    @endif
                                @if ($package->en_short_info_six)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_six }}
                                </li>
                                @endif
                                @if ($package->en_short_info_seven)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_seven }}
                                </li>
                                @endif
                                @if ($package->en_short_info_eight)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                        {{ $package->en_short_info_eight }}
                                    </li>
                                    @endif
                                @if ($package->en_short_info_nine)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                        {{ $package->en_short_info_nine }}
                                    </li>
                                    @endif
                                @if ($package->en_short_info_ten)
                                <li class="d-flex justify-content-space-between">
                                        <i class="fa fa-check-circle"></i>
                                    {{ $package->en_short_info_ten }}
                                </li>
                                @endif
                            </ul>
                            <div class="package_button">
                                <a class="btn btn-outline-success fw-bold" href="{{ route('buy_package', $package->id) }}"> {{ $package->en_button_text }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-end">
                        <a class="btn btn-danger" href="{{ route('front.packages') }}"> <strong>More Pacakges</strong> <i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- At a glance OPEN -->
    <div class="section pb-0">
        <div class="container">
            <div class="row mb-5">
                <h2 class="text-center fw-semibold">At a Glance</h2>
                <span class="landing-title"></span>
            </div>
            <div class="row text-center services-statistics landing-statistics mt-5">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-primary-transparent">
                            <div class="counter-status">
                                <div class="counter-icon bg-primary-transparent box-shadow-primary">
                                    <i class="fe fe-users text-primary fs-23"></i>
                                </div>
                                <div class="test-body text-center">
                                    <h1 class=" mb-0">
                                        <span class="counter fw-semibold counter ">30</span>+
                                    </h1>
                                    <div class="counter-text">
                                        <h5 class="font-weight-normal mb-0 ">Employee</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-secondary-transparent">
                            <div class="counter-status">
                                <div class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                    <i class="fe fe-sunrise text-secondary fs-23"></i>
                                </div>
                                <div class="text-body text-center">
                                    <h1 class=" mb-0">
                                        <span class="counter fw-semibold counter ">10</span>+
                                    </h1>
                                    <div class="counter-text">
                                        <h5 class="font-weight-normal mb-0 ">Experience
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-success-transparent">
                            <div class="counter-status">
                                <div class="counter-icon bg-success-transparent box-shadow-success">
                                    <i class="fe fe-map-pin text-success fs-23"></i>
                                </div>
                                <div class="text-body text-center">
                                    <h1 class=" mb-0">
                                        <span class="counter fw-semibold counter ">9</span>+
                                    </h1>
                                    <div class="counter-text">
                                        <h5 class="font-weight-normal mb-0 ">Area Coverage
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-danger-transparent">
                            <div class="counter-status">
                                <div class="counter-icon bg-danger-transparent box-shadow-danger">
                                    <i class="fe fe-wifi text-danger fs-23"></i>
                                </div>
                                <div class="text-body text-center">
                                    <h1 class=" mb-0">
                                        <span class="counter fw-semibold counter ">8000</span>+
                                    </h1>
                                    <div class="counter-text">
                                        <h5 class="font-weight-normal mb-0 ">Internet User
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- At a glance CLOSED -->

    <!-- Why Choose Us OPEN -->
    <div class="sptb section bg-white" id="Features">
        <div class="container">
            <div class="row">
                <h2 class="text-center fw-semibold">Why You Choose Us?</h2>
                <span class="landing-title"></span>
                <div class="row mt-7">
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-1 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="64" fill="#42A3DB" />
                                    <path fill="#347CBE"
                                        d="M85.5 26.6L66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z" />
                                    <path fill="#CD2F30"
                                        d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z" />
                                    <path fill="#F04D45"
                                        d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z" />
                                    <path fill="#FFF"
                                        d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z" />
                                    <path fill="#FFCD0A"
                                        d="M64 70.8c-12.2 0-22.1-9.9-22.1-22.1 0-12.2 9.9-22.1 22.1-22.1 12.2 0 22.1 9.9 22.1 22.1 0 12.2-9.9 22.1-22.1 22.1z" />
                                    <path fill="#FFF"
                                        d="M59.9 61c-.6 0-1.1-.2-1.5-.7l-8.3-9.2c-.7-.8-.7-2.1.1-2.8.8-.7 2.1-.7 2.8.1l6.7 7.5 15.1-18.8c.7-.9 2-1 2.8-.3.9.7 1 2 .3 2.8L61.4 60.2c-.3.5-.9.8-1.5.8z" />
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Super Fast Speed</h4>
                                <p class="mb-0">We understand the need for speed. Our
                                    cutting-edge technology ensures that you enjoy
                                    lightning-fast internet connectivity for all your online
                                    activities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card  features main-features main-features-2 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="64" fill="#FFCD0A" />
                                    <path fill="#F6AF1A"
                                        d="M127.7 57.7l-26.4-26.4-74.7 58.8L64.5 128c35.1-.3 63.5-28.8 63.5-64 0-2.1-.1-4.2-.3-6.3z" />
                                    <path fill="#CFD5DF" d="M76.2 102.9H51.8l2-13.6h20.4z" />
                                    <path fill="#545E70"
                                        d="M97.1 91.7H30.9c-3.5 0-6.4-2.9-6.4-6.4V36.1c0-3.5 2.9-6.4 6.4-6.4h66.2c3.5 0 6.4 2.9 6.4 6.4v49.3c0 3.5-2.9 6.3-6.4 6.3z" />
                                    <path fill="#E6E8EB"
                                        d="M24.5 81.4v4c0 3.5 2.9 6.4 6.4 6.4h66.2c3.5 0 6.4-2.9 6.4-6.4v-4h-79z" />
                                    <path fill="#49C7EF"
                                        d="M30.9 74.3c-1 0-1.8-.8-1.8-1.8V36.1c0-1 .8-1.8 1.8-1.8h66.2c1 0 1.8.8 1.8 1.8v36.4c0 1-.8 1.8-1.8 1.8H30.9z" />
                                    <path fill="#17B6EA" d="M37.8 34.3h52.5v40H37.8z" />
                                    <path fill="#E6E8EB"
                                        d="M76.7 105.3H51.3c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4h25.4c1.3 0 2.4 1.1 2.4 2.4-.1 1.3-1.1 2.4-2.4 2.4z" />
                                    <path fill="#ACB2B9" d="M53.2 91.7l22.7 8.8-1.3-8.8z" />
                                    <path fill="#FFF"
                                        d="M75.7 47.8H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h23.3c.6 0 1.1.5 1.1 1.1v2.9c0 .6-.4 1.1-1 1.1zM75.7 57.1H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h23.3c.6 0 1.1.5 1.1 1.1V56c0 .6-.4 1.1-1 1.1z" />
                                    <path fill="#FFCD0A"
                                        d="M62.8 65.9H52.3c-.6 0-1.1-.5-1.1-1.1v-2.9c0-.6.5-1.1 1.1-1.1h10.4c.6 0 1.1.5 1.1 1.1v2.9c0 .6-.4 1.1-1 1.1z" />
                                    <g fill="#CFD5DF">
                                        <circle cx="54.1" cy="45.3" r="1.2" />
                                        <circle cx="57.6" cy="45.3" r="1.2" />
                                        <circle cx="61" cy="45.3" r="1.2" />
                                        <circle cx="64.5" cy="45.3" r="1.2" />
                                        <circle cx="67.9" cy="45.3" r="1.2" />
                                    </g>
                                    <g fill="#CFD5DF">
                                        <circle cx="54.1" cy="54.6" r="1.2" />
                                        <circle cx="57.6" cy="54.6" r="1.2" />
                                        <circle cx="61" cy="54.6" r="1.2" />
                                        <circle cx="64.5" cy="54.6" r="1.2" />
                                        <circle cx="67.9" cy="54.6" r="1.2" />
                                    </g>
                                    <g fill="#FFF">
                                        <path
                                            d="M56.9 64.4c-.3.3-.6.4-1 .4s-.8-.1-1-.4c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.8.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1zm-.2-1c0-.2-.1-.5-.2-.6-.2-.2-.4-.3-.6-.3s-.4.1-.6.3c-.2.2-.2.4-.2.6 0 .2.1.5.2.6.2.2.4.3.6.3s.4-.1.6-.3c.1-.2.2-.4.2-.6zM58.3 62h.6v1.1l1-1.1h.8l-1.1 1.2c.1.1.3.4.5.7s.4.6.6.8H60l-.8-1.1-.3.4v.8h-.6V62z" />
                                    </g>
                                    <circle cx="64" cy="86.6" r="2.8" fill="#545E70" />
                                    <g fill="#E6E8EB">
                                        <path
                                            d="M92.6 49.7v9.2c0 1.2 1.6 1.6 2.2.5l2.3-4.6c.2-.3.2-.7 0-1l-2.3-4.6c-.6-1.1-2.2-.7-2.2.5zM36.1 58.9v-9.2c0-1.2-1.6-1.6-2.2-.5l-2.3 4.6c-.2.3-.2.7 0 1l2.3 4.6c.6 1.1 2.2.7 2.2-.5z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">24/7 Customer Care</h4>
                                <p class="mb-0">
                                    Our customer care team is available 24/7 to help you with
                                    any problems you may have. We're committed to providing
                                    excellent customer service.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-11 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg id="SvgjsSvg1001" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs id="SvgjsDefs1002"></defs>
                                    <g id="SvgjsG1008"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"
                                            width="50" height="50">
                                            <circle cx="64" cy="64" r="64" fill="#bed530"
                                                class="colorBED530 svgShape">
                                            </circle>
                                            <path fill="#acc437"
                                                d="M112.8 53.7l-4.6-3.7L85 27l-.9 6.9H77L70 27l-1.3 3.7-6 5.7-9.4-9.4-.9 3.7-8.9 2.3-6-6-5 8.2-3.9 63.7 28.9 28.8c2.2.2 4.4.3 6.6.3 33.7 0 61.4-26.2 63.8-59.3l-15.1-15z"
                                                class="colorACC437 svgShape"></path>
                                            <path fill="#ffffff"
                                                d="M86.5 101.8H34.2c-3.6 0-6.5-2.9-6.5-6.5v-58c0-3.6 2.9-6.5 6.5-6.5h52.3c3.6 0 6.5 2.9 6.5 6.5v58c0 3.6-2.9 6.5-6.5 6.5z"
                                                class="colorFFF svgShape"></path>
                                            <path fill="#e6e8eb"
                                                d="M75.6 78l-9.5 12.3 11.5 11.5h8.8c3.6 0 6.5-2.9 6.5-6.5V67.7L75.6 78z"
                                                class="colorE6E8EB svgShape"></path>
                                            <path fill="#e2247e" d="M88.5 58.8h8v31.9h-8z"
                                                transform="rotate(-135.032 92.483 74.797)" class="colorE2247E svgShape">
                                            </path>
                                            <path fill="#ee3e88" d="M82.9 53.2h8v31.9h-8z"
                                                transform="rotate(-135.032 86.846 69.166)" class="colorEE3E88 svgShape">
                                            </path>
                                            <path fill="#f06197" d="M77.2 47.6h8v31.9h-8z"
                                                transform="rotate(-135.032 81.209 63.535)" class="colorF06197 svgShape">
                                            </path>
                                            <path fill="#cfd5df" d="M87 56h23.9v2.2H87z"
                                                transform="rotate(-135.032 98.922 57.076)" class="colorCFD5DF svgShape">
                                            </path>
                                            <path fill="#545e70"
                                                d="M102.2 43.2l10.5 10.5c1.8 1.8 1.8 4.6 0 6.4l-4.6 4.6-16.8-16.9 4.6-4.6c1.7-1.7 4.6-1.7 6.3 0z"
                                                class="color545E70 svgShape"></path>
                                            <path fill="#fcd65e"
                                                d="M67.1 72l-1.7 16.7c-.1 1.1.8 2 1.9 1.9L84 88.9 67.1 72z"
                                                class="colorFCD65E svgShape"></path>
                                            <path fill="#f6af1a" d="M65.4 88.7c-.1.6.2 1.1.5 1.5l9.6-9.6-8.4-8.6-1.7 16.7z"
                                                class="colorF6AF1A svgShape"></path>
                                            <path fill="#ffcd0a" d="M66.1 90.3l12.2-7-5.6-5.6-7 12.2c.2.1.3.3.4.4z"
                                                class="colorFFCD0A svgShape"></path>
                                            <path fill="#7d6c7c" d="M65.9 83.9l-.5 4.8c-.1 1.1.8 2 1.9 1.9l4.8-.5-6.2-6.2z"
                                                class="color7D6C7C svgShape"></path>
                                            <path fill="#5b4b57" d="M65.9 83.9l-.5 4.8c-.1.6.2 1.1.5 1.5l3.1-3.1-3.1-3.2z"
                                                class="color5B4B57 svgShape"></path>
                                            <path fill="#6b5969" d="M68 86l-2.2 3.9c.1.2.2.3.4.4l3.9-2.3-2.1-2z"
                                                class="color6B5969 svgShape"></path>
                                            <circle cx="84.1" cy="39.6" r="4.1" fill="#bed530"
                                                class="colorBED530 svgShape">
                                            </circle>
                                            <circle cx="68.2" cy="39.6" r="4.1" fill="#bed530"
                                                class="colorBED530 svgShape">
                                            </circle>
                                            <circle cx="52.4" cy="39.6" r="4.1" fill="#bed530"
                                                class="colorBED530 svgShape">
                                            </circle>
                                            <circle cx="36.5" cy="39.6" r="4.1" fill="#bed530"
                                                class="colorBED530 svgShape">
                                            </circle>
                                            <path fill="#545e70"
                                                d="M84.1 40.5c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c.1 1.1-.8 1.9-1.9 1.9zM68.3 40.5c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1.1-.9 1.9-1.9 1.9zM52.4 40.6c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1-.9 1.9-1.9 1.9zM36.5 40.6c-1.1 0-1.9-.9-1.9-1.9v-10c0-1.1.9-1.9 1.9-1.9 1.1 0 1.9.9 1.9 1.9v10c0 1-.8 1.9-1.9 1.9z"
                                                class="color545E70 svgShape"></path>
                                        </svg></g>
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Maximum Uptime</h4>
                                <p class="mb-0">
                                    We guarantee a maximum uptime of 99.9%. This means you can
                                    count on us to keep you connected, even during peak hours.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-10 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs id="SvgjsDefs1055"></defs>
                                    <g id="SvgjsG1056"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"
                                            width="50" height="50">
                                            <circle cx="64" cy="64" r="64" fill="#58e1ef"
                                                class="colorD9B9A9 svgShape">
                                            </circle>
                                            <path fill="#47d4e4"
                                                d="M71.4 127.6c29.4-3.4 52.7-26.7 56.1-56.1L74.8 18.6 51.9 31.2 31.2 47.4 18.6 74.8l52.8 52.8z"
                                                class="colorD6AB9A svgShape"></path>
                                            <path fill="#6b5969"
                                                d="M64 101.5c-20.7 0-37.5-16.8-37.5-37.5S43.3 26.5 64 26.5s37.5 16.8 37.5 37.5-16.8 37.5-37.5 37.5zm0-70.3c-18.1 0-32.8 14.7-32.8 32.8S45.9 96.8 64 96.8 96.8 82.1 96.8 64 82.1 31.2 64 31.2z"
                                                class="color6B5969 svgShape"></path>
                                            <circle cx="64" cy="28.8" r="14.8" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <path fill="#8663a7"
                                                d="M64 39.1c-5.6 0-10.2-4.6-10.2-10.2S58.4 18.7 64 18.7s10.2 4.6 10.2 10.2S69.6 39.1 64 39.1z"
                                                class="color8663A7 svgShape"></path>
                                            <circle cx="64" cy="99.2" r="14.8" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <path fill="#3d9c46"
                                                d="M64 109.4c-5.6 0-10.2-4.6-10.2-10.2S58.4 89 64 89s10.2 4.6 10.2 10.2-4.6 10.2-10.2 10.2z"
                                                class="color3D9C46 svgShape"></path>
                                            <circle cx="99.2" cy="64" r="14.8" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <path fill="#ee3e88"
                                                d="M99.2 74.2C93.6 74.2 89 69.6 89 64s4.6-10.2 10.2-10.2 10.2 4.6 10.2 10.2-4.6 10.2-10.2 10.2z"
                                                class="colorEE3E88 svgShape"></path>
                                            <circle cx="28.8" cy="64" r="14.8" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <path fill="#ffcd0a"
                                                d="M28.8 74.2c-5.6 0-10.2-4.6-10.2-10.2s4.6-10.2 10.2-10.2S39.1 58.4 39.1 64s-4.6 10.2-10.3 10.2z"
                                                class="colorFFCD0A svgShape"></path>
                                            <path fill="#ffffff"
                                                d="M98.4 61.8v1.9h2.5v1.5h-2.5v2.7h4.4v1.6h-7.4v-1.6h1.2v-2.7h-1.3v-1.5h1.3v-1.9c0-1.2.3-2.1.9-2.6.6-.5 1.4-.8 2.4-.8 1.3 0 2.3.6 2.9 1.7l-1.2 1c-.4-.7-.9-1-1.6-1-.5 0-.9.1-1.2.4s-.4.7-.4 1.3z"
                                                class="colorFFF svgShape"></path>
                                        </svg></g>
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">IPv4 & IPv6</h4>
                                <p class="mb-0">
                                    We offer both IPv4 and IPv6 connectivity options, ensuring
                                    seamless compatibility with all your devices and
                                    applications, both now and in the future.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-9 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg id="SvgjsSvg1156" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs id="SvgjsDefs1157"></defs>
                                    <g id="SvgjsG1158"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"
                                            width="50" height="50">
                                            <circle cx="64" cy="64" r="64" fill="#f579a2"
                                                class="color1F68B0 svgShape">
                                            </circle>
                                            <path fill="#d6607b"
                                                d="M128 64c0-2.7-.2-5.3-.5-7.9l-21.8-21.8-84 58.7 34.5 34.5c2.6.3 5.2.5 7.8.5 35.3 0 64-28.7 64-64z"
                                                class="color2A519C svgShape"></path>
                                            <path fill="#ffffff"
                                                d="M101.8 95H26.2c-3.3 0-6-2.7-6-6V39c0-3.3 2.7-6 6-6h75.7c3.3 0 6 2.7 6 6v50c-.1 3.3-2.7 6-6.1 6z"
                                                class="colorFFF svgShape"></path>
                                            <path fill="#ffffff"
                                                d="M20.2 44.9V89c0 3.3 2.7 6 6 6h75.7c3.3 0 6-2.7 6-6V44.9H20.2z"
                                                class="colorFFF svgShape"></path>
                                            <path fill="#3c29de"
                                                d="M107.8 45v-6c0-3.3-2.7-6-6-6H26.2c-3.3 0-6 2.7-6 6v6h87.6z"
                                                class="colorFFCD0A svgShape"></path>
                                            <circle cx="28.7" cy="39" r="3.3" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <circle cx="28.7" cy="39" r="1.9" fill="#543bc1"
                                                class="colorF04D45 svgShape">
                                            </circle>
                                            <circle cx="37.3" cy="39" r="3.3" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <circle cx="37.3" cy="39" r="1.9" fill="#9c583d"
                                                class="color3D9C46 svgShape">
                                            </circle>
                                            <circle cx="46" cy="39" r="3.3" fill="#ffffff"
                                                class="colorFFF svgShape">
                                            </circle>
                                            <circle cx="46" cy="39" r="1.9" fill="#6b595d"
                                                class="color6B5969 svgShape">
                                            </circle>
                                            <path fill="#ffffff"
                                                d="M99.3 42.3H57.2c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3h42.1c1.8 0 3.3 1.5 3.3 3.3 0 1.8-1.5 3.3-3.3 3.3z"
                                                class="colorFFF svgShape"></path>
                                            <path fill="#dfdecf"
                                                d="M101.8 50.4H26.2c-.3 0-.5.2-.5.5V89c0 .3.2.5.5.5h75.7c.3 0 .5-.2.5-.5V50.9c-.1-.3-.3-.5-.6-.5zM34.5 66.6H41v6.6h-6.5v-6.6zm-1 6.7h-6.8v-6.6h6.8v6.6zm8.5-6.7h6.5v6.6H42v-6.6zm36.5-1H72V59h6.5v6.6zm1-6.6H86v6.6h-6.5V59zM57 66.6h6.5v6.6H57v-6.6zm-1 6.7h-6.5v-6.6H56v6.6zm8.5-6.7H71v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H72v-6.6zm-1-1h-6.5V59H71v6.6zm-7.5 0H57V59h6.5v6.6zm-7.5 0h-6.5V59H56v6.6zm-7.5 0H42V59h6.5v6.6zm0 8.7v6.6H42v-6.6h6.5zm1 0H56v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H57v-6.6zm7.5 0H71v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H72v-6.6zm7.5 0H86v6.6h-6.5v-6.6zm0-1v-6.6H86v6.6h-6.5zm7.5-6.7h6.5v6.6H87v-6.6zm7.5 0h6.8v6.6h-6.8v-6.6zm0-1V59h6.8v6.6h-6.8zm-1 0H87V59h6.5v6.6zM87 58v-6.6h6.5V58H87zm-1 0h-6.5v-6.6H86V58zm-7.5 0H72v-6.6h6.5V58zM71 58h-6.5v-6.6H71V58zm-7.5 0H57v-6.6h6.5V58zM56 58h-6.5v-6.6H56V58zm-7.5 0H42v-6.6h6.5V58zM41 58h-6.5v-6.6H41V58zm0 1v6.6h-6.5V59H41zm-7.5 6.6h-6.8V59h6.8v6.6zm-6.8 8.7h6.8v6.6h-6.8v-6.6zm7.8 0H41v6.6h-6.5v-6.6zm6.5 7.6v6.6h-6.5v-6.6H41zm1 0h6.5v6.6H42v-6.6zm7.5 0H56v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H57v-6.6zm7.5 0H71v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H72v-6.6zm7.5 0H86v6.6h-6.5v-6.6zm7.5 0h6.5v6.6H87v-6.6zm0-1v-6.6h6.5v6.6H87zm7.5-6.6h6.8v6.6h-6.8v-6.6zm6.8-16.3h-6.8v-6.6h6.8V58zm-67.8-6.6V58h-6.8v-6.6h6.8zm-6.8 30.5h6.8v6.6h-6.8v-6.6zm67.8 6.6v-6.6h6.8v6.6h-6.8z"
                                                class="colorCFD5DF svgShape"></path>
                                            <path fill="#fff591" d="M30.6 66.1h5.1V89h-5.1z" class="colorD7E14A svgShape">
                                            </path>
                                            <path fill="#9c583d" d="M40.9 61.6H46V89h-5.1z" class="color3D9C46 svgShape">
                                            </path>
                                            <path fill="#f5587b" d="M51.2 68.9h5.1V89h-5.1z" class="colorEE3E88 svgShape">
                                            </path>
                                            <path fill="#a76372" d="M61.5 61.6h5.1V89h-5.1z" class="color8663A7 svgShape">
                                            </path>
                                            <path fill="#c2633e" d="M92.3 69.6h5.1v19.5h-5.1z"
                                                class="color9AC23E svgShape"></path>
                                            <path fill="#543bc1" d="M71.7 54h5.1v35h-5.1z" class="colorF04D45 svgShape">
                                            </path>
                                            <path fill="#b0052b" d="M82 60.8h5.1V89H82z" class="color05B0A6 svgShape">
                                            </path>
                                        </svg></g>
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Magic IP</h4>
                                <p class="mb-0">
                                    We are the only ISP that offers Magic IP, which means your
                                    real IP will be up with any internet even with mobile data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-12 mb-4 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 128 128">
                                    <circle cx="64" cy="64" r="64" fill="#F49C20" />
                                    <path fill="#EC7B24"
                                        d="M127.5 56.2l-30-30-7.4 8.2-21-21h-6.7l-5.5 4.9 5.5 27.2h17.9l-50.1 56 26 26c2.6.3 5.2.5 7.8.5 35.3 0 64-28.7 64-64 0-2.6-.2-5.2-.5-7.8z" />
                                    <path fill="#545E70"
                                        d="M91.3 104.8H36.7c-4.4 0-8-3.6-8-8V31.2c0-4.4 3.6-8 8-8h54.6c4.4 0 8 3.6 8 8v65.6c0 4.4-3.6 8-8 8z" />
                                    <path fill="#FFF" d="M34.7 29.3h58.7V94H34.7z" />
                                    <path fill="#CFD5DF"
                                        d="M87.8 32.7H40.1c0-2.9 1.2-5.6 3.1-7.5 1.9-1.9 4.6-3.1 7.5-3.1h6.1v-3.8c0-3.9 3.2-7.1 7.1-7.1 3.9 0 7.1 3.2 7.1 7.1v3.8h6.1c6 0 10.7 4.8 10.7 10.6z" />
                                    <path fill="#ACB2B9"
                                        d="M40.7 29.3c-.4 1.1-.6 2.2-.6 3.4h47.7c0-1.2-.2-2.3-.6-3.4H40.7z" />
                                    <circle cx="64" cy="18.1" r="3.6" fill="#EC7B24" />
                                    <path fill="#E6E8EB" d="M79.7 80.4h13.6L79.7 94.1z" />
                                    <path fill="#CFD5DF"
                                        d="M79.7 94.1l13.6-13.7v13.7M52.3 51.4H41.5c-.4 0-.8-.3-.8-.8V39.9c0-.4.3-.8.8-.8h10.8c.4 0 .8.3.8.8v10.8c-.1.4-.4.7-.8.7zm-10-1.5h9.3v-9.3h-9.3v9.3zM52.3 68.6H41.5c-.4 0-.8-.3-.8-.8V57.1c0-.4.3-.8.8-.8h10.8c.4 0 .8.3.8.8v10.8c-.1.4-.4.7-.8.7zm-10-1.5h9.3v-9.3h-9.3v9.3zM67.9 42.7h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.4.8-.8.8zM80.6 42.7h-8.9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h8.9c.4 0 .8.3.8.8s-.4.8-.8.8zM87.8 42.7h-3.5c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h3.5c.4 0 .8.3.8.8s-.3.8-.8.8zM61.4 46h-4.5c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h4.5c.4 0 .8.3.8.8s-.4.8-.8.8zM73 46h-7.8c-.4 0-.8-.3-.8-.8s.3-.8.8-.8H73c.4 0 .8.3.8.8s-.4.8-.8.8zM87.8 46h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.3.8-.8.8zM67.9 49.3h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.4.8-.8.8zM77.7 49.3h-6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h6c.4 0 .8.3.8.8s-.3.8-.8.8zM87.8 49.3h-6.3c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h6.3c.4 0 .8.3.8.8s-.3.8-.8.8zM67.9 59.9h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.4.8-.8.8zM80.6 59.9h-8.9c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h8.9c.4 0 .8.3.8.8s-.4.8-.8.8zM87.8 59.9h-3.5c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h3.5c.4 0 .8.3.8.8s-.3.8-.8.8zM61.4 63.2h-4.5c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h4.5c.4 0 .8.3.8.8s-.4.8-.8.8zM73 63.2h-7.8c-.4 0-.8-.3-.8-.8s.3-.8.8-.8H73c.4 0 .8.3.8.8s-.4.8-.8.8zM87.8 63.2h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.3.8-.8.8z" />
                                    <g>
                                        <path fill="#CFD5DF"
                                            d="M67.9 66.5h-11c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h11c.4 0 .8.3.8.8s-.4.8-.8.8zM77.7 66.5h-6c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h6c.4 0 .8.3.8.8s-.3.8-.8.8zM87.8 66.5h-6.3c-.4 0-.8-.3-.8-.8s.3-.8.8-.8h6.3c.4 0 .8.3.8.8s-.3.8-.8.8z" />
                                    </g>
                                    <path fill="#F04D45"
                                        d="M57.8 36.2c-1.3.2-2.5.7-3.6 1.5-1.1.7-2.1 1.6-2.9 2.5-.9.9-1.7 1.9-2.4 3-.3.4-.5.8-.8 1.2-.1-.1-.2-.2-.2-.3-.3-.4-.7-.7-1.2-1-.2-.1-.5-.3-.7-.4-.3-.1-.5-.2-.9-.2-.8-.1-1.5.5-1.6 1.4-.1.8.5 1.5 1.4 1.6h.2c.1 0 .2.1.3.1.2.1.4.3.6.4.2.2.4.4.5.6.2.2.3.5.4.8 0 .5.3 1 .8 1.1.6.2 1.3-.1 1.6-.7l.1-.4c.1-.2.2-.5.3-.8l.4-.8c.3-.5.5-1.1.8-1.6.6-1 1.2-2.1 1.9-3 .7-1 1.5-1.9 2.4-2.6.9-.8 1.9-1.4 3-1.7.2-.1.3-.2.3-.4-.3-.2-.5-.3-.7-.3zm-8.6 10.2zM57.8 54.9c-1.3.2-2.5.7-3.6 1.5-1.1.7-2.1 1.6-2.9 2.5-.9.9-1.7 1.9-2.4 3-.3.4-.5.8-.8 1.2-.1-.1-.2-.2-.2-.3-.3-.4-.7-.7-1.2-1-.2-.1-.5-.3-.7-.4-.3-.1-.5-.2-.9-.2-.8-.1-1.5.5-1.6 1.4-.1.8.5 1.5 1.4 1.6h.2c.1 0 .2.1.3.1.2.1.4.3.6.4.2.2.4.4.5.6.2.2.3.5.4.8 0 .5.3 1 .8 1.1.6.2 1.3-.1 1.6-.7l.1-.4c.1-.2.2-.5.3-.8l.4-.8c.3-.5.5-1.1.8-1.6.6-1 1.2-2.1 1.9-3 .7-1 1.5-1.9 2.4-2.6.9-.8 1.9-1.4 3-1.7.2-.1.3-.2.3-.4-.3-.2-.5-.4-.7-.3zm-8.6 10.2z" />
                                </svg>
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">Layer 2 & Layer 3 Connectivity</h4>
                                <p class="mb-0">
                                    Whether you need basic connectivity or more advanced
                                    networking capabilities, we've got you covered with both
                                    Layer 2 and Layer 3 options.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us CLOSED -->

    <!-- Clients OPEN -->
    <div class="section testimonial-owl-landing">
        <div class="container">
            <div class="row">
                <div class="card bg-transparent mb-0">
                    <h2 class="text-center fw-semibold text-white">Our Clients</h2>
                    <span class="landing-title"></span>
                    <div class="demo-screen-skin code-quality" id="dependencies">
                        <div class="text-center p-0">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 px-0">
                                    <div class="feature-logos mt-5">
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/osit.png" alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/bdhub.png"
                                                alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/fiber.png"
                                                alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/onesky.png"
                                                alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/skytracker.png"
                                                alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/summit.png"
                                                alt="image">
                                        </div>
                                        <div class="slide">
                                            <img src="{{ asset('backendAssets') }}/static_images/osit.png" alt="image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Clients CLOSED -->

    <!-- Service OPEN -->
    <div class="bg-landing section bg-image-style">
        <div class="container">
            <div class="row">
                <h2 class="text-center fw-semibold day_night_titles">Our Services</h2>
                <span class="landing-title"></span>
                <div class="pricing-tabs">
                    <div class="tab-content">
                        <div class="tab-pane pb-0 active show" id="annualyear">
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2 text-center">
                                            <p class="fs-18 fw-semibold mb-1 pe-0">Corporate
                                                Internet</p>
                                        </div>
                                        <div class="card-body pt-2 text-center">
                                            <img src="https://onesky.com.bd/adminAssets/upload/169684737992.png"
                                                alt="">
                                            <p class="fs-13 mb-1 mt-5">In addition to broadband
                                                internet services, we help our clients build,
                                                connect, operate and maintain their own SOHO or
                                                office network.</p>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a class="btn btn-danger btn-block" href="https://skytrackerbd.com">Explore <i
                                                    class="text-white fa fa-paper-plane-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 border-primary pricing-card advanced reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 text-center">
                                                Home Internet</p>
                                        </div>
                                        <div class="card-body pt-2 text-center">
                                            <img src="https://onesky.com.bd/adminAssets/upload/1696847424640.png"
                                                alt="">
                                            <p class="fs-13 mb-1 mt-5">OneNet provides easy
                                                solutions for small office and house office user
                                                with high quality bandwidth and unlimited
                                                download Speed.</p>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a class="btn btn-danger btn-block" href="https://onesky.com.bd">Explore <i
                                                    class="text-white fa fa-paper-plane-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 pricing-card reveal revealrotate">
                                        <div class="card-header d-block text-center pt-2">
                                            <p class="fs-18 fw-semibold mb-1">Network Solutions
                                            </p>
                                        </div>
                                        <div class="card-body pt-2 text-center">
                                            <img src="https://onesky.com.bd/adminAssets/upload/1696847337953.png"
                                                alt="">
                                            <p class="fs-13 mb-1 mt-3">With our Office Network
                                                Solutions/ Services we can help you design,
                                                build and maintain your office network
                                                architecture as
                                                you need.</p>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a class="btn btn-danger btn-block" href="https://ositbd.com">Explore <i
                                                    class="text-white fa fa-paper-plane-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service CLOSED -->
@endsection
