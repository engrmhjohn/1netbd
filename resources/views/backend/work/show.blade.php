@extends('backend.master')
@section('title')
    CMS :: Work Record
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Work Record</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.manage_work') }}" class="btn btn-sm btn-success" title="Add New">
                        <i class="fa fa-mail-reply"></i> Back to Manage Work Record
                    </a>
                    <form action="{{ route('admin.save_work') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="employee_id" value="{{ Auth::user()->id }}">
                        <div class="row">
                            <div class="col-lg-12 mb-5 mt-2 text-center">
                                <strong>
                                    <mark>All fields are required*</mark>
                                </strong>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Client Visit Date</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div><input class="form-control fc-datepicker" name="en_visit_date" placeholder="MM/DD/YYYY" type="text" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label>Select Region</label>
                                    <select name="region_id" id="region-dropdown" class="form-control select2-show-search form-select"
                                        data-placeholder="Select Region" required>
                                        <option label="Choose one"></option>
                                        @foreach ($region as $item)
                                            <option value="{{ $item->id }}">{{ $item->en_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label>Select Area</label>
                                    <select name="area_id" id="area-dropdown" class="form-control select2-show-search form-select" required>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label>Client Type</label>
                                    <select name="client_type_id" class="form-control select2-show-search form-select"
                                        data-placeholder="Select Client Type" required>
                                        <option label="Choose one"></option>
                                        @foreach ($client_type as $item)
                                            <option value="{{ $item->id }}">{{ $item->en_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="form-group">
                                    <label>To Whom Meet</label>
                                    <select name="meeting_person_id" class="form-control select2-show-search form-select"
                                        data-placeholder="Select To Whom Meet" required>
                                        <option label="Choose one"></option>
                                        @foreach ($whom_meet as $item)
                                            <option value="{{ $item->id }}">{{ $item->en_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="en_client_name" class="form-label">Client Name</label>
                                    <input type="text" class="form-control" name="en_client_name" id="en_client_name"
                                        placeholder="Client Name" autocomplete="en_client_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="en_client_phone" class="form-label">Client Contact Number</label>
                                    <input type="text" class="form-control" name="en_client_phone" id="en_client_phone"
                                        placeholder="Client Contact Number" autocomplete="en_client_phone" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <label for="">Visit Address</label>
                                        <textarea class="form-control" name="en_client_address" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Client Feedback</label>
                                    <select name="feedback_id" class="form-control select2-show-search form-select"
                                        data-placeholder="Select Client Feedback" required>
                                        <option label="Choose one"></option>
                                        @foreach ($feedback as $item)
                                            <option value="{{ $item->id }}">{{ $item->en_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <label>Image / Document (if any)</label>
                                <input type="file" class="dropify" name="document" accept=".jpg, .png, image/jpeg, image/png, .pdf">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#region-dropdown').on('change', function() {
                var idRegion = this.value;
                $("#area-dropdown").html('');
                $.ajax({
                    url: "{{ url('api/fetch-areas') }}",
                    type: "POST",
                    data: {
                        region_id: idRegion,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#area-dropdown').html('<option value="">Select Area</option>');
                        $.each(res.areas, function(key, value) {
                            $("#area-dropdown").append('<option value="' + value.id +
                                '">' + value.en_title + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
