@extends('backend.master')
@section('title')
    CMS :: Manage Payment Method
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Payment Method Manage
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_payment') }}" class="btn btn-success btn-sm" title="Add New">
                        <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bkash_payment as $item)
                                    <tr>
                                        <td>{{ $item->paymentCategory->en_title }}</td>
                                        <td><img src="{{ asset($item->image_one) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_two) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_three) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_four) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_five) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_six) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_seven) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_eight) }}" alt=""></td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_payment', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_payment') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="payment_id" value="{{ $item->id }}">
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

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rocket_payment as $item)
                                    <tr>
                                        <td>{{ $item->paymentCategory->en_title }}</td>
                                        <td><img src="{{ asset($item->image_one) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_two) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_three) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_four) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_five) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_six) }}" alt=""></td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_payment', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_payment') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="payment_id" value="{{ $item->id }}">
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

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nagad_payment as $item)
                                    <tr>
                                        <td>{{ $item->paymentCategory->en_title }}</td>
                                        <td><img src="{{ asset($item->image_one) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_two) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_three) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_four) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_five) }}" alt=""></td>
                                        <td><img src="{{ asset($item->image_six) }}" alt=""></td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_payment', $item->id) }}"><button
                                                        class="btn btn-primary btn-sm" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span>
                                                    </button></a>
                                                <form action="{{ route('admin.delete_payment') }}" method="post"
                                                    id="delete">
                                                    @csrf
                                                    <input type="hidden" name="payment_id" value="{{ $item->id }}">
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
