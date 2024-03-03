@extends('backend.master')
@section('title')
    CMS :: Whom Meet
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Whom Meet</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.manage_whom_meet') }}" class="btn btn-sm btn-success" title="Add New">
                        <i class="fa fa-mail-reply"></i> Back to Manage Whom Meet
                    </a>
                    <form action="{{ route('admin.save_whom_meet') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="en_title" class="form-label">Whom Meet Name</label>
                                    <input type="text" class="form-control" name="en_title" id="en_title"
                                        placeholder="Whom Meet Name" autocomplete="en_title" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group">
                                    <div class="form-label">Status</div>
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="status" value="1"
                                                checked>
                                            <span class="custom-control-label">Publish</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="status"
                                                value="0">
                                            <span class="custom-control-label">Unpublish</span>
                                        </label>
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
