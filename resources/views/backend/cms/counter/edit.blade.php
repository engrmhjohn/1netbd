@extends('backend.master')
@section('title')
CMS :: Edit Counter Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> Counter</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_counter') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Counter Info
                </a>
                <form action="{{ route('admin.update_counter') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="counter_id" value="{{$counter->id}}">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="form-group">
                                <label for="en_name">Name</label>
                                <input class="form-control" name="en_name" type="text" value="{{ isset($counter->en_name) ? $counter->en_name : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="en_number">Number</label>
                                <input class="form-control" name="en_number" type="text" value="{{ isset($counter->en_number) ? $counter->en_number : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input class="form-control" name="position" type="text" value="{{ isset($counter->position) ? $counter->position : '' }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Counter Icon</h2>
                                </div>
                                <div class="card-body bg-danger">
                                    <img src="{{ asset($counter->icon) }}" alt="Counter Icon">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Counter Icon</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="icon" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
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
                                    <input type="radio" name="status" id="publish" class="with-gap" {{ isset($counter->status) && $counter->status == 1 ? 'checked' : '' }} checked value="1">
                                    <label for="publish">Publish</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="status" id="unpublish" class="with-gap" {{ isset($counter->status) && $counter->status == 0 ? 'checked' : '' }} value="0">
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