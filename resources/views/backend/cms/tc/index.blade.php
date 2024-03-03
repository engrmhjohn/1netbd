@extends('backend.master')
@section('title')
CMS :: Terms & Conditions
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            Terms & Conditions
            </div>
            <div class="card-body">
                <!-- <a href="{{ route('admin.add_tc') }}" class="btn btn-success btn-sm" title="Add New">
                    <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                </a> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Payment</th>
                                <th>Documentation</th>
                                <th>After Sales</th>
                                <th>Client Responsibility</th>
                                <th>Others</th>
                                <th>Contact Termination</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tc as $item)
                            <tr>
                                <td>{{ $item->en_title }}</td>
                                <td>{!! $item->en_payment_mode !!}</td>
                                <td>{!! $item->en_documentation !!}</td>
                                <td>{!! $item->en_after_sales_service !!}</td>
                                <td>{!! $item->en_client_responsibility !!}</td>
                                <td>{!! $item->en_others !!}</td>
                                <td>{!! $item->en_contact_termination !!}</td>
                                <td name="bstable-actions">
                                    <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                            <a href="{{ route('admin.edit_tc', $item->id) }}"><button
                                                class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                            </button></a>
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