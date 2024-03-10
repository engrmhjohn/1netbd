@extends('backend.master')
@section('title')
CMS :: Counter
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong>Counter</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_counter') }}" class="btn btn-sm btn-success" title="Add New">
                    Manage Counter
                </a>
                <form action="{{ route('admin.save_counter') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Icon Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="icon" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="form-group">
                                <label for="position">Name</label>
                                <input class="form-control" name="en_name" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">Number</label>
                                <input class="form-control" name="en_number" type="phone" required>
                            </div>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input class="form-control" name="position" type="text" required>
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