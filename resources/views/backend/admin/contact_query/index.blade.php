@extends('backend.master')
@section('title')
    Admin :: Contact Query
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contact Queries</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Query</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact_query as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->created_at->format('d F Y') }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->subject }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($user->query, 15,'...') }}</td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.view_contact_message', $user->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Preview"><span class="fe fe-eye fs-14"></span>
                                                    </button></a>
                                                    <form action="{{ route('admin.delete_contact_message') }}" method="post" id="delete">
                                                        @csrf
                                                        <input type="hidden" name="contact_query_id" value="{{ $user->id }}">
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
