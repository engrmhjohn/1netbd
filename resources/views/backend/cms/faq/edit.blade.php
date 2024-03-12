@extends('backend.master')
@section('title')
CMS :: Edit FAQ Info
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2><strong> FAQ</strong></h2>
            </div>
            <div class="card-body">
                <a href="{{ route('admin.manage_faq') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-mail-reply"></i> Back to Manage FAQ Info
                </a>
                <form action="{{ route('admin.update_faq') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="faq_id" value="{{$faq->id}}">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Preview FAQ Image</h2>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset($faq->image) }}" alt="FAQ Image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Choose FAQ Image</h2>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="image" class="dropify" accept=".jpg, .png, image/jpeg, image/png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_one">Question 01</label>
                                <input class="form-control" name="en_question_one" type="text" required value="{{ isset($faq->en_question_one) ? $faq->en_question_one : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_one" class="form-label">Answer 01</label>
                                    <textarea class="form-control no-resize" name="en_answer_one" id="en_answer_one" cols="30" rows="2" required style="resize: none;">{{ isset($faq->en_answer_one) ? $faq->en_answer_one : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_two">Question 02</label>
                                <input class="form-control" name="en_question_two" type="text" required value="{{ isset($faq->en_question_two) ? $faq->en_question_two : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_two" class="form-label">Answer 02</label>
                                    <textarea class="form-control no-resize" name="en_answer_two" id="en_answer_two" cols="30" rows="2" required style="resize: none;">{{ isset($faq->en_answer_two) ? $faq->en_answer_two : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_three">Question 03</label>
                                <input class="form-control" name="en_question_three" type="text" required value="{{ isset($faq->en_question_three) ? $faq->en_question_three : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_three" class="form-label">Answer 03</label>
                                    <textarea class="form-control no-resize" name="en_answer_three" id="en_answer_three" cols="30" rows="2" required style="resize: none;">{{ isset($faq->en_answer_three) ? $faq->en_answer_three : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_four">Question 04</label>
                                <input class="form-control" name="en_question_four" type="text" required value="{{ isset($faq->en_question_four) ? $faq->en_question_four : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_four" class="form-label">Answer 04</label>
                                    <textarea class="form-control no-resize" name="en_answer_four" id="en_answer_four" cols="30" rows="2" required style="resize: none;">{{ isset($faq->en_answer_four) ? $faq->en_answer_four : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_question_five">Question 05</label>
                                <input class="form-control" name="en_question_five" type="text" required value="{{ isset($faq->en_question_five) ? $faq->en_question_five : '' }}">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="form-group">
                                <label for="en_answer_five" class="form-label">Answer 05</label>
                                    <textarea class="form-control no-resize" name="en_answer_five" id="en_answer_five" cols="30" rows="2" required style="resize: none;">{{ isset($faq->en_answer_five) ? $faq->en_answer_five : '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection