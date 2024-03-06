@extends('backend.master')
@section('title')
    CMS :: Company Information
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Company Information</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.manage_company_info') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-mail-reply"></i> Back to Manage Company Information
                    </a>
                    <form action="{{ route('admin.save_company_info') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_name" class="form-label">EN Company Name</label>
                                    <input type="text" class="form-control" name="en_name" id="en_name"
                                        placeholder="EN Company Name" autocomplete="en_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_hotline" class="form-label">EN Hotline Number</label>
                                    <input type="text" class="form-control" name="en_hotline" id="en_hotline"
                                        placeholder="EN Hotline Number" autocomplete="en_hotline" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_sales_number" class="form-label">EN Sales Number</label>
                                    <input type="text" class="form-control" name="en_sales_number" id="en_sales_number"
                                        placeholder="EN Sales Number" autocomplete="en_sales_number" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" autocomplete="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="fb_link" class="form-label">Facebook Link</label>
                                        <textarea class="form-control no-resize" name="fb_link" id="fb_link" cols="30" rows="2" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="youtube_link" class="form-label">Youtube Link</label>
                                        <textarea class="form-control no-resize" name="youtube_link" id="youtube_link" cols="30" rows="2" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="linkedin_link" class="form-label">Linkedin Link</label>
                                        <textarea class="form-control no-resize" name="linkedin_link" id="linkedin_link" cols="30" rows="2" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="map_link" class="form-label">Google Map Link</label>
                                        <textarea class="form-control no-resize" name="map_link" id="map_link" cols="30" rows="2" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="en_address" class="form-label">Office Address</label>
                                        <textarea class="form-control no-resize" name="en_address" id="en_address" cols="30" rows="2" required style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Working Hours</h3>
                                    </div>
                                    <div class="card-body">
                                        <textarea name="en_working_hours" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>Color Logo</label>
                                <input type="file" class="dropify" name="color_logo" accept=".jpg, .png, image/jpeg, image/png">
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>White Logo</label>
                                <input type="file" class="dropify" name="white_logo" accept=".jpg, .png, image/jpeg, image/png">
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
