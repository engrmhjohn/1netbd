@extends('backend.master')
@section('title')
CMS :: FAQ
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong>FAQ</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_faq') }}" class="btn btn-sm btn-success" title="Add New">
                    Manage FAQ
                </a>
                <form action="{{ route('admin.save_faq') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_one">Question 01</label>
                                <input class="form-control" name="en_question_one" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_one" class="form-label">Answer 01</label>
                                    <textarea class="form-control no-resize" name="en_answer_one" id="en_answer_one" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_two">Question 02</label>
                                <input class="form-control" name="en_question_two" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_two" class="form-label">Answer 02</label>
                                    <textarea class="form-control no-resize" name="en_answer_two" id="en_answer_two" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_three">Question 03</label>
                                <input class="form-control" name="en_question_three" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_three" class="form-label">Answer 03</label>
                                    <textarea class="form-control no-resize" name="en_answer_three" id="en_answer_three" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_four">Question 04</label>
                                <input class="form-control" name="en_question_four" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_four" class="form-label">Answer 04</label>
                                    <textarea class="form-control no-resize" name="en_answer_four" id="en_answer_four" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_five">Question 05</label>
                                <input class="form-control" name="en_question_five" type="text" required>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_five" class="form-label">Answer 05</label>
                                    <textarea class="form-control no-resize" name="en_answer_five" id="en_answer_five" cols="30" rows="2" required style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection