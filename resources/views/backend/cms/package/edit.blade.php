@extends('backend.master')
@section('title')
CMS :: Manage Package 
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('admin.manage_package') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Package
                </a>
                <form action="{{ route('admin.update_package') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="package_id" value="{{$package->id}}">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_package_name" class="form-label">EN Package Name</label>
                                <input type="text" class="form-control" name="en_package_name" id="en_package_name" required value="{{ isset($package->en_package_name) ? $package->en_package_name : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_mbps_value" class="form-label">EN MBPS Value</label>
                                <input type="text" class="form-control" name="en_mbps_value" id="en_mbps_value" required value="{{ isset($package->en_mbps_value) ? $package->en_mbps_value : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_amount_label" class="form-label">EN Amount Label</label>
                                <input type="text" class="form-control" name="en_amount_label" id="en_amount_label" required value="{{ isset($package->en_amount_label) ? $package->en_amount_label : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_amount" class="form-label">EN Bill Amount</label>
                                <input type="text" class="form-control" name="en_amount" id="en_amount" required value="{{ isset($package->en_amount) ? $package->en_amount : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_discount_monthly_fee" class="form-label">EN Monthly Bill Discount</label>
                                <input type="text" class="form-control" name="en_discount_monthly_fee"
                                    id="en_discount_monthly_fee" value="{{ isset($package->en_discount_monthly_fee) ? $package->en_discount_monthly_fee : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_otc_amount" class="form-label">EN OTC</label>
                                <input type="text" class="form-control" name="en_otc_amount" id="en_otc_amount" required value="{{ isset($package->en_otc_amount) ? $package->en_otc_amount : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_discount_otc" class="form-label">EN OTC Discount</label>
                                <input type="text" class="form-control" name="en_discount_otc" id="en_discount_otc" value="{{ isset($package->en_discount_otc) ? $package->en_discount_otc : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_one" class="form-label">EN Short Information 01</label>
                                <input type="text" class="form-control" name="en_short_info_one"
                                    id="en_short_info_one" value="{{ isset($package->en_short_info_one) ? $package->en_short_info_one : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_two" class="form-label">EN Short Information 02</label>
                                <input type="text" class="form-control" name="en_short_info_two"
                                    id="en_short_info_two" value="{{ isset($package->en_short_info_two) ? $package->en_short_info_two : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_three" class="form-label">EN Short Information 03</label>
                                <input type="text" class="form-control" name="en_short_info_three"
                                    id="en_short_info_three" value="{{ isset($package->en_short_info_three) ? $package->en_short_info_three : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_four" class="form-label">EN Short Information 04</label>
                                <input type="text" class="form-control" name="en_short_info_four"
                                    id="en_short_info_four" value="{{ isset($package->en_short_info_four) ? $package->en_short_info_four : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_five" class="form-label">EN Short Information 05</label>
                                <input type="text" class="form-control" name="en_short_info_five"
                                    id="en_short_info_five" value="{{ isset($package->en_short_info_five) ? $package->en_short_info_five : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_six" class="form-label">EN Short Information 06</label>
                                <input type="text" class="form-control" name="en_short_info_six"
                                    id="en_short_info_six" value="{{ isset($package->en_short_info_six) ? $package->en_short_info_six : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_seven" class="form-label">EN Short Information 07</label>
                                <input type="text" class="form-control" name="en_short_info_seven"
                                    id="en_short_info_seven" value="{{ isset($package->en_short_info_seven) ? $package->en_short_info_seven : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_eight" class="form-label">EN Short Information 08</label>
                                <input type="text" class="form-control" name="en_short_info_eight"
                                    id="en_short_info_eight" value="{{ isset($package->en_short_info_eight) ? $package->en_short_info_eight : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_nine" class="form-label">EN Short Information 09</label>
                                <input type="text" class="form-control" name="en_short_info_nine"
                                    id="en_short_info_nine" value="{{ isset($package->en_short_info_nine) ? $package->en_short_info_nine : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_short_info_ten" class="form-label">EN Short Information 10</label>
                                <input type="text" class="form-control" name="en_short_info_ten"
                                    id="en_short_info_ten" value="{{ isset($package->en_short_info_ten) ? $package->en_short_info_ten : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label for="en_button_text" class="form-label">EN Button Text</label>
                                <input type="text" class="form-control" name="en_button_text" id="en_button_text" required value="{{ isset($package->en_button_text) ? $package->en_button_text : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            Top Package
                        </div>
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="top_package" id="yes" class="with-gap" {{ isset($package->top_package) && $package->top_package == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="top_package" id="no" class="with-gap" {{ isset($package->top_package) && $package->top_package == 0 ? 'checked' : '' }} value="0">
                                    <label for="no">No</label>
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($package->status) && $package->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($package->status) && $package->status == 0 ? 'checked' : '' }} value="0">
                                    <label for="unpublish">Unpublish</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Update">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection