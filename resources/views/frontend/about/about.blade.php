@extends('frontend.master')
@section('title')
    One Net || About Us
@endsection
@section('content')
<div class="section bg-landing pb-0 bg-image-style about_page">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold day_night_titles">{{ $mission->en_title }}</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-dark">
                        <div class="statistics-info2">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        <img class="img-fluid" src="{{ asset($mission->image) }}"
                                            alt="Mission Image" class="br-5">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">

                                    <div class="reveal revealright">
                                        <div class="mission_description">
                                            <p>{{ $mission->en_description }}</p>
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
</div>
<div class="section bg-landing pb-0 bg-image-style about_page">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold day_night_titles">{{ $vision->en_title }}</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-dark">
                        <div class="statistics-info2">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        <img class="img-fluid" src="{{ asset($vision->image) }}"
                                            alt="Vision Image" class="br-5">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">

                                    <div class="reveal revealright">
                                        <div class="vision_description">
                                            <p>{{ $vision->en_description }}</p>
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
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold">FAQ'S ?</h4>
            <span class="landing-title"></span>
            <section class="sptb demo-screen-demo" id="faqs1">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="col-md-12 grid-item  px-0">
                            <div
                                class="card card-collapsed bg-primary-transparent p-0 reveal">
                                <div class="card-header grid-link"
                                    data-bs-toggle="card-collapse">
                                    <a href="#"
                                        class="card-options-collapse h5 fw-bold card-title mb-0"><span
                                            class="me-3 fs-18 fw-bold text-primary">01.</span>{{ $faq->en_question_one }}</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        {{ $faq->en_answer_one }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-item  px-0">
                            <div
                                class="card card-collapsed bg-success-transparent p-0 reveal">
                                <div class="card-header grid-link"
                                    data-bs-toggle="card-collapse">
                                    <a href="#"
                                        class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                            class="me-3 fs-18 fw-bold text-success">02.</span>{{ $faq->en_question_two }}</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        {{ $faq->en_answer_two }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-item  px-0">
                            <div
                                class="card card-collapsed bg-secondary-transparent p-0 reveal">
                                <div class="card-header grid-link"
                                    data-bs-toggle="card-collapse">
                                    <a href="#"
                                        class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                            class="me-3 fs-18 fw-bold text-secondary">03.</span>{{ $faq->en_question_three }}</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        {{ $faq->en_answer_three }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-item  px-0">
                            <div
                                class="card card-collapsed bg-warning-transparent p-0 reveal">
                                <div class="card-header grid-link"
                                    data-bs-toggle="card-collapse">
                                    <a href="#"
                                        class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                            class="me-3 fs-18 fw-bold text-warning">04.</span>{{ $faq->en_question_four }}</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        {{ $faq->en_answer_four }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid-item  px-0">
                            <div
                                class="card card-collapsed bg-danger-transparent p-0 reveal">
                                <div class="card-header grid-link"
                                    data-bs-toggle="card-collapse">
                                    <a href="#"
                                        class="card-options-collapse  h5 fw-bold card-title mb-0"><span
                                            class="me-3 fs-18 fw-bold text-danger">05.</span>{{ $faq->en_question_five }}</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        {{ $faq->en_answer_five }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 reveal revealright">
                        <img class="img-fluid" src="{{ asset($faq->image) }}" alt="FAQ Image">
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="testimonial-owl-landing section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-transparent">
                    <div class="card-body pt-5">
                        <h4 class="text-center fw-semibold text-white-80">Testimonials </h4>
                        <span class="landing-title"></span>
                        <div class="testimonial-carousel2">
                            @foreach ($testimonials as $testimonial)
                            <div class="slide text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <p class="text-white-80">
                                                <i class="fa fa-quote-left fs-20 text-white-80"></i>
                                                {{ $testimonial->en_description }}
                                            </p>
                                            <h3 class="title">{{ $testimonial->en_name }}</h3>
                                            <span class="post">{{ $testimonial->en_designation }}</span>
                                            <div class="rating-stars block my-rating-5 mb-5"
                                                data-rating="4"></div>
                                        </div>
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
@endsection