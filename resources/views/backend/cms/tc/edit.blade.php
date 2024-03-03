@extends('backend.master')
@section('title')
CMS :: Manage Terms & Conditions
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Terms & Conditions</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_tc') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Terms & Conditions
                </a>
                <form action="{{ route('admin.update_tc') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tc_id" value="{{$tc->id}}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_title" class="form-label">EN Title</label>
                                <input type="text" class="form-control" name="en_title" id="en_title" required value="{{ isset($tc->en_title) ? $tc->en_title : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN Payment Mode</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_payment_mode" class="summernote">{{ isset($tc->en_payment_mode) ? $tc->en_payment_mode : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN Documentation</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_documentation" class="summernote">{{ isset($tc->en_documentation) ? $tc->en_documentation : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN After Sales Service</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_after_sales_service" class="summernote">{{ isset($tc->en_after_sales_service) ? $tc->en_after_sales_service : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN Client Responsibility</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_client_responsibility" class="summernote">{{ isset($tc->en_client_responsibility) ? $tc->en_client_responsibility : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN Others</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_others" class="summernote">{{ isset($tc->en_others) ? $tc->en_others : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">EN Contact Termination</h3>
                                </div>
                                <div class="card-body">
                                    <textarea name="en_contact_termination" class="summernote">{{ isset($tc->en_contact_termination) ? $tc->en_contact_termination : '' }}</textarea>
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