@extends('backend.master')
@section('title')
    CMS :: BTRC Approved Package
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage BTRC Approved Package</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_btrc_approved_packages') }}" class="btn btn-success btn-sm mb-3"
                        title="Add New">
                        <i class="fe fe-plus"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>BTRC Approved Package Document</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($btrc as $item)
                                    <tr>
                                        @if (pathinfo($item->document, PATHINFO_EXTENSION) == 'pdf')
                                        <td>
                                            <iframe src="{{ asset($item->document) }}" style="width: 100%; height: 100vh;"></iframe>
                                        </td>
                                        @else
                                            <td><img src="{{ asset($item->document) }}" alt="BTRC Approved Package"></td>
                                        @endif

                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_btrc_approved_packages', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
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
    <!-- End Row -->
@endsection
