@extends('frontend.master')
@section('title')
    Terms & Conditions :: Net
@endsection
@section('content')
    <!-- Terms Condition start -->


    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-8 mb-3">
                <div class="main_title">
                    <h1 class="title">{{ $tc->en_title }}</h1>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-3 mb-3">
                {!! $tc->{app()->getLocale() . '_payment_mode'} !!} <br>
                {!! $tc->{app()->getLocale() . '_documentation'} !!} <br>
                {!! $tc->{app()->getLocale() . '_after_sales_service'} !!} <br>
                {!! $tc->{app()->getLocale() . '_client_responsibility'} !!} <br>
                {!! $tc->{app()->getLocale() . '_others'} !!} <br>
                {!! $tc->{app()->getLocale() . '_contact_termination'} !!} <br>
            </div>
        </div>
    </div>

    <!-- Terms Condition end -->
@endsection
