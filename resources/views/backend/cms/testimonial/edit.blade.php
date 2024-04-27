@extends('backend.master')
@section('title')
CMS :: Edit Testimonial Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> Testimonial</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_testimonial') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Testimonial Info
                </a>
                <form action="{{ route('admin.update_testimonial') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="testimonial_id" value="{{$testimonial->id}}">
                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <div class="form-group">
                                <label for="en_name">Name</label>
                                <input class="form-control" name="en_name" type="text" required value="{{ isset($testimonial->en_name) ? $testimonial->en_name : '' }}"> 
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <div class="form-group">
                                <label for="en_designation">Designation</label>
                                <input class="form-control" name="en_designation" type="text" required value="{{ isset($testimonial->en_designation) ? $testimonial->en_designation : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description" class="form-label">Description</label>
                                    <textarea class="form-control no-resize" name="en_description" id="en_description" cols="30" rows="2" required style="resize: none;">{{ isset($testimonial->en_description) ? $testimonial->en_description : '' }}</textarea>
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($testimonial->status) && $testimonial->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($testimonial->status) && $testimonial->status == 0 ? 'checked' : '' }} value="0">
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