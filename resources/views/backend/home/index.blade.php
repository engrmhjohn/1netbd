@extends('backend.master')
@section('title')
    Admin :: Home
@endsection
@section('content')
    @php
        //total admin
        $total_super_admin = App\Models\User::where('role', '2')->get();
        $total_super_admin_count = $total_super_admin->count();

        //total employee
        $total_employee = App\Models\User::where('role', '1')->get();
        $total_employee_count = $total_employee->count();

        //total pending employee
        $total_pending_employee = App\Models\User::where('role', '0')->get();
        $total_pending_employee_count = $total_pending_employee->count();

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
                                            <h6 class="">Super Admin</h6>
                                            <h2 class="mb-0 number-font">{{ $total_super_admin_count }}</h2>
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
                        <a href="{{ route('admin.employee_list') }}">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Admin</h6>
                                            <h2 class="mb-0 number-font">{{ $total_employee_count }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="leadschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <a href="{{ route('admin.pending_employee_list') }}">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Pending Admin</h6>
                                            <h2 class="mb-0 number-font">{{ $total_pending_employee_count }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="profitchart" class="h-8 w-9 chart-dropshadow"></canvas>
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
                                                <canvas id="costchart" class="h-8 w-9 chart-dropshadow"></canvas>
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
                                                <i class="fe fe-users"></i>
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
                                            <h6 class="">Success Connection</h6>
                                            <h2 class="mb-0 number-font">{{ $total_success_connection_count }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-user-check"></i>
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
                                            <h6 class="">Pending Connection</h6>
                                            <h2 class="mb-0 number-font">{{ $total_pending_connection_count }}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <i class="fe fe-user-x"></i>
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
