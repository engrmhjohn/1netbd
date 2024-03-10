@extends('backend.master')
@section('title')
    CMS :: Manage Counter
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Counter Manage
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_counter') }}" class="btn btn-success btn-sm" title="Add New">
                        <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($counter as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset($item->icon) }}" alt="Counter Icon"
                                                style="max-width: 100px;"></td>
                                        <td>{{ $item->en_name }}</td>
                                        <td>{{ $item->en_number }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>{{ $item->status == 0 ? 'Unpublished' : 'Published' }}</td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_counter', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_counter') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="counter_id" value="{{ $item->id }}">
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
