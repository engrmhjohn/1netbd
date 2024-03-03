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
                                                                    <p>132/A Arambagh, Motijheel
                                                                        (6th floor), Dhaka-1000,
                                                                        Bangladesh.
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
                                                                    <p class="mb-0">09611 344
                                                                        344</p>
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
                                                                    <p>info@1netbd.com</p>
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
                                                                    <p class="mb-0">Support:
                                                                        24/7 Hours</p>
                                                                    <p>Office Time: Saturday -
                                                                        Thursday (9AM - 6PM)</p>
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
                                            class="form-horizontal reveal revealrotate m-t-20">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" name="name" type="text"
                                                        placeholder="Name*" required>
                                                </div>
                                                @if ($errors->has('name'))
                                                    <strong class="error_text">{{ $errors->first('name') }}</strong>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" name="phone"
                                                        placeholder="Phone*" required>
                                                </div>
                                                @if ($errors->has('phone'))
                                                    <strong class="error_text">{{ $errors->first('phone') }}</strong>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Email*" required>
                                                </div>
                                                @if ($errors->has('email'))
                                                    <strong class="error_text">{{ $errors->first('email') }}</strong>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" name="subject"
                                                        placeholder="Subject*" required>
                                                </div>
                                                @if ($errors->has('subject'))
                                                    <strong class="error_text">{{ $errors->first('subject') }}</strong>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <textarea class="form-control" rows="5" name="query" required placeholder="Your Message*"></textarea>
                                                </div>
                                                @if ($errors->has('query'))
                                                    <strong class="error_text">{{ $errors->first('query') }}</strong>
                                                @endif
                                            </div>
                                            <div class="">
                                                <button type="submit" class="btn btn-dark"><i
                                                        class="fe fe-send me-2"></i>Send
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