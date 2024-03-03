@extends('backend.master')
@section('title')
    CMS :: Whom Meet 
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Whom Meet</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_whom_meet') }}" class="btn btn-success btn-sm mb-3" title="Add New">
                        <i class="fe fe-plus"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Whom Meet Name</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($whom_meet as $item)
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
                                                <a href="{{ route('admin.edit_whom_meet', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_whom_meet') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="whom_meet_id" value="{{ $item->id }}">
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
