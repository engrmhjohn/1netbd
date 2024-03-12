@extends('backend.master')
@section('title')
CMS :: Payment Method
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong>Payment Method</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_payment') }}" class="btn btn-sm btn-success" title="Add New">
                    Manage Payment Method
                </a>
                <form action="{{ route('admin.save_payment') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label>Payment Category</label>
                                <select name="payment_category_id" id="category-dropdown" class="form-control select2-show-search form-select"
                                    data-placeholder="Select Category" required>
                                    <option label="Choose one"></option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->en_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_banner_text">Banner Text</label>
                                <input class="form-control" name="en_banner_text" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_one">Heading 01</label>
                                <input class="form-control" name="en_heading_one" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 01</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_one" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_one" class="form-label">Description 01</label>
                                    <textarea class="form-control no-resize" name="en_description_one" id="en_description_one" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_two">Heading 02</label>
                                <input class="form-control" name="en_heading_two" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 02</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_two" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_two" class="form-label">Description 02</label>
                                    <textarea class="form-control no-resize" name="en_description_two" id="en_description_two" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_three">Heading 03</label>
                                <input class="form-control" name="en_heading_three" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 03</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_three" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_three" class="form-label">Description 03</label>
                                    <textarea class="form-control no-resize" name="en_description_three" id="en_description_three" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_four">Heading 04</label>
                                <input class="form-control" name="en_heading_four" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 04</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_four" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_four" class="form-label">Description 04</label>
                                    <textarea class="form-control no-resize" name="en_description_four" id="en_description_four" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_five">Heading 05</label>
                                <input class="form-control" name="en_heading_five" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 05</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_five" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_five" class="form-label">Description 05</label>
                                    <textarea class="form-control no-resize" name="en_description_five" id="en_description_five" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_six">Heading 06</label>
                                <input class="form-control" name="en_heading_six" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 06</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_six" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_six" class="form-label">Description 06</label>
                                    <textarea class="form-control no-resize" name="en_description_six" id="en_description_six" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_seven">Heading 07</label>
                                <input class="form-control" name="en_heading_seven" type="text" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 07</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_seven" class="dropify" accept=".jpg, .png, image/jpeg, image/png" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_seven" class="form-label">Description 07</label>
                                    <textarea class="form-control no-resize" name="en_description_seven" id="en_description_seven" cols="30" rows="2" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_eight">Heading 08</label>
                                <input class="form-control" name="en_heading_eight" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image 08</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_eight" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_eight" class="form-label">Description 08</label>
                                    <textarea class="form-control no-resize" name="en_description_eight" id="en_description_eight" cols="30" rows="2" style="resize: none;"></textarea>
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