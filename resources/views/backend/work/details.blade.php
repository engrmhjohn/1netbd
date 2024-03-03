@extends('backend.master')
@section('title')
    Admin :: Work Details
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.manage_work') }}" class="btn btn-sm btn-success" title="Add New">
                    <i class="fa fa-mail-reply"></i> Back to Manage Work
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-striped mb-0">
                        <tbody>
                            <tr>
                                <th>Employee Name</th>
                                <td>{{ $work_details->employee->name }}</td>
                            </tr>
                            <tr>
                                <th>Visit Date</th>
                                <td>{{ \Carbon\Carbon::parse($work_details->en_visit_date)->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td>{{ $work_details->region->en_title ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Area</th>
                                <td>{{ $work_details->area->en_title ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Client Type</th>
                                <td>{{ $work_details->clientType->en_title ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Meeting Person</th>
                                <td>{{ $work_details->whomMeet->en_title ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Client Name</th>
                                <td>{{ $work_details->en_client_name }}</td>
                            </tr>
                            <tr>
                                <th>Client Phone</th>
                                <td>{{ $work_details->en_client_phone }}</td>
                            </tr>
                            <tr>
                                <th>Client Address</th>
                                <td>{{ $work_details->en_client_address }}</td>
                            </tr>
                            <tr>
                                <th>Feedback</th>
                                <td>{{ $work_details->feedback->en_title ?? '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                @if ($work_details->document)
                    @if (pathinfo($work_details->document, PATHINFO_EXTENSION) == 'pdf')
                        <iframe src="{{ asset($work_details->document) }}"></iframe>
                    @else
                        <img class="img-fluid" src="{{ asset($work_details->document) }}" alt="">
                    @endif
                @else
                    <p>No Media Found!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
