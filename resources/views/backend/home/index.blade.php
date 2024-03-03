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

        //recent work show for admin
        $recent_work = App\Models\Work::take('10')->orderBy('id', 'desc')->get();

        //recent work show for employee
        $employee_recent_work = App\Models\Work::where('employee_id', Auth::user()->id)
            ->take('10')
            ->orderBy('id', 'desc')
            ->get();
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
                                            <h6 class="">Total Super Admin</h6>
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
                                            <h6 class="">Total Employee</h6>
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
                                            <h6 class="">Pending Employee</h6>
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Work Added by Employees</h3>
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
                                    @foreach ($recent_work as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->en_visit_date)->format('d F Y') }}</td>
                                            <td>{{ $item->en_client_name }}</td>
                                            <td>{{ $item->en_client_address }}</td>
                                            <td>{{ $item->feedback->en_title ?? '' }}</td>
                                            @if (Auth::user()->role == '2')
                                                <td>{{ $item->employee->name ?? '' }}</td>
                                            @endif

                                            <td name="bstable-actions">
                                                <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                    <a href="{{ route('admin.view_work', $item->id) }}"><button
                                                            class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Preview"><span
                                                                class="fe fe-eye fs-14"></span>
                                                        </button></a>
                                                    <a href="{{ route('admin.edit_work', $item->id) }}"><button
                                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Edit"><span
                                                                class="fe fe-edit fs-14"></span>
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
    @elseif(Auth::user()->role == '1')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Recent Work Summary</h3>
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
                                    @foreach ($employee_recent_work as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->en_visit_date)->format('d F Y') }}</td>
                                            <td>{{ $item->en_client_name }}</td>
                                            <td>{{ $item->en_client_address }}</td>
                                            <td>{{ $item->feedback->en_title ?? '' }}</td>
                                            @if (Auth::user()->role == '2')
                                                <td>{{ $item->employee->name ?? '' }}</td>
                                            @endif

                                            <td name="bstable-actions">
                                                <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                    <a href="{{ route('admin.view_work', $item->id) }}"><button
                                                            class="btn btn-success btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Preview"><span
                                                                class="fe fe-eye fs-14"></span>
                                                        </button></a>
                                                    <a href="{{ route('admin.edit_work', $item->id) }}"><button
                                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                            data-bs-original-title="Edit"><span
                                                                class="fe fe-edit fs-14"></span>
                                                        </button></a>
                                                    <form action="{{ route('admin.delete_work') }}" method="post"
                                                        id="delete">
                                                        @csrf
                                                        <input type="hidden" name="work_id"
                                                            value="{{ $item->id }}">
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure?');" type="submit"
                                                            data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                            <span class="fe fe-trash-2"> </span></button>
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
