@extends('backend.master')
@section('title')
Admin :: Online Registration Search Result 
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Online Registration Search Result List
            </div>
            <div class="card-body">
                <a href="{{ route('manage_buy_package') }}" class="btn btn-sm btn-success mb-3">
                    <i class="fa fa-mail-reply"></i> Back to Manage Registration
                </a>
                <form class="mb-3" action="/filter-registration" method="GET">
                    <div class="row">
                        <div class="col-lg-2">
                            <label for=""> <strong>Start Date</strong> </label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="col-lg-2">
                            <label for=""> <strong>End Date</strong> </label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <div class="col-lg-2 mt-1">
                            <button type="submit" class="btn btn-dark mt-5">Filter</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>UserID</th>
                                <th>Phone</th>
                                <th>Package</th>
                                <th>Branch</th>
                                <th>Marketing</th>
                                <th>Status</th>
                                <th class="text-center bg-warning text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registration as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->created_at->format('d F Y') }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->en_package_name }} ({{ $user->en_mbps_value }} Mbps)</td>
                                <td>{{ $user->area->en_area_name ?? 'Nothing Selected'}}</td>
                                <td>{{ $user->marketing_person_name }}</td>
                                <td class="text-center">
                                    @if ($user->status == 0)
                                    <span class="badge bg-warning badge-sm  me-1 mb-1 mt-1">Pending</span>
                                    @else
                                    <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Success</span>
                                    @endif
                                </td>
                                <td name="bstable-actions">
                                    <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                        @if(Auth::user()->role !== '4')
                                        @if ($user->status == 0)
                                        <a class="btn btn-info btn-sm" href="{{ route('status', ['id' => $user->id]) }}">Mark as Done</a>
                                        @else
                                        <a class="btn btn-danger btn-sm" href="{{ route('status', ['id' => $user->id]) }}">Mark as Pending</a>
                                        @endif
                                        @endif
                                        <a href="{{ route('preview_buy_package', $user->id) }}"><button class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Preview"><span class="fe fe-eye fs-14"></span>
                                            </button></a>
                                        <a href="{{ route('export_package_pdf', $user->id) }}"><button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Download"><span class="fe fe-download fs-14"></span>
                                            </button></a>
                                        @if(Auth::user()->role == '2' || Auth::user()->role == '1' || Auth::user()->role == '3')
                                        <a href="{{ route('edit_buy_package', $user->id) }}"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                            </button></a>
                                        @if($user->email)
                                        <a href="{{ route('new_registration_send_mail', $user->id) }}"><button class="btn btn-warning btn-sm" onclick="return confirm('Are you sure to send email?');" data-bs-toggle="tooltip" data-bs-original-title="Email"><span class="fe fe-mail fs-14"></span>
                                            </button></a>
                                        @endif
                                        @endif
                                        @if(Auth::user()->role !== '4' && Auth::user()->role !== '3')
                                        <form action="{{ route('delete_buy_package') }}" method="post" id="delete">
                                            @csrf
                                            <input type="hidden" name="registration_id" value="{{ $user->id }}">
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span class="fe fe-trash-2"> </span></button>
                                        </form>
                                        @endif
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
