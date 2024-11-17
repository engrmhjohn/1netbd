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
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-success mb-3">
                    <i class="fa fa-mail-reply"></i> Back to Dashboard
                </a>
                <form class="mb-3" action="/filter-registration" method="GET">
                    <div class="row">
                        <div class="col-lg-2">
                            <label for=""><strong>Start Date*</strong></label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="col-lg-2">
                            <label for=""><strong>End Date*</strong></label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        @php
                        $user = Auth::user();
                        $specific_area_ids = [1, 2, 5];
                        @endphp
                        @if ($user->role == '2' || in_array($user->area_id, $specific_area_ids))
                        <div class="col-lg-2" style="margin-top: -7px;">
                            <label class="form-label">Select Branch</label>
                            <select name="area_id" class="form-control select2-show-search form-select" data-placeholder="Choose one">
                                <option label="Choose one"></option>
                                <option value="all">All</option>
                                @foreach ($branches as $item)
                                <option value="{{ $item->id }}">{{ $item->en_area_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="col-lg-2 mt-1">
                            <button type="submit" class="btn btn-dark mt-5">Filter</button>
                        </div>
                    </div>
                </form>
                @if ($errors->any())
                <div class="text-wrap mb-4">
                    <div class="">
                        {{-- <div class="alert alert-info">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24">
                                    <path fill="#70a9ee" d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                    <circle cx="12" cy="17" r="1" fill="#1170e4" />
                                    <path fill="#1170e4" d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" /></svg></span>
                            <strong>Info Message</strong>
                            <hr class="message-inner-separator">
                            <p>@foreach ($errors->all() as $error) {{ $error }} @endforeach</p>
                        </div> --}}
                    </div>
                </div>
                @endif
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
                                <th class="text-center bg-warning text-white">Actions</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registration as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->created_at->format('d M') }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($user->username, 10, '..') }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->en_mbps_value }} Mbps</td>
                                <td>{{ $user->area->en_area_name ?? 'Nothing Selected'}}</td>
                                <td>{{ $user->marketing_person_name }}</td>
                                <td name="bstable-actions">
                                    <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                        <a href="{{ route('preview_buy_package', $user->id) }}"><button class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Preview"><span class="fe fe-eye fs-14"></span>
                                            </button></a>
                                        <a href="{{ route('export_package_pdf', $user->id) }}"><button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Download"><span class="fe fe-download fs-14"></span>
                                            </button></a>
                                        @if(Auth::user()->role == '2' || Auth::user()->role == '1' || Auth::user()->role == '3')
                                        <a href="{{ route('edit_buy_package', $user->id) }}"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                            </button></a>
                                        {{-- @if($user->email)
                                        <a href="{{ route('new_registration_send_mail', $user->id) }}"><button class="btn btn-warning btn-sm" onclick="return confirm('Are you sure to send email?');" data-bs-toggle="tooltip" data-bs-original-title="Email"><span class="fe fe-mail fs-14"></span>
                                            </button></a>
                                        @endif --}}
                                        @endif
                                        @if(Auth::user()->role !== '4' && Auth::user()->role !== '3')
                                        <form action="{{ route('delete_buy_package') }}" method="post" id="delete">
                                            @csrf
                                            <input type="hidden" name="registration_id" value="{{ $user->id }}">
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?');" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span class="fe fe-trash-2"> </span></button>
                                        </form>
                                        @endif
                                        @if(Auth::user()->role !== '4')
                                        @if ($user->status == 0)
                                        <a class="btn btn-info btn-sm" href="{{ route('status', ['id' => $user->id]) }}"><span class="fe fe-check fs-14"></span> Done</a>
                                        @else
                                        <a class="btn btn-danger btn-sm" href="{{ route('status', ['id' => $user->id]) }}"><span class="fe fe-check fs-14"></span> Pending</a>
                                        @endif
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center">
                                    @if ($user->status == 0)
                                    <span class="badge bg-warning badge-sm  me-1 mb-1 mt-1">Pending</span>
                                    @else
                                    <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Success</span>
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
@endsection
