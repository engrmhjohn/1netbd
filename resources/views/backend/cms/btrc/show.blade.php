@extends('backend.master')
@section('title')
    CMS :: BTRC Approved Package
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add BTRC Approved Package</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.manage_btrc_approved_packages') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-mail-reply"></i> Back to Manage BTRC Approved Package
                    </a>
                    <form action="{{ route('admin.save_btrc_approved_packages') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label>Image / Document (if any)</label>
                                <input type="file" class="dropify" name="document" accept=".jpg, .png, image/jpeg, image/png, .pdf">
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
