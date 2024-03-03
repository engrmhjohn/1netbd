@extends('backend.master')
@section('title')
Admin :: Contact Query Details
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.manage_contact_message') }}" class="btn btn-sm btn-success" title="Add New">
                    <i class="fa fa-mail-reply"></i> Back to Manage Contact Queries
                </a>
            </div>
            <div class="card-body">

                {{ $contact_details->query }}
            </div>
            <div class="card-footer">
                <h3>Name: {{ $contact_details->name }}</h3>
                <p>Email: {{ $contact_details->email }}</p>
                <p>Phone: {{ $contact_details->phone }}</p>
                <p>Subject: {{ $contact_details->subject }}</p>
                <small>Contact Date: {{ $contact_details->created_at->format('d F Y') }}</small>
            </div>
        </div>
    </div>
</div>
@endsection