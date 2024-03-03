@extends('backend.master')
@section('title')
Admin :: Job Candidate Detais
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-sm btn-success" href="{{ route('manage_job_apply') }}">Manage Candidates</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3> <strong>Candidate Name:</strong> {{ $job_apply_details->name }}</h3>
                <strong>Post Name: {{ $job_apply_details->applyFor->en_title ?? '' }}</strong> <br>
                <small>Applied on: {{ $job_apply_details->created_at->format('d F Y'); }}</small>
            </div>
            <div class="card-body">
                <p class="text-justify"> <strong>Cover Letter:</strong> <br> {{ $job_apply_details->cover_letter }}</p>
            </div>
            <div class="card-footer">
                <p> <strong>Candidate Phone:</strong> {{ $job_apply_details->phone }}</p>
                <p> <strong>Candidate Email:</strong> {{ $job_apply_details->email }}</p>
            </div>
        </div>
    </div>
</div>
@endsection