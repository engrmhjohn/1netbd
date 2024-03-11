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
                        @foreach ($sliders as $slider)
                            @if ($slider->website_link)
                                <div class="slide">
                                    <a class="desktop_slide" href="{{ $slider->website_link }}">
                                        <img class="img-fluid" src="{{ asset($slider->desktop_image) }}"
                                            style="height: auto; width: 100%; padding: 0px;" alt="Slider Desktop Image">
                                    </a>
                                    <a class="mobile_slide" href="{{ $slider->website_link }}">
                                        <img class="img-fluid" src="{{ asset($slider->mobile_image) }}"
                                            style="height: auto; width: 100%; padding: 0px;" alt="Slider Mobile Image">
                                    </a>
                                    <div class="package_button">
                                        <a class="btn btn-danger fw-bold d-block" href="{{ $slider->website_link }}">
                                            {{ $slider->button_text }} <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @else
                                <div class="slide">
                                    <a class="desktop_slide" href="{{ route('campaign_details', $slider->id) }}">
                                        <img class="img-fluid" src="{{ asset($slider->desktop_image) }}"
                                            style="height: auto; width: 100%; padding: 0px;" alt="Slider Desktop Image">
                                    </a>
                                    <a class="mobile_slide" href="{{ route('campaign_details', $slider->id) }}">
                                        <img class="img-fluid" src="{{ asset($slider->mobile_image) }}"
                                            style="height: auto; width: 100%; padding: 0px;" alt="Slider Mobile Image">
                                    </a>
                                    <div class="package_button">
                                        <a class="btn btn-danger fw-bold d-block"
                                            href="{{ route('campaign_details', $slider->id) }}">
                                            {{ $slider->button_text }} <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Close -->
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
                                    <h1> <strong>{{ $package->en_amount_label }} {{ $package->en_amount }}</strong>
                                        <span>/month</span>
                                    </h1>
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
                                    <a class="btn btn-outline-success fw-bold"
                                        href="{{ route('buy_package', $package->id) }}">
                                        {{ $package->en_button_text }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-end">
                    <a class="btn btn-danger" href="{{ route('front.packages') }}"> <strong>More Pacakges</strong> <i
                            class="fa fa-arrow-right ms-3"></i></a>
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
                @foreach ($counters as $counter)
                    <div class="col-xl-3 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-body bg-primary-transparent">
                                <div class="counter-status">
                                    <div class="counter-icon bg-primary-transparent box-shadow-primary">
                                        <img src="{{ asset($counter->icon) }}" alt="Counter Icon">
                                    </div>
                                    <div class="test-body text-center">
                                        <h1 class="mb-0">
                                            <span class="counter fw-semibold counter ">{{ $counter->en_number }}</span>+
                                        </h1>
                                        <div class="counter-text">
                                            <h5 class="font-weight-normal mb-0 ">{{ $counter->en_name }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    @foreach ($choose_uses as $choose_us)
                    <div class="col-lg-6 col-md-12">
                        <div class="card features main-features main-features-1 wow fadeInUp reveal revealleft"
                            data-wow-delay="0.1s">
                            <div class="bg-img mb-2 text-left">
                                <img src="{{ asset($choose_us->icon) }}" alt="Choose Us Icon">
                            </div>
                            <div class="text-left">
                                <h4 class="fw-bold">{{ $choose_us->en_title }}</h4>
                                <p class="mb-0">{{ $choose_us->en_description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                                        @foreach ($clients as $client)
                                        <div class="slide">
                                            <img src="{{ asset($client->image) }}"
                                                alt="Client Image">
                                        </div>
                                        @endforeach
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
                                @foreach ($services as $service)
                                <div class="col-lg-4 col-xl-4 col-md-8 col-sm-12">
                                    <div class="card p-3 border-primary pricing-card advanced reveal revealrotate">
                                        <div class="card-header d-block text-justified pt-2">
                                            <p class="fs-18 fw-semibold mb-1 text-center"> {{ $service->en_title }} </p>
                                        </div>
                                        <div class="card-body pt-2 text-center">
                                            <img src="{{ asset($service->image) }}" alt="Service Icon">
                                            <p class="fs-13 mb-1 mt-5">{{ $service->en_description }}</p>
                                        </div>
                                        <div class="card-footer text-center border-top-0 pt-1">
                                            <a class="btn btn-danger btn-block" href="https://onesky.com.bd">{{ $service->en_button_text }} <i
                                                    class="text-white fa fa-paper-plane-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service CLOSED -->
@endsection
