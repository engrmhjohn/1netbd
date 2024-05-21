@extends('frontend.master')
@section('title')
Buy Package :: One Net
@endsection
@section('content')
<section class="py-5">
    <div class="container">
        <form action="{{ route('save_buy_package') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (Auth::check())
            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
            @endif
            <div class="row justify-content-center">
                {{-- <div class="col-lg-4">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/B8iJkwwVo_s?si=mZElj5Wj3EZKG11p" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div> --}}
                <div class="col-lg-8">
                    <h3 class="bg-success py-2 text-center text-white fw-bold">Package Details</h3>
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Package Name</td>
                                <td>{{ $package_buy->en_package_name }}</td>
                                <input type="hidden" name="en_package_name" value="{{ $package_buy->en_package_name ?? 0 }}">
                            </tr>
                            <tr>
                                <td>Bandwidth</td>
                                <td>{{ $package_buy->en_mbps_value }} Mbps</td>
                                <input type="hidden" name="en_mbps_value" value="{{ $package_buy->en_mbps_value ?? 0 }}">
                            </tr>
                            <tr>
                                <td>Monthly Fee</td>
                                <td>{{ $package_buy->en_amount }} {{ $package_buy->en_amount_label }}</td>
                                <input type="hidden" name="en_amount" value="{{ $package_buy->en_amount ?? 0 }}">
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name*</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="name" required>
                        @error('name')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="form-group">
                        <label for="phone" class="form-label">Contact Number*</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Contact Number" autocomplete="phone" required>
                        @error('phone')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="email">
                        @error('email')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="form-group">
                        <div class="form-label">Register with</div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio-md">
                                <input type="radio" class="custom-control-input" name="nid_have" value="yes" checked>
                                <span class="custom-control-label">NID</span>
                            </label>
                            <label class="custom-control custom-radio-md">
                                <input type="radio" class="custom-control-input" name="nid_have" value="no">
                                <span class="custom-control-label">Birth Certificate / Passport</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <label for="photo">Photo* (Passport Size)</label>
                    <div class="card mb-2 text-center">
                        <p class="bg-warning-transparent">User Pic should be as below, if not please crop and rotate before uploading</p>
                        <img src="{{ asset('backendAssets') }}/static_images/user.jpeg" alt="Sample of User's Pic" style="max-height: 215px; margin: 0 auto;">
                    </div>
                    <input type="file" class="dropify" name="photo" accept=".jpg, .png, image/jpeg, image/png">
                    @error('photo')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3" id="nid-1">
                    <label for="nid_front">NID Front Side*</label>
                    <div class="card mb-2 text-center">
                        <p class="bg-warning-transparent">NID Front Side Pic should be as below, if not please crop and rotate before uploading</p>
                        <img src="{{ asset('backendAssets') }}/static_images/nid_front.jpg" alt="Sample of User's NID Front Side">
                    </div>
                    <input type="file" class="dropify" name="nid_front" accept=".jpg, .png, image/jpeg, image/png">
                    @error('nid_front')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3" id="nid-2">
                    <label for="nid_back">NID Back Side*</label>
                    <div class="card mb-2 text-center">
                        <p class="bg-warning-transparent">NID Back Side Pic should be as below, if not please crop and rotate before uploading</p>
                        <img src="{{ asset('backendAssets') }}/static_images/nid_back.jpg" alt="Sample of User's NID Back Side">
                    </div>
                    <input type="file" class="dropify" name="nid_back" accept=".jpg, .png, image/jpeg, image/png">
                    @error('nid_back')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-3" id="birth-1">
                    <label for="birth_certificate">Birth Certificate / Passport*</label>
                    <div class="card mb-2 d-flex align-items-center">
                        <p class="bg-warning-transparent">Birth Certificate / Passport Pic should be as below, if not please crop and rotate before uploading</p>
                        <img src="{{ asset('backendAssets') }}/static_images/Birth Certificate.webp" style="height: 240px; width: 200px;" alt="Sample of User's Birth Certificate / Passport">
                    </div>
                    <input type="file" class="dropify" name="birth_certificate" accept=".jpg, .png, image/jpeg, image/png">
                    @error('birth_certificate')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">NID / Birth Certificate / Passport Number*</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nid_number" id="nid_number" aria-describedby="basic-addon3">
                    </div>
                    @error('nid_number')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <div class="input-group">
                        <span class="input-group-text">Address*</span>
                        <textarea class="form-control no-resize" name="address" aria-label="Address"></textarea>
                    </div>
                    @error('address')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Remarks</span>
                        <textarea class="form-control no-resize" name="remarks" aria-label="Remarks (if any)"></textarea>
                    </div>
                    @error('remarks')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" name="agree" value="1" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to <a class="text-dark fw-bold" href="{{ route('terms_condition') }}" style="text-decoration: underline;"> terms and conditions (Click to see)</a>
                    </label>
                    <div class="invalid-feedback">

                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-xl-4 col-lg-5 col-md-6 col-12">
                    <div class="mb-3">
                        <label class="form-label"> Select Branch / Area*</label>
                        <select name="area_id" required class="form-control select2-show-search form-select" data-placeholder="Choose One">
                            <option label="Choose one"></option>
                            @foreach ($areas as $item)
                            <option value="{{ $item->id }}">{{ $item->en_area_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6 col-12">
                    <div class="mb-3">
                        <label for="marketing_person_name" class="form-label">Marketing Person Name (if any):</label>
                        <input type="text" name="marketing_person_name" class="form-control">
                    </div>
                </div>
            </div>

            <button class="btn btn-success" type="submit">Confirm Registration</button>
        </form>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Initially, hide birth certificate fields
        $('#birth-1').hide();

        // Show/hide fields based on radio button selection
        $('input[name="nid_have"]').change(function() {
            if ($(this).val() === 'yes') {
                $('#nid-1').show();
                $('#nid-2').show();
                $('#birth-1').hide();
            } else if ($(this).val() === 'no') {
                $('#nid-1').hide();
                $('#nid-2').hide();
                $('#birth-1').show();
            }
        });
    });
</script>
@endsection
