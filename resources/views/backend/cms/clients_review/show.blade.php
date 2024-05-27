@extends('backend.master')
@section('title')
CMS :: Client Review
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Client<strong> Review</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_clients_review') }}" class="btn btn-sm btn-success" title="Add New">
                    Manage Client Review
                </a>
                <form action="{{ route('admin.save_clients_review') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection