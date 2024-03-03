@extends('backend.master')
@section('title')
CMS :: Region
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Region</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_region') }}" class="btn btn-sm btn-success" title="Add New">
                    <i class="fa fa-mail-reply"></i> Back to Manage Region
                </a>
                <form action="{{ route('admin.update_region') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="region_id" value="{{$region->id}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="en_title" class="form-label">Region Name</label>
                                <input type="text" class="form-control" name="en_title" id="en_title" value="{{ isset($region->en_title) ? $region->en_title : '' }}"
                                    placeholder="Region Name" autocomplete="en_title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group">
                                <div class="form-label">Status</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status" value="1" {{ isset($region->status) && $region->status == 1 ? 'checked' : '' }} checked value="1">
                                        <span class="custom-control-label">Publish</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status"
                                            value="0" {{ isset($region->status) && $region->status == 0 ? 'checked' : '' }} value="0">
                                        <span class="custom-control-label">Unpublish</span>
                                    </label>
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