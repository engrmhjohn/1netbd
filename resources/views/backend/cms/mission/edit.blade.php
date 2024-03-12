@extends('backend.master')
@section('title')
CMS :: Edit Mission Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> Mission</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_mission') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage Mission Info
                </a>
                <form action="{{ route('admin.update_mission') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="mission_id" value="{{$mission->id}}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_title">Title</label>
                                <input class="form-control" name="en_title" type="text" value="{{ isset($mission->en_title) ? $mission->en_title : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_description" class="form-label">Description</label>
                                    <textarea class="form-control no-resize" name="en_description" id="en_description" cols="30" rows="2" required style="resize: none;">{{ isset($mission->en_description) ? $mission->en_description : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview Mission Image</h2>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset($mission->image) }}" alt="Mission Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose Mission Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
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