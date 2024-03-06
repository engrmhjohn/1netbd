@extends('frontend.master')
@section('title')
    One Net || Contact Us
@endsection
@section('content')
    <!-- Contact OPEN -->
    <div class="pb-0" id="contact">
        <div class="container">
            <div class="">
                <div class="card card-shadow">
                    <h2 class="text-center fw-semibold mt-7">Get in Touch with US</h2>
                    <span class="landing-title"></span>
                    <div class="card-body p-5 pb-6 text-dark">
                        <div class="statistics-info p-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="mt-3">
                                        <div class="text-dark">
                                            <div class="services-statistics reveal my-5">
                                                <div class="row text-center">
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status">
                                                                    <div
                                                                        class="counter-icon bg-primary-transparent box-shadow-primary">
                                                                        <i class="fe fe-map-pin text-primary fs-23"></i>
                                                                    </div>
                                                                    <h4 class="mb-2 fw-semibold">
                                                                        Office Address</h4>
                                                                    <p>
                                                                        {{ $company_info->en_address }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status">
                                                                    <div
                                                                        class="counter-icon bg-secondary-transparent box-shadow-secondary">
                                                                        <i
                                                                            class="fe fe-headphones text-secondary fs-23"></i>
                                                                    </div>
                                                                    <h4 class="mb-2 fw-semibold">
                                                                        Hotline</h4>
                                                                    <p class="mb-0">{{ $company_info->en_hotline }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-statuss">
                                                                    <div
                                                                        class="counter-icon bg-success-transparent box-shadow-success">
                                                                        <i class="fe fe-mail text-success fs-23"></i>
                                                                    </div>
                                                                    <h4 class="mb-2 fw-semibold">
                                                                        Email</h4>
                                                                    <p>{{ $company_info->email }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-md-6 col-lg-6">
                                                        <div class="card">
                                                            <div class="card-body p-0">
                                                                <div class="counter-status">
                                                                    <div
                                                                        class="counter-icon bg-danger-transparent box-shadow-danger">
                                                                        <i class="fe fe-airplay text-danger fs-23"></i>
                                                                    </div>
                                                                    <h4 class="mb-2 fw-semibold">
                                                                        Working Hours</h4>
                                                                    <p class="mb-0">{!! $company_info->en_working_hours !!}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="">
                                        <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm"
                                            class="form-horizontal reveal revealrotate m-t-20 contact_form">
                                            {{ csrf_field() }}
                                            <div class="wrap-input100 input-group">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-account text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text"
                                                    placeholder="Name*" name="name" required>
                                            </div>
                                            @if ($errors->has('name'))
                                                <strong class="error_text">{{ $errors->first('name') }}</strong>
                                            @endif
                                            <div class="wrap-input100 input-group">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-phone text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text"
                                                    placeholder="Phone*" name="phone" required>
                                            </div>
                                            @if ($errors->has('phone'))
                                                <strong class="error_text">{{ $errors->first('phone') }}</strong>
                                            @endif
                                            <div class="wrap-input100 input-group">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email"
                                                    placeholder="Email*" name="email" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <strong class="error_text">{{ $errors->first('email') }}</strong>
                                            @endif
                                            <div class="wrap-input100 input-group">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-book text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text"
                                                    placeholder="Subject*" name="subject" required>
                                            </div>
                                            @if ($errors->has('subject'))
                                                <strong class="error_text">{{ $errors->first('subject') }}</strong>
                                            @endif
                                            <div class="wrap-input100 input-group">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-edit text-muted" aria-hidden="true"></i>
                                                </a>
                                                <textarea class="input100 border-start-0 form-control ms-0" rows="5" name="query" required
                                                    placeholder="Your Message*"></textarea>
                                            </div>
                                            @if ($errors->has('query'))
                                                <strong class="error_text">{{ $errors->first('query') }}</strong>
                                            @endif
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-dark"><i class="fe fe-send me-2"></i>Send
                                            Query</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact CLOSED -->
@endsection
