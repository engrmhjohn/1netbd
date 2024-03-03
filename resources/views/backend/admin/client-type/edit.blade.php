@extends('backend.master')
@section('title')
CMS :: Client Type
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Client Type</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_client_type') }}" class="btn btn-sm btn-success" title="Add New">
                    <i class="fa fa-mail-reply"></i> Back to Manage Client Type
                </a>
                <form action="{{ route('admin.update_client_type') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="client_type_id" value="{{$client_type->id}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="en_title" class="form-label">Client Type Name</label>
                                <input type="text" class="form-control" name="en_title" id="en_title" value="{{ isset($client_type->en_title) ? $client_type->en_title : '' }}"
                                    placeholder="Client Type Name" autocomplete="en_title">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="form-group">
                                <div class="form-label">Status</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status" value="1" {{ isset($client_type->status) && $client_type->status == 1 ? 'checked' : '' }} checked value="1">
                                        <span class="custom-control-label">Publish</span>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="status"
                                            value="0" {{ isset($client_type->status) && $client_type->status == 0 ? 'checked' : '' }} value="0">
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