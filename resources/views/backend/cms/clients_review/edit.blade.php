@extends('backend.master')
@section('title')
CMS :: Edit Client Review Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Client<strong> Review</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_clients_review') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Client Review
                </a>
                <form action="{{ route('admin.update_clients_review') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="clients_review_id" value="{{$clients_review->id}}">

                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Client Review Pic</h2>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset($clients_review->image) }}" alt="client Review Pic">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose New Client Review Pic</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection