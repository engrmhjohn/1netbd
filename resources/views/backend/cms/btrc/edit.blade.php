@extends('backend.master')
@section('title')
    CMS :: BTRC Approved Package
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit BTRC Approved Package</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.manage_btrc_approved_packages') }}" class="btn btn-sm btn-success" title="Add New">
                        <i class="fa fa-mail-reply"></i> Back to Manage BTRC Approved Package
                    </a>
                    <form action="{{ route('admin.update_btrc_approved_packages') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="btrc_id" value="{{ $btrc->id }}">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label>Preview Document</label>
                                @if ($btrc->document)
                                    @if (pathinfo($btrc->document, PATHINFO_EXTENSION) == 'pdf')
                                        <iframe src="{{ asset($btrc->document) }}"></iframe>
                                    @else
                                        <img class="img-fluid" src="{{ asset($btrc->document) }}" alt="">
                                    @endif
                                @else
                                    <p>No Document Found!</p>
                                @endif
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>Choose New Image / Document</label>
                                <input type="file" class="dropify" name="document"
                                    accept=".jpg, .png, image/jpeg, image/png, .pdf">
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
