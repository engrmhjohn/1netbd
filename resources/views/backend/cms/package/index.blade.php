@extends('backend.master')
@section('title')
CMS :: Package
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Package
            </div>
            <div class="card-body">
                <a href="{{ route('admin.add_package') }}" class="btn btn-success btn-sm" title="Add New">
                    <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                </a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Package Name</th>
                                <th>MBPS</th>
                                <th>Bill</th>
                                <th>Discount Bill</th>
                                <th>OTC</th>
                                <th>Discount OTC</th>
                                <th>Top Package</th>
                                <th>Status</th>
                                <th class="text-center bg-warning">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $item->en_package_name }}</td>
                                <td>{{ $item->en_mbps_value }}</td>
                                <td>{{ $item->en_amount }}</td>
                                <td>{{ $item->en_discount_monthly_fee }}</td>
                                <td>{{ $item->en_otc_amount }}</td>
                                <td>{{ $item->en_discount_otc }}</td>
                                <td>{{ $item->top_package==1? 'Yes':'No' }}</td>
                                <td>{{$item->status==0? 'Unpublished':'Published'}}</td>
                                <td name="bstable-actions">
                                    <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                            <a href="{{ route('admin.edit_package', $item->id) }}"><button
                                                class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                            </button></a>
                                    <form action="{{ route('admin.delete_package') }}" method="post"
                                    id="delete">
                                    @csrf
                                    <input type="hidden" name="package_id" value="{{ $item->id }}">
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?');" type="submit"
                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"> <span
                                            class="fe fe-trash-2"> </span></button>
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