@extends('frontend.master')
@section('title')
    One Net || Our Packages
@endsection
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if (pathinfo($btrc->document, PATHINFO_EXTENSION) == 'pdf')
            <div class="pdf_preview">
                <iframe src="{{ asset($btrc->document)}}"></iframe>
            </div>
            @else
            <img class="img-fluid" src="{{ $btrc->document }}" alt="BTRC Approved Package">
            @endif
        </div>
    </div>
</div>
@endsection