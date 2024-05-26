@extends('backend.master')
@section('title')
Admin :: Home
@endsection
@section('content')
@php
$user = Auth::user();
//total admin (super and noraml)
$all_admin = App\Models\User::get();
$all_admin_count = $all_admin->count();

//total super admin
$total_super_admin = App\Models\User::where('role', '2')->get();
$total_super_admin_count = $total_super_admin->count();

//total admin
$total_admin = App\Models\User::where('role', '1')->get();
$total_admin_count = $total_admin->count();

//total editor admin
$total_editor = App\Models\User::where('role', '3')->get();
$total_editor_count = $total_editor->count();

//total viewer admin
$total_viewer = App\Models\User::where('role', '4')->get();
$total_viewer_count = $total_viewer->count();

//total pending admin
$total_pending = App\Models\User::where('role', '0')->get();
$total_pending_count = $total_pending->count();

//total contact
$total_contact = App\Models\ContactUs::get();
$total_contact_count = $total_contact->count();

//total success connection
$total_success_connection = App\Models\BuyPackage::where('status', '1')->get();
$total_success_connection_count = $total_success_connection->count();

//total pending connection
$total_pending_connection = App\Models\BuyPackage::where('status', '0')->get();
$total_pending_connection_count = $total_pending_connection->count();

//total registration connection
$total_connection = App\Models\BuyPackage::get();
$total_connection_count = $total_connection->count();

// last 10 query print
// $latest_registration = App\Models\BuyPackage::where('area_id', $user->area_id)->orderBy('id','desc')->take('10')->get();

$specific_area_ids = [1, 2, 5];

if (in_array($user->area_id, $specific_area_ids)) {
// Get all records if the en_area_name is one of the specified values
$registrations = App\Models\BuyPackage::orderBy('id', 'desc')->get();
$registrations_count = $registrations->count();
// Get all pending records if the en_area_name is one of the specified values
$pending_registrations = App\Models\BuyPackage::where('status', '0')->orderBy('id', 'desc')->get();
$pending_registrations_count = $pending_registrations->count();
// Get all success records if the en_area_name is one of the specified values
$success_registrations = App\Models\BuyPackage::where('status', '1')->orderBy('id', 'desc')->get();
$success_registrations_count = $success_registrations->count();
// last 10 query print
$latest_registration = App\Models\BuyPackage::orderBy('id','desc')->take('10')->get();
} else {
// Get all records based on area / branch
$registrations = App\Models\BuyPackage::where('area_id', $user->area_id)->orderBy('id', 'desc')->get();
$registrations_count = $registrations->count();
// Get all pending records based on area / branch
$pending_registrations = App\Models\BuyPackage::where('area_id', $user->area_id)->where('status', '0')->orderBy('id', 'desc')->get();
$pending_registrations_count = $pending_registrations->count();
// Get all success records based on area / branch
$success_registrations = App\Models\BuyPackage::where('area_id', $user->area_id)->where('status', '1')->orderBy('id', 'desc')->get();
$success_registrations_count = $success_registrations->count();
// last 10 query print based on area / branch
$latest_registration = App\Models\BuyPackage::where('area_id', $user->area_id)->orderBy('id','desc')->take('10')->get();
}
@endphp
@if (Auth::user()->role == '2')
<div class="row">

    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('manage_admin') }}">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $all_admin_count }}</h2>
                            <p class="text-white mb-0">All Users</p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-user-o text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.super_admin_user') }}">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_super_admin_count }}</h2>
                            <p class="text-white mb-0">Super Admin</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-user-check text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.admin_user') }}">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_admin_count }}</h2>
                            <p class="text-white mb-0">Total Admin</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-users text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.editor_user') }}">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_editor_count }}</h2>
                            <p class="text-white mb-0">Total Editor</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-users text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.viewer_user') }}">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_viewer_count }}</h2>
                            <p class="text-white mb-0">Total Viewer</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-users text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.pending_user') }}">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_pending_count }}</h2>
                            <p class="text-white mb-0">Pending Admin</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-loader text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('admin.manage_contact_message') }}">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_contact_count }}</h2>
                            <p class="text-white mb-0">Total Contact Queries</p>
                        </div>
                        <div class="ms-auto"> <i class="fa fa-heartbeat text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('manage_buy_package') }}">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_connection_count }}</h2>
                            <p class="text-white mb-0">Online Registration</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-folder text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('completed_connection') }}">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_success_connection_count }}</h2>
                            <p class="text-white mb-0">Success Connection</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-folder-plus text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <a href="{{ route('pending_connection') }}">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $total_pending_connection_count }}</h2>
                            <p class="text-white mb-0">Pending Connection</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-folder-minus text-white fs-30 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@elseif(Auth::user()->role == '1' || Auth::user()->role == '3' || Auth::user()->role == '4')
<div class="row">
    <div class="card bg-success py-3 px-3 text-white">
        Hii <strong class="fw-bold text-uppercase">{{Auth::user()->name}}</strong> Welcome Back to One Net Admin Panel.
    </div>
</div>
<div class="row">
    @if (Session::has('message'))
    <div class="col-lg-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('manage_buy_package') }}">
                <div class="card bg-primary img-card box-primary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $registrations_count }}</h2>
                                <p class="text-white mb-0">Online Registration</p>
                            </div>
                            <div class="ms-auto"> <i class="fe fe-folder text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('completed_connection') }}">
                <div class="card bg-secondary img-card box-secondary-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $success_registrations_count }}</h2>
                                <p class="text-white mb-0">Success Connection</p>
                            </div>
                            <div class="ms-auto"> <i class="fe fe-folder-plus text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
            <a href="{{ route('pending_connection') }}">
                <div class="card bg-warning img-card box-warning-shadow">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="text-white">
                                <h2 class="mb-0 number-font">{{ $pending_registrations_count }}</h2>
                                <p class="text-white mb-0">Pending Connection</p>
                            </div>
                            <div class="ms-auto"> <i class="fe fe-folder-minus text-white fs-30 me-2 mt-2"></i> </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>Recent Online Registration List</h3>
                <div class="table-responsive">
                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Package</th>
                                <th>Branch</th>
                                <th>Marketing</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($latest_registration as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->created_at->format('d F Y') }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->en_package_name }} ({{ $user->en_mbps_value }} Mbps)</td>
                                <td>{{ $user->area->en_area_name ?? 'Nothing Selected'}}</td>
                                <td>{{ $user->marketing_person_name }}</td>
                                <td class="text-center">
                                    @if ($user->status == 0)
                                    <div class="mt-sm-1 d-block">
                                        <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Pending</span>
                                    </div>
                                    @else
                                    <span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Success</span>
                                    @endif
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
@else
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <p>Hii <strong>{{ Auth::user()->name }}, </strong>you're requesting to be Admin / Employee
                    privellage, it's need existing admin's approval. Please wait for confirmation. </p>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
