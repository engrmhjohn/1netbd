@extends('backend.master')
@section('title')
    CMS :: Manage FAQ
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    FAQ Manage
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.add_faq') }}" class="btn btn-success btn-sm" title="Add New">
                        <i class="zmdi zmdi-plus" aria-hidden="true"></i> Add New
                    </a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Q1</th>
                                    <th>Ans 01</th>
                                    <th>Q2</th>
                                    <th>Ans 02</th>
                                    <th>Q3</th>
                                    <th>Ans: 03</th>
                                    <th>Q4</th>
                                    <th>Ans: 04</th>
                                    <th>Q5</th>
                                    <th>Ans: 05</th>
                                    <th class="bg-warning text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faq as $item)
                                    <tr>
                                        <td><img src="{{ asset($item->image) }}" alt="FAQ Image"
                                            style="max-width: 100px;"></td>
                                        <td>{{ $item->en_question_one }}</td>
                                        <td>{{ $item->en_answer_one }}</td>
                                        <td>{{ $item->en_question_two }}</td>
                                        <td>{{ $item->en_answer_two }}</td>
                                        <td>{{ $item->en_question_three }}</td>
                                        <td>{{ $item->en_answer_three }}</td>
                                        <td>{{ $item->en_question_four }}</td>
                                        <td>{{ $item->en_answer_four }}</td>
                                        <td>{{ $item->en_question_five }}</td>
                                        <td>{{ $item->en_answer_five }}</td>
                                        <td name="bstable-actions">
                                            <div class="btn-list d-flex justify-content-center" style="gap: 10px;">
                                                <a href="{{ route('admin.edit_faq', $item->id) }}"><button
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
