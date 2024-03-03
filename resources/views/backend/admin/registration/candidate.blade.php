@extends('backend.master')
@section('title')
Admin :: Job Candidates
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a class="btn btn-sm btn-success" href="{{ route('manage_job_apply') }}">Manage Candidates</a>
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
            <div class="card-header">
                Job Candidates List
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
                                <th>Email</th>
                                <th>Applied Post</th>
                                <th class="text-center bg-warning text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job_apply as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $user->created_at->format('d F Y'); }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->applyFor->en_title ?? '' }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('details_job_apply', $user->id) }}" title="Candidate Info"><button class="btn btn-success"><i class="zmdi zmdi-eye"></i>
                                            </button></a>
                                    <a href="{{ asset($user->document)}}" title="Download CV PDF"><button class="btn btn-primary"><i class="zmdi zmdi-download"></i>
                                            </button></a>
                                    <form action="{{ route('delete_job_apply') }}" method="post" id="delete">
                                        @csrf
                                        <input type="hidden" name="job_apply_id" value="{{ $user->id }}">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="zmdi zmdi-delete"></i></button>
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