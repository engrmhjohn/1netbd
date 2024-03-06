@extends('backend.master')
@section('title')
    CMS :: Company Information
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Manage Company Information</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_company_info') }}" class="btn btn-success btn-sm mb-3"
                        title="Add New">
                        <i class="fe fe-plus"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>Color Logo</th>
                                    <th>White Logo</th>
                                    <th>Name</th>
                                    <th>Hotline</th>
                                    <th>Sales No</th>
                                    <th>Email</th>
                                    <th>Facebook Link</th>
                                    <th>Youtube Link</th>
                                    <th>Linkedin Link</th>
                                    <th>Google Map Link</th>
                                    <th>Address</th>
                                    <th>Working Hours</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($company_info as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->color_logo) }}" alt="Color Logo" style="max-width: 100px; height: auto;"></td>
                                        <td><img class="bg-dark" src="{{ asset($item->white_logo) }}" alt="White Logo" style="max-width: 100px; height: auto;"></td>
                                        <td>{{ $item->en_name }}</td>
                                        <td>{{ $item->en_hotline }}</td>
                                        <td>{{ $item->en_sales_number }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->fb_link }}</td>
                                        <td>{{ $item->youtube_link }}</td>
                                        <td>{{ $item->linkedin_link }}</td>
                                        <td>{{ $item->map_link }}</td>
                                        <td>{{ $item->en_address }}</td>
                                        <td>{!! $item->en_working_hours !!}</td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_company_info', $item->id) }}"><button
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
