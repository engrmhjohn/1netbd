@extends('frontend.master')
@section('title')
    Buy Package :: One Net
@endsection
@section('content')
    @php
        $formattedTotal = $package_buy->en_amount + $package_buy->en_otc_amount;
    @endphp

    <section class="py-5">
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
                                    <input type="hidden" name="en_package_name"
                                        value="{{ $package_buy->en_package_name ?? 0 }}">
                                </tr>
                                <tr>
                                    <td>Bandwidth</td>
                                    <td>{{ $package_buy->en_mbps_value }} MBPS</td>
                                    <input type="hidden" name="en_mbps_value"
                                        value="{{ $package_buy->en_mbps_value ?? 0 }}">
                                </tr>
                                <tr>
                                    <td>Monthly Fee</td>
                                    <td>{{ $package_buy->en_amount }} {{ $package_buy->en_amount_label }}</td>
                                    <input type="hidden" name="en_amount" value="{{ $package_buy->en_amount ?? 0 }}">
                                </tr>
                                <tr>
                                    <td>OTC Charge</td>
                                    <td>{{ $package_buy->en_otc_amount ?? 0 }} {{ $package_buy->en_amount_label }}</td>
                                    <input type="hidden" name="en_otc_amount"
                                        value="{{ $package_buy->en_otc_amount ?? 0 }}">
                                </tr>
                                <tr>
                                    <td class="bg-success text-white fw-bold">Total Amount to Pay</td>
                                    <td class="bg-success text-white fw-bold">{{ $formattedTotal }}
                                        {{ $package_buy->en_amount_label }}</td>
                                    <input type="hidden" name="formattedTotal" value="{{ $formattedTotal }}">
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name"
                                autocomplete="name" required>
                            @error('name')
                                <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="phone" class="form-label">Contact Number*</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Contact Number" autocomplete="phone" required>
                            @error('phone')
                                <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <div class="form-group">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                autocomplete="email" required>
                            @error('email')
                                <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <label for="photo">Photo* (Passport Size)</label>
                        <input type="file" class="dropify" name="photo" accept=".jpg, .png, image/jpeg, image/png">
                        @error('photo')
                            <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <label for="nid_front">NID Front Side*</label>
                        <input type="file" class="dropify" name="nid_front" accept=".jpg, .png, image/jpeg, image/png">
                        @error('nid_front')
                            <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mb-3">
                        <label for="nid_back">NID Back Side*</label>
                        <input type="file" class="dropify" name="nid_back" accept=".jpg, .png, image/jpeg, image/png">
                        @error('nid_back')
                            <strong class="error_form">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="nid_number">NID Number</span>
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
                        <input class="form-check-input is-invalid" type="checkbox" name="agree" value="1"
                            id="invalidCheck3" required>
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to <a class="text-dark fw-bold" href="{{ route('terms_condition') }}">terms and
                                conditions</a>
                        </label>
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Confirm Registration</button>
            </form>
        </div>
    </section>
@endsection
