@extends('backend.master')
@section('title')
CMS :: Home Slider
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong>Home</strong> Slider</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_slider') }}" class="btn btn-sm btn-success" title="Add New">
                    Manage Home Slider
                </a>
                <form action="{{ route('admin.save_slider') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Desktop Slider Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="desktop_image" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Mobile Slider Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="mobile_image" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description">{{ 'EN Conditions / Descriptions' }}</label>
                                <textarea rows="4" class="form-control summernote" name="en_description" id="en_description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">{{ 'Slider Position' }}</label>
                                <input class="form-control" name="position" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <div class="form-group">
                                <label for="website_link">{{ 'Website Link' }}</label>
                                <input class="form-control" name="website_link" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <div class="form-group">
                                <label for="offer_last_date">{{ 'Offer Last Date (for offer slider only)' }}</label>
                                <input class="form-control" name="offer_last_date" type="date">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="website_link">{{ 'Button Text' }}</label>
                                <input class="form-control" name="button_text" type="text">
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
                                    <input type="radio" name="status" id="publish" class="with-gap" checked value="1" required>
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" value="0" required>
                                    <label for="unpublish">Unpublish</label>
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