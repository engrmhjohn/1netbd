@extends('frontend.master')
@section('title')
    One Net || Our Packages
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                        <h1>{{ $package->en_amount_label }} {{ $package->en_amount }} <span>/month</span></h1>
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
</div>
@endsection