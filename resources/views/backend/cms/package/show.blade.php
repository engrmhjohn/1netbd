@extends('backend.master')
@section('title')
    CMS :: Package
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.manage_package') }}" class="btn btn-sm btn-success">
                        <i class="fa fa-mail-reply"></i> Back to Manage Package
                    </a>
                    <form action="{{ route('admin.save_package') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_package_name" class="form-label">EN Package Name</label>
                                    <input type="text" class="form-control" name="en_package_name" id="en_package_name"
                                        placeholder="EN Package Name" autocomplete="en_package_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_mbps_value" class="form-label">EN MBPS Value</label>
                                    <input type="text" class="form-control" name="en_mbps_value" id="en_mbps_value"
                                        placeholder="EN MBPS Value" autocomplete="en_mbps_value" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_amount_label" class="form-label">EN Amount Label</label>
                                    <input type="text" class="form-control" name="en_amount_label" id="en_amount_label"
                                        placeholder="EN Amount Label" autocomplete="en_amount_label" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_amount" class="form-label">EN Bill Amount</label>
                                    <input type="text" class="form-control" name="en_amount" id="en_amount"
                                        placeholder="EN Bill Amount" autocomplete="en_amount" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_discount_monthly_fee" class="form-label">EN Monthly Bill Discount</label>
                                    <input type="text" class="form-control" name="en_discount_monthly_fee"
                                        id="en_discount_monthly_fee" placeholder="EN Monthly Bill Discount"
                                        autocomplete="en_discount_monthly_fee">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_otc_amount" class="form-label">EN OTC</label>
                                    <input type="text" class="form-control" name="en_otc_amount" id="en_otc_amount"
                                        placeholder="EN OTC" autocomplete="en_otc_amount" required>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_discount_otc" class="form-label">EN OTC Discount</label>
                                    <input type="text" class="form-control" name="en_discount_otc" id="en_discount_otc"
                                        placeholder="EN OTC Discount" autocomplete="en_discount_otc">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_one" class="form-label">EN Short Information 01</label>
                                    <input type="text" class="form-control" name="en_short_info_one"
                                        id="en_short_info_one" placeholder="EN Short Information 01"
                                        autocomplete="en_short_info_one">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_two" class="form-label">EN Short Information 02</label>
                                    <input type="text" class="form-control" name="en_short_info_two"
                                        id="en_short_info_two" placeholder="EN Short Information 02"
                                        autocomplete="en_short_info_two">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_three" class="form-label">EN Short Information 03</label>
                                    <input type="text" class="form-control" name="en_short_info_three"
                                        id="en_short_info_three" placeholder="EN Short Information 03"
                                        autocomplete="en_short_info_three">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_four" class="form-label">EN Short Information 04</label>
                                    <input type="text" class="form-control" name="en_short_info_four"
                                        id="en_short_info_four" placeholder="EN Short Information 04"
                                        autocomplete="en_short_info_four">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_five" class="form-label">EN Short Information 05</label>
                                    <input type="text" class="form-control" name="en_short_info_five"
                                        id="en_short_info_five" placeholder="EN Short Information 05"
                                        autocomplete="en_short_info_five">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_six" class="form-label">EN Short Information 06</label>
                                    <input type="text" class="form-control" name="en_short_info_six"
                                        id="en_short_info_six" placeholder="EN Short Information 06"
                                        autocomplete="en_short_info_six">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_seven" class="form-label">EN Short Information 07</label>
                                    <input type="text" class="form-control" name="en_short_info_seven"
                                        id="en_short_info_seven" placeholder="EN Short Information 07"
                                        autocomplete="en_short_info_seven">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_eight" class="form-label">EN Short Information 08</label>
                                    <input type="text" class="form-control" name="en_short_info_eight"
                                        id="en_short_info_eight" placeholder="EN Short Information 08"
                                        autocomplete="en_short_info_eight">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_nine" class="form-label">EN Short Information 09</label>
                                    <input type="text" class="form-control" name="en_short_info_nine"
                                        id="en_short_info_nine" placeholder="EN Short Information 09"
                                        autocomplete="en_short_info_nine">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_short_info_ten" class="form-label">EN Short Information 10</label>
                                    <input type="text" class="form-control" name="en_short_info_ten"
                                        id="en_short_info_ten" placeholder="EN Short Information 10"
                                        autocomplete="en_short_info_ten">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="en_button_text" class="form-label">EN Button Text</label>
                                    <input type="text" class="form-control" name="en_button_text" id="en_button_text"
                                        placeholder="EN Button Text" autocomplete="en_button_text">
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
                                        <input type="radio" name="top_package" id="yes" class="with-gap"
                                            value="1">
                                        <label for="publish">Yes</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="top_package" id="no" class="with-gap" checked
                                            value="0">
                                        <label for="unpublish">No</label>
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
                                        <input type="radio" name="status" id="publish" class="with-gap" checked
                                            value="1">
                                        <label for="publish">Publish</label>
                                    </div>
                                    <div class="radio inlineblock">
                                        <input type="radio" name="status" id="unpublish" class="with-gap"
                                            value="0">
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
