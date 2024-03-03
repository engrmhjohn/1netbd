@extends('backend.master')
@section('title')
CMS :: Area
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Area</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_area') }}" class="btn btn-sm btn-success" title="Add New">
                    <i class="fa fa-mail-reply"></i> Back to Manage Area
                </a>
                <form action="{{ route('admin.update_area') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="area_id" value="{{$area->id}}">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label>Select Region</label>
                                <select name="region_id" class="form-control form-select select2"
                                    data-bs-placeholder="Select Region" required>
                                    <option value="" disabled selected></option>
                                    @foreach ($region as $item)
                                        <option value=" {{ $item->id }}" {{ isset($area->region_id) ? ($area->region_id == $item->id ? 'selected' : '') : '' }}>{{ $item->en_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="en_title" class="form-label">Area Name</label>
                                <input type="text" class="form-control" name="en_title" id="en_title" value="{{ isset($area->en_title) ? $area->en_title : '' }}"
                                    placeholder="Area Name" autocomplete="en_title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group">
                                <div class="form-label">Status</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status" value="1" {{ isset($area->status) && $area->status == 1 ? 'checked' : '' }} checked value="1">
                                        <span class="custom-control-label">Publish</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status"
                                            value="0" {{ isset($area->status) && $area->status == 0 ? 'checked' : '' }} value="0">
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