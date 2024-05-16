@extends('backend.master')
@section('title')
Admin :: Home
@endsection
@section('content')
@php
//total admin (super and noraml)
$all_admin = App\Models\User::get();
$all_admin_count = $all_admin->count();

//total super admin
$total_super_admin = App\Models\User::where('role', '2')->get();
$total_super_admin_count = $total_super_admin->count();

//total admin
$total_admin = App\Models\User::where('role', '1')->get();
$total_admin_count = $total_admin->count();

//total pending admin
$total_pending_admin = App\Models\User::where('role', '0')->get();
$total_pending_admin_count = $total_pending_admin->count();

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
$latest_registration = App\Models\BuyPackage::orderBy('id','desc')->take('10')->get();
@endphp
@if (Auth::user()->role == '2')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('manage_admin') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">All Admin</h6>
                                    <h2 class="mb-0 number-font">{{ $all_admin_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <canvas id="saleschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('manage_admin') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Super Admin</h6>
                                    <h2 class="mb-0 number-font">{{ $total_super_admin_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-user-check" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('manage_admin') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Admin</h6>
                                    <h2 class="mb-0 number-font">{{ $total_admin_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-users" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('manage_admin') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Pending Admin</h6>
                                    <h2 class="mb-0 number-font">{{ $total_pending_admin_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-user-x" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('admin.manage_contact_message') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Contact Queries</h6>
                                    <h2 class="mb-0 number-font">{{ $total_contact_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fa fa-heartbeat" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('manage_buy_package') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Online Registration</h6>
                                    <h2 class="mb-0 number-font">{{ $total_connection_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-folder" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('completed_connection') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Success Connection</h6>
                                    <h2 class="mb-0 number-font">{{ $total_success_connection_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-folder-plus" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <a href="{{ route('pending_connection') }}">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Pending Connection</h6>
                                    <h2 class="mb-0 number-font">{{ $total_pending_connection_count }}</h2>
                                </div>
                                <div class="ms-auto">
                                    <div class="chart-wrapper mt-1">
                                        <i class="fe fe-folder-minus" style="font-size: 30px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@elseif( Auth::user()->role == '1' || Auth::user()->role == '3')
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
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-warning" style="padding-bottom: 0px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <a href="{{ route('manage_buy_package') }}">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Online Registration</h6>
                                        <h2 class="mb-0 number-font">{{ $total_connection_count }}</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-folder" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <a href="{{ route('completed_connection') }}">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Success Connection</h6>
                                        <h2 class="mb-0 number-font">{{ $total_success_connection_count }}</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-folder-plus" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <a href="{{ route('pending_connection') }}">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="">Pending Connection</h6>
                                        <h2 class="mb-0 number-font">{{ $total_pending_connection_count }}</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <i class="fe fe-folder-minus" style="font-size: 30px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
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
                                <th>KAM</th>
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
                                <td>{{ $user->kam_name }}</td>
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
