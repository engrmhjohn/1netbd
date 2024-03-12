@extends('backend.master')
@section('title')
CMS :: Edit Payment Method
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong>Payment Method</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_payment') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Payment Method
                </a>
                <form action="{{ route('admin.update_payment') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="payment_id" value="{{$payment->id}}">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label>Payment Category</label>
                                <select name="payment_category_id" class="form-control form-select select2"
                                    data-bs-placeholder="Select Category" required>
                                    <option value="" disabled selected></option>
                                    @foreach ($category as $item)
                                        <option value=" {{ $item->id }}" {{ isset($payment->payment_category_id) ? ($payment->payment_category_id == $item->id ? 'selected' : '') : '' }}>{{ $item->en_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_banner_text">Banner Text</label>
                                <input class="form-control" name="en_banner_text" type="text" required value="{{ isset($payment->en_banner_text) ? $payment->en_banner_text : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_one">Heading 01</label>
                                <input class="form-control" name="en_heading_one" type="text" required value="{{ isset($payment->en_heading_one) ? $payment->en_heading_one : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 01</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_one) }}" alt="Image 01">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 01</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_one" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_one" class="form-label">Description 01</label>
                                    <textarea class="form-control no-resize" name="en_description_one" id="en_description_one" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_one) ? $payment->en_description_one : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_two">Heading 02</label>
                                <input class="form-control" name="en_heading_two" type="text" required value="{{ isset($payment->en_heading_two) ? $payment->en_heading_two : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 02</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_two) }}" alt="Image 02">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 02</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_two" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_two" class="form-label">Description 02</label>
                                    <textarea class="form-control no-resize" name="en_description_two" id="en_description_two" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_two) ? $payment->en_description_two : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_three">Heading 03</label>
                                <input class="form-control" name="en_heading_three" type="text" required value="{{ isset($payment->en_heading_three) ? $payment->en_heading_three : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 03</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_three) }}" alt="Image 03">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 03</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_three" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_three" class="form-label">Description 03</label>
                                    <textarea class="form-control no-resize" name="en_description_three" id="en_description_three" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_three) ? $payment->en_description_three : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_four">Heading 04</label>
                                <input class="form-control" name="en_heading_four" type="text" required value="{{ isset($payment->en_heading_four) ? $payment->en_heading_four : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 04</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_four) }}" alt="Image 04">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 04</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_four" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_four" class="form-label">Description 04</label>
                                    <textarea class="form-control no-resize" name="en_description_four" id="en_description_four" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_four) ? $payment->en_description_four : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_five">Heading 05</label>
                                <input class="form-control" name="en_heading_five" type="text" required value="{{ isset($payment->en_heading_five) ? $payment->en_heading_five : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 05</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_five) }}" alt="Image 05">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 05</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_five" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_five" class="form-label">Description 05</label>
                                    <textarea class="form-control no-resize" name="en_description_five" id="en_description_five" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_five) ? $payment->en_description_five : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_six">Heading 06</label>
                                <input class="form-control" name="en_heading_six" type="text" required value="{{ isset($payment->en_heading_six) ? $payment->en_heading_six : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 06</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_six) }}" alt="Image 06">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 06</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_six" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_six" class="form-label">Description 06</label>
                                    <textarea class="form-control no-resize" name="en_description_six" id="en_description_six" cols="30" rows="2" required style="resize: none;">{{ isset($payment->en_description_six) ? $payment->en_description_six : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_seven">Heading 07</label>
                                <input class="form-control" name="en_heading_seven" type="text" value="{{ isset($payment->en_heading_seven) ? $payment->en_heading_seven : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 07</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_seven) }}" alt="Image 07">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 07</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image_seven" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description_seven" class="form-label">Description 07</label>
                                    <textarea class="form-control no-resize" name="en_description_seven" id="en_description_seven" cols="30" rows="2" style="resize: none;">{{ isset($payment->en_description_seven) ? $payment->en_description_seven : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_heading_eight">Heading 08</label>
                                <input class="form-control" name="en_heading_eight" type="text" value="{{ isset($payment->en_heading_eight) ? $payment->en_heading_eight : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Image 08</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($payment->image_eight) }}" alt="Image 08">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Image 08</h2>
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
                                    <textarea class="form-control no-resize" name="en_description_eight" id="en_description_eight" cols="30" rows="2" style="resize: none;">{{ isset($payment->en_description_eight) ? $payment->en_description_eight : '' }}</textarea>
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($payment->status) && $payment->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($payment->status) && $payment->status == 0 ? 'checked' : '' }} value="0">
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