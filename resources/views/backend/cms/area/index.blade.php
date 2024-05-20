@extends('backend.master')
@section('title')
CMS :: Registration Area Manage
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Registration Area Manage
            </div>
            <div class="card-body">
                <a href="{{ route('admin.add_area') }}" class="btn btn-success btn-sm mb-3" title="Add New">
                    <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                </a>
                <div class="table-responsive">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th class="bg-warning text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($area as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->en_area_name }}</td>
                                    <td>{{ $item->status == 0 ? 'Unpublished' : 'Published' }}</td>
                                    <td name="bstable-actions">
                                        <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                            <a href="{{ route('admin.edit_area', $item->id) }}"><button
                                                    class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                </button></a>
                                            <form action="{{ route('admin.delete_area') }}" method="post"
                                                id="delete">
                                                @csrf
                                                <input type="hidden" name="area_id" value="{{ $item->id }}">
                                                <button class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?');" type="submit"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                        class="fe fe-trash-2"> </span></button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection