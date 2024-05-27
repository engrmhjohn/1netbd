@extends('backend.master')
@section('title')
    CMS :: Manage Client Review
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Client Review Manage
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_clients_review') }}" class="btn btn-success btn-sm" title="Add New">
                        <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients_review as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="Client Review Pic"></td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_clients_review', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_clients_review') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="clients_review_id" value="{{ $item->id }}">
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
