@extends('frontend.master')
@section('title')
One Net || Clients Review
@endsection
@section('content')
<div class="section bg-landing pb-0 bg-image-style about_page">
    <div class="container">
        <div class="row">
            <h4 class="text-center fw-semibold day_night_titles">Client's Review</h4>
            <span class="landing-title"></span>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body text-dark">
                        <div class="statistics-info2">
                            <div class="row align-items-center justify-content-center">
                                @if($clients_review->count() == 0)
                                <div class="col-md-4 reveal revealleft">
                                    <div class="alert alert-info text-center" role="alert">
                                        No Client Review Available
                                    </div>
                                </div>
                                @else
                                @foreach ($clients_review as $review)
                                <div class="col-xl-6 col-lg-6 ps-0">
                                    <div class="text-center reveal revealleft mb-3">
                                        <img class="img-fluid" src="{{ asset($review->image) }}" alt="Client's Review Image" class="br-5">
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
