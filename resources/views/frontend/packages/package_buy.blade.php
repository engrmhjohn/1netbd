@extends('frontend.master')
@section('title')
Buy Package :: One Net
@endsection
@section('content')
<section class="py-5">
        @if(!session('otp_verified'))
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-xl-4 col-lg-5 col-md-6 col-12">
                <div id="otp-section" class="otp-card p-4 text-center">
                    <h4 class="text-success mb-3">
                        Verify Customer Phone Number <br>
                        <span class="text-danger" style="font-size: 14px">Do not use the marketing person’s number</span>
                    </h4>
                    <input type="text"
                        id="verify_phone"
                        class="form-control mb-3"
                        placeholder="Format: 01XXXXXXXXX">
                    <button class="otp-button" id="sendOtpBtn" type="button" style="--clr: #00ad54;"> <span class="button-decor"></span> <div class="button-content"> <div class="button__icon"> <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" width="24"> <circle opacity="0.5" cx="25" cy="25" r="23" fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle> <mask id="icon-payments-cat_svg__a" fill="#fff"> <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z"> </path> </mask> <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z" fill="#fff"></path> <path d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z" fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path> <defs> <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101" x1="25" y1="2" x2="25" y2="48" gradientUnits="userSpaceOnUse"> <stop stop-color="#fff" stop-opacity="0.71"></stop> <stop offset="1" stop-color="#fff" stop-opacity="0"></stop> </linearGradient> </defs> </svg> </div> <span class="button__text">Send OTP</span> </div> </button>
                    <button type="button"
                            id="resendOtpBtn"
                            class="btn btn-link text-secondary p-0"
                            style="display:none">
                        Resend OTP (<span id="resendTimer">60</span>s)
                    </button>
                    <button type="button"
                            id="changePhoneBtn"
                            class="btn btn-sm btn-outline-danger mt-3"
                            style="display:none">
                        Change Phone Number
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
     @if(session('otp_verified'))
    <div class="container">
        <form action="{{ route('save_buy_package') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if (Auth::check())
            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
            @endif
            <div class="row justify-content-center">
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
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name" autocomplete="name" required>
                        @error('name')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="form-group">
                        <label for="phone" class="form-label">Verified Number*</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ session('otp_phone') }}" placeholder="Contact Number" autocomplete="phone" required readonly>
                        @error('phone')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-3">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">
                        @error('email')
                        <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="form-group">
                        <div class="form-label">Register with</div>
                        <div class="custom-controls-stacked" style="display: flex; gap: 20px;">
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
                        <input type="text" class="form-control" name="nid_number" id="nid_number" value="{{ old('nid_number') }}" aria-describedby="basic-addon3">
                    </div>
                    @error('nid_number')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <div class="input-group">
                        <span class="input-group-text">Address*</span>
                        <textarea class="form-control no-resize" name="address" aria-label="Address">{{ old('address') }}</textarea>
                    </div>
                    @error('address')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <div class="input-group">
                        <span class="input-group-text">Remarks</span>
                        <textarea class="form-control no-resize" name="remarks" aria-label="Remarks (if any)">{{ old('remarks') }}</textarea>
                    </div>
                    @error('remarks')
                    <strong class="error_form">{{ $message }}</strong>
                    @enderror
                </div>
            </div>


            <div class="form-group" style="display: flex; gap: 20px;">
                <div class="form-label">Connection Type</div>
                <div class="custom-controls-stacked" style="display: flex; gap: 20px;">
                    <label class="custom-control custom-radio-md">
                        <input type="radio" class="custom-control-input" name="connection_type" value="1" checked>
                        <span class="custom-control-label">Fiber Optics</span>
                    </label>
                    <label class="custom-control custom-radio-md">
                        <input type="radio" class="custom-control-input" name="connection_type" value="0">
                        <span class="custom-control-label">UTP</span>
                    </label>
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
                        <input type="text" name="marketing_person_name" value="{{ old('marketing_person_name') }}" class="form-control">
                    </div>
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

            <button class="btn btn-success" type="submit">Confirm Registration</button>
        </form>
    </div>
    @else
    @endif
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
/* =====================================================
   NORMAL FORM TOGGLE (NID / BIRTH)
===================================================== */
$(document).ready(function () {

    $('#birth-1').hide();

    $('input[name="nid_have"]').change(function () {
        if ($(this).val() === 'yes') {
            $('#nid-1, #nid-2').show();
            $('#birth-1').hide();
        } else {
            $('#nid-1, #nid-2').hide();
            $('#birth-1').show();
        }
    });

});

/* =====================================================
   OTP VARIABLES
===================================================== */
let resendSeconds = 60;
let resendInterval = null;

/* =====================================================
   RESEND COUNTDOWN (OUTSIDE UI)
===================================================== */
function startResendCountdown() {
    resendSeconds = 60;
    $('#resendOtpBtn').show().prop('disabled', true);
    $('#changePhoneBtn').show();

    resendInterval = setInterval(() => {
        resendSeconds--;
        $('#resendTimer').text(resendSeconds);

        if (resendSeconds <= 0) {
            clearInterval(resendInterval);
            $('#resendOtpBtn').prop('disabled', false).text('Resend OTP');
        }
    }, 1000);
}

/* =====================================================
   SEND OTP
===================================================== */
$('#sendOtpBtn').on('click', function () {

    let phone = $('#verify_phone').val().trim();

    if (phone === '') {
        Swal.fire('Phone Required', 'Please enter phone number', 'error');
        return;
    }

    $.post("{{ route('send_otp') }}", {
        phone: phone,
        _token: "{{ csrf_token() }}"
    }, function (res) {

        if (!res.status) {
            Swal.fire('Error', res.message, 'error');
            return;
        }

        Swal.fire('OTP Sent', 'Please check your phone', 'info')
            .then(() => {
                startResendCountdown();
                openOtpPopup();   // ✅ open OTP input
            });
    });
});

/* =====================================================
   OTP POPUP (VERIFY ONLY)
===================================================== */
function openOtpPopup() {

    Swal.fire({
        title: 'Enter OTP',
        input: 'text',
        inputPlaceholder: '6 digit OTP',
        confirmButtonText: 'Verify',
        showCancelButton: true,
        cancelButtonText: 'Close',
        allowOutsideClick: false,
        allowEscapeKey: true,

        preConfirm: (otp) => {

            if (!otp) {
                Swal.showValidationMessage('OTP is required');
                return false;
            }

            if (!/^\d{6}$/.test(otp)) {
                Swal.showValidationMessage('OTP must be 6 digits');
                return false;
            }

            // 🔒 VERIFY OTP (SYNC VIA PROMISE)
            return $.post("{{ route('verify_otp') }}", {
                otp: otp,
                _token: "{{ csrf_token() }}"
            }).then((verify) => {

                if (!verify.status) {
                    // ❌ WRONG OTP → keep popup open
                    Swal.showValidationMessage(verify.message);
                    return false;
                }

                return verify; // ✅ success
            }).catch(() => {
                Swal.showValidationMessage('Server error, try again');
                return false;
            });
        }

    }).then((result) => {

        // Close pressed → do nothing (user can resend / change phone)
        if (!result.isConfirmed) {
            return;
        }

        // ✅ SUCCESS
        Swal.fire('Verified', 'Mobile number verified successfully', 'success')
            .then(() => {
                location.reload(); // SOLUTION–A
            });
    });
}

/* =====================================================
   RESEND OTP (OUTSIDE BUTTON)
===================================================== */
$('#resendOtpBtn').on('click', function () {
    $('#sendOtpBtn').trigger('click');
});

/* =====================================================
   CHANGE PHONE NUMBER
===================================================== */
$('#changePhoneBtn').on('click', function () {

    Swal.fire({
        title: 'Change phone number?',
        text: 'OTP process will be reset',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, change'
    }).then((result) => {

        if (result.isConfirmed) {
            $.post("{{ route('reset_otp') }}", {
                _token: "{{ csrf_token() }}"
            }, function () {
                location.reload();
            });
        }
    });
});
</script>
@endsection
