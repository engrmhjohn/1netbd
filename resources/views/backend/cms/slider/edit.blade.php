@extends('backend.master')
@section('title')
CMS :: Edit Slider Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Home<strong> Slider</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_slider') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Slider Info
                </a>
                <form action="{{ route('admin.update_slider') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="slider_id" value="{{$slider->id}}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description">{{ 'EN Conditions / Descriptions' }}</label>
                                <textarea rows="4" class="form-control summernote" name="en_description" id="en_description">{{ isset($slider->en_description) ? $slider->en_description : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">{{ 'Slider Position' }}</label>
                                <input class="form-control" name="position" type="text" value="{{ isset($slider->position) ? $slider->position : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <div class="form-group">
                                <label for="website_link">{{ 'Website Link' }}</label>
                                <input class="form-control" name="website_link" type="text" value="{{ isset($slider->website_link) ? $slider->website_link : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="form-group">
                                <label for="offer_last_date">{{ 'Offer Last Date' }}</label>
                                <input class="form-control" name="offer_last_date" type="date" value="{{ isset($slider->offer_last_date) ? $slider->offer_last_date : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="website_link">{{ 'Button Text' }}</label>
                                <input class="form-control" name="button_text" type="text" value="{{ isset($slider->button_text) ? $slider->button_text : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Desktop Slider Image</h2>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset($slider->desktop_image) }}" alt="Desktop Slider Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Desktop Slider Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="desktop_image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Preview Mobile Slider Image</h2>
                                </div>
                                <div class="body">
                                    <img src="{{ asset($slider->mobile_image) }}" alt="Mobile Slider Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Choose Mobile Slider Image</h2>
                                </div>
                                <div class="body">
                                    <input type="file" name="mobile_image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($slider->status) && $slider->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($slider->status) && $slider->status == 0 ? 'checked' : '' }} value="0">
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