@extends('backend.master')
@section('title')
Admin :: User Management
@endsection
@section('content')
<!-- PAGE -->
<div class="page">
    <div class="page-main">
        <!-- Theme-Layout -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> <strong>{{ $user->name }}</strong>'s Personal Information
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Profile Image</div>
                        </div>
                        <form action="{{ route('update_user_photo_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                <div class="text-center chat-image mb-2">
                                    <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                        @if ($user->profile_photo_path)
                                        <img alt="avatar" src="{{ asset($user->profile_photo_path) }}" class="brround" style="width: 5rem; height: 5rem;">
                                        @else
                                        <img alt="avatar" src="{{ asset('backendAssets') }}/images/avatar/avatar.png" class="brround">
                                        @endif
                                    </div>
                                    <div class="main-chat-msg-name">
                                        <h5 class="mb-1 text-dark fw-semibold">{{ $user->name }}</h5>
                                        @if ($user->role == '2')
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Super Admin</p>
                                        @elseif($user->role == '1')
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Admin</p>
                                        @elseif($user->role == '3')
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Editor</p>
                                        @elseif($user->role == '4')
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Viewer</p>
                                        @else
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Not Verified</p>
                                        @endif
                                    </div>
                                    <div class="mt-3">
                                        <input type="file" class="dropify" name="profile_photo_path" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-secondary"> <i class="fa fa-check"></i> Change
                                    Photo</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Change Password</div>
                            @if ($errors->has('password'))
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <li>{{ $errors->first('password') }}</li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <form action="{{ route('update_user_password_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputnddame">New Password</label>
                                            <input type="text" class="form-control" name="password" id="exampleInputnddame">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInsasputname">Confirm New Password</label>
                                            <input type="text" class="form-control" name="password_confirmation" id="exampleInsasputname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-warning"> <i class="fa fa-check"></i> Change
                                    Password</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Name</div>
                        </div>
                        <form action="{{ route('update_user_name_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                @if ($errors->has('name'))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{ $errors->first('name') }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputname">Name</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputname" placeholder="Name" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-dark"> <i class="fa fa-check"></i> Change
                                    Name</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Employee ID</div>
                        </div>
                        <form action="{{ route('update_user_employee_id_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                @if ($errors->has('employee_id'))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{ $errors->first('employee_id') }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="Employee ID">Employee ID</label>
                                            <input type="text" class="form-control" name="employee_id" id="employee_id" placeholder="Employee ID" value="{{ $user->employee_id }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Change
                                    Employee ID</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Email</div>
                        </div>
                        <form action="{{ route('update_user_email_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                @if ($errors->has('email'))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{ $errors->first('email') }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Change
                                    Email</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Number</div>
                        </div>
                        <form action="{{ route('update_user_phone_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                @if ($errors->has('phone'))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{ $errors->first('phone') }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Contact Number</label>
                                            <input type="number" class="form-control" id="exampleInputnumber" name="phone" placeholder="Contact number" value="{{ $user->phone }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-info"> <i class="fa fa-check"></i> Change
                                    Number</button>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Branch</div>
                        </div>
                        <form action="{{ route('update_branch_name_by_admin') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body">
                                @if ($errors->has('area_id'))
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{ $errors->first('area_id') }}</li>
                                    </ul>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="area_id" required class="form-control select2-show-search form-select" data-placeholder="Choose Branch">
                                                <option label="Choose one"></option>
                                                @foreach ($areas as $item)
                                                <option value="{{ $item->id }}" {{ isset($user->area_id) ? ($user->area_id == $item->id ? 'selected' : '') : '' }}>
                                                    {{ $item->en_area_name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-dark"> <i class="fa fa-check"></i> Change
                                    Branch</button>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="card-title">Others Information</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-striped mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Account Created</th>
                                            <td>{{ $user->created_at->format('d M Y') }}</td>
                                        </tr>
                                        <tr>
                                            <th>User Role</th>
                                            <td>
                                                @if ($user->role == 2)
                                                Super Admin
                                                @elseif($user->role == 1)
                                                Admin
                                                @elseif($user->role == 3)
                                                Editor
                                                @elseif($user->role == 4)
                                                Viewer
                                                @else
                                                Not Verified
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 CLOSED -->
        </div>


    </div>
</div>
<!-- End PAGE -->
@endsection
