@extends('frontend.master')
@section('title')
    One Net || About Us
@endsection
@section('content')
<div class="section bg-landing pb-0 bg-image-style about_page">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold day_night_titles">Our Mission</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-dark">
                        <div class="statistics-info2">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        <img class="img-fluid" src="{{ asset('backendAssets/static_images/mission.png') }}"
                                            alt="" class="br-5">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">

                                    <div class="reveal revealright">
                                        <div class="mission_description">
                                            <p>OneNet mission is to champion for the advancement of internet connectivity and data communication as a leading Internet Service Provider in Bangladesh by offering high-quality information and communication technology services affordable to all Bangladeshi.

                                                OneNet believe in looking towards the future with great visions and endless inventions in developing technologies and services to suit our customers needs both today and in the future to live up to the Company's motto - "Most Reliable, Secure and Affordable: Amazing Experience".</p>
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
            <h4 class="text-center fw-semibold day_night_titles">Our Vison</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-dark">
                        <div class="statistics-info2">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        <img class="img-fluid" src="{{ asset('backendAssets/static_images/vision.png') }}"
                                            alt="" class="br-5">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">

                                    <div class="reveal revealright">
                                        <div class="vision_description">
                                            <p>To become the preferred choice for the delivery of innovative and integrative ICT solutions in Bangladesh.OneNet strongly believes that Information and Communication Technology (ICT) is crucial in today’s operating environment. Innovation is an improvedtant enabler of new business opportunities and improved customer relationships.</p>
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
            <h2 class="text-center fw-semibold">We are here to help you</h2>
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
                                            class="me-3 fs-18 fw-bold text-primary">01.</span>What documents do I need to provide to connect to your internet service?</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        You need to provide a copy of your National ID (NID) and a passport-sized photo for the connection process.
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
                                            class="me-3 fs-18 fw-bold text-success">02.</span>How can I check my internet speed?</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        You can check your internet speed by visiting the website fast.com.
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
                                            class="me-3 fs-18 fw-bold text-secondary">03.</span>What payment options do you offer for paying the bill?</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        We offer multiple payment options including BKash, Nagad, Rocket, and various debit/credit card payments.
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
                                            class="me-3 fs-18 fw-bold text-warning">04.</span>What is the procedure for closing my internet connection?</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        To close your internet connection, please inform us before the closing month. You can initiate the cancellation process by contacting our Customer Support at 09611344344.
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
                                            class="me-3 fs-18 fw-bold text-danger">05.</span>How can I upgrade my internet plan if I need more speed or data?</a>
                                </div>
                                <div class="card-body pt-0">
                                    <p>
                                        You can contact our helpline for plan upgrades. Upgradation is free of charge, but degradation may incur additional charges.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 reveal revealright">
                        <img class="img-fluid" src="{{ asset('backendAssets/static_images/faq.png') }}"
                            alt="FAQ Image">
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
                            <div class="slide text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <p class="text-white-80">
                                                <i
                                                    class="fa fa-quote-left fs-20 text-white-80"></i>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quod eos id
                                                officiis hic tenetur quae quaerat
                                                ad velit ab. Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit.
                                                Dolore cum accusamus eveniet molestias
                                                voluptatum inventore laboriosam
                                                labore sit, aspernatur praesentium iste
                                                impedit quidem dolor veniam.
                                            </p>
                                            <h3 class="title">Elizabeth</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-stars block my-rating-5 mb-5"
                                                data-rating="4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <p class="text-white-80"><i
                                                    class="fa fa-quote-left fs-20"></i> Nemo
                                                enim ipsam
                                                voluptatem quia voluptas sit aspernatur aut
                                                odit aut fugit, sed quia
                                                consequuntur magni dolores eos qui ratione
                                                voluptatem sequi nesciunt. Neque
                                                porro quisquam est, qui dolorem ipsum quia
                                                dolor sit amet, consectetur,
                                                adipisci velit, sed quia non numquam eius
                                                modi tempora incidunt ut labore.
                                            </p>
                                            <div class="testimonia-data">
                                                <h3 class="title">williamson</h3>
                                                <span class="post">Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide text-center">
                                <div class="row">
                                    <div class="col-xl-8 col-md-12 d-block mx-auto">
                                        <div class="testimonia">
                                            <p class="text-white-80"><i
                                                    class="fa fa-quote-left fs-20"></i> Duis
                                                aute irure dolor
                                                in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla
                                                pariatur. Excepteur sint occaecat cupidatat
                                                non proident, sunt in culpa qui
                                                officia deserunt mollit anim id est laborum.
                                                Sed ut perspiciatis unde omnis
                                                iste natus error sit voluptatem accusantium
                                                doloremque laudantium.</p>
                                            <div class="testimonia-data">
                                                <h3 class="title">Sophie Carr</h3>
                                                <span class="post">Web Developer</span>
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
</div>
@endsection