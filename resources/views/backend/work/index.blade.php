@extends('backend.master')
@section('title')
    CMS :: Work Record
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Work Record</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_work') }}" class="btn btn-success btn-sm mb-3" title="Add New">
                        <i class="fe fe-plus"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Visit Date</th>
                                    <th>Client Name</th>
                                    <th>Client Address</th>
                                    <th>Feedback</th>
                                    @if (Auth::user()->role == '2')
                                    <th>Employee Name</th>
                                    @endif
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($work as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->en_visit_date)->format('d F Y') }}</td>
                                        <td>{{ $item->en_client_name }}</td>
                                        <td>{{ $item->en_client_address }}</td>
                                        <td>{{ $item->feedback->en_title ?? ''}}</td>
                                        @if (Auth::user()->role == '2')
                                        <td>{{ $item->employee->name ?? ''}}</td>
                                        @endif

                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.view_work', $item->id) }}"><button
                                                    class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview"><span class="fe fe-eye fs-14"></span>
                                                </button></a>
                                                <a href="{{ route('admin.edit_work', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_work') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="work_id" value="{{ $item->id }}">
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
