@extends('backend.master')
@section('title')
    CMS :: Client Type
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Client Type</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_client_type') }}" class="btn btn-success btn-sm mb-3" title="Add New">
                        <i class="fe fe-plus"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Client Type Name</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client_type as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->en_title }}</td>
                                        <td>
                                            @if ($item->status == 0)
                                                <div class="mt-sm-1 d-block">
                                                    <span class="tag tag-rounded text-danger">Unpublished</span>
                                                </div>
                                            @else
                                                <div class="mt-sm-1 d-block">
                                                    <span class="tag tag-rounded">Published</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_client_type', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_client_type') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="client_type_id" value="{{ $item->id }}">
                                                    <button class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?');" type="submit"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                                            class="fe fe-trash-2"> </span></button>
                                                </form>
                                            </div>
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
    <!-- End Row -->
@endsection
