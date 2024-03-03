@extends('backend.master')
@section('title')
    Admin :: Online Registration
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Online Registration List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Package</th>
                                    <th>Issued By</th>
                                    <th>Status</th>
                                    <th class="text-center bg-success text-white">Mark</th>
                                    <th class="text-center bg-warning text-white">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registration as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->created_at->format('d F Y') }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->en_package_name }}</td>
                                        @if (optional($user->admin)->id)
                                            <td>{{ $user->admin->name }}</td>
                                        @else
                                            <td>Client</td>
                                        @endif
                                        <td class="text-center">
                                            @if ($user->status == 0)
                                                <span class="badge bg-warning badge-sm  me-1 mb-1 mt-1">Pending</span>
                                                @else
                                                <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Success</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($user->status == 0)
                                                <a class="btn btn-secondary btn-sm"
                                                    href="{{ route('status', ['id' => $user->id]) }}">Done</a>
                                            @else
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ route('status', ['id' => $user->id]) }}">Pending</a>
                                            @endif
                                        </td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('preview_buy_package', $user->id) }}"><button
                                                        class="btn btn-secondary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Preview"><span
                                                            class="fe fe-eye fs-14"></span>
                                                    </button></a>
                                                    <a href="{{ route('edit_buy_package', $user->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span
                                                            class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                    <a href="{{ route('export_package_pdf', $user->id) }}"><button
                                                        class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Download"><span
                                                            class="fe fe-download fs-14"></span>
                                                    </button></a>
                                                    <a href="{{ route('new_registration_send_mail', $user->id) }}"><button
                                                        class="btn btn-warning btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Email"><span
                                                            class="fe fe-mail fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('delete_buy_package') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="registration_id"
                                                        value="{{ $user->id }}">
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
@endsection
