@extends('backend.master')
@section('title')
CMS :: Edit Service Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> Service</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_service') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Service Info
                </a>
                <form action="{{ route('admin.update_service') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_id" value="{{$service->id}}">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="form-group">
                                <label for="en_title">Title</label>
                                <input class="form-control" name="en_title" type="text" required value="{{ isset($service->en_title) ? $service->en_title : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input class="form-control" name="position" type="text" value="{{ isset($service->position) ? $service->position : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="form-group">
                                <label for="en_button_text">Button Text</label>
                                <input class="form-control" name="en_button_text" type="text" required value="{{ isset($service->en_button_text) ? $service->en_button_text : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="form-group">
                                <label for="button_link">Button Link</label>
                                <input class="form-control" name="button_link" type="text" value="{{ isset($service->button_link) ? $service->button_link : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description" class="form-label">Description</label>
                                    <textarea class="form-control no-resize" name="en_description" id="en_description" cols="30" rows="2" required style="resize: none;">{{ isset($service->en_description) ? $service->en_description : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Service Icon</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($service->image) }}" alt="Service Icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Service Icon</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            Status
                        </div>
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($service->status) && $service->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($service->status) && $service->status == 0 ? 'checked' : '' }} value="0">
                                    <label for="unpublish">Unpublish</label>
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