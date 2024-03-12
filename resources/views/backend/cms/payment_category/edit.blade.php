@extends('backend.master')
@section('title')
CMS :: Edit Payment Category
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> Payment Category</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_payment_category') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Payment Category
                </a>
                <form action="{{ route('admin.update_payment_category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="payment_category_id" value="{{$payment_category->id}}">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="form-group">
                                <label for="en_title">Payment Category Name</label>
                                <input class="form-control" name="en_title" type="text" value="{{ isset($payment_category->en_title) ? $payment_category->en_title : '' }}">
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($payment_category->status) && $payment_category->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($payment_category->status) && $payment_category->status == 0 ? 'checked' : '' }} value="0">
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