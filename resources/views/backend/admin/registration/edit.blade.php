@extends('backend.master')
@section('title')
Admin :: Edit Online Registration
@endsection
@section('content')
@php
$subtotal = $registration->en_amount + $registration->en_otc_amount + $registration->en_advance_bill_amount;
$total = $subtotal - ($registration->en_discount_otc + $registration->en_discount_monthly_fee);
$formattedTotal = number_format($total, 0, '.', '');
@endphp

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-sm btn-success" href="{{ route('manage_buy_package') }}"> <i class="fa fa-mail-reply"></i> Back
                    to Manage Online Registration</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update_buy_package') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="admin_id" value="{{ $registration->admin_id }}">
                    <input type="hidden" name="buy_id" value="{{ $registration->id }}">
                    <div class="row justify-content-center">
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>{{ $registration->name }}'s Information</h2>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 mb-3">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full name" required value="{{ isset($registration->name) ? $registration->name : '' }}">
                            @error('name')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 mb-3">
                            <label for="phone">Contact Number*</label>
                            <input type="phone" class="form-control" name="phone" placeholder="Contact Number" required value="{{ isset($registration->phone) ? $registration->phone : '' }}">
                            @error('phone')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{ isset($registration->email) ? $registration->email : '' }}">
                            @error('email')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 mb-3">
                            <label for="username">User ID</label>
                            <input type="number" class="form-control" name="username" placeholder="Ex: 123" value="{{ isset($registration->username) ? $registration->username : '' }}">
                            @error('username')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-3 col-md-4 col-12 mb-3">
                            <label for="ppoe_password">PPOE Password</label>
                            <input type="ppoe_password" class="form-control" name="ppoe_password" placeholder="Password" value="{{ isset($registration->ppoe_password) ? $registration->ppoe_password : '' }}">
                            @error('ppoe_password')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            Connection Type
                        </div>
                        <div class="col-md-9 mt-3">
                            <div class="form-group">
                                <div class="radio inlineblock m-r-20">
                                    <input type="radio" name="connection_type" id="fiber_optics" class="with-gap" {{ isset($registration->connection_type) && $registration->connection_type == 1 ? 'checked' : '' }} value="1">
                                    <label for="fiber_optics">Fiber Optics</label>
                                </div>
                                <div class="radio inlineblock">
                                    <input type="radio" name="connection_type" id="utp" class="with-gap" {{ isset($registration->connection_type) && $registration->connection_type == 0 ? 'checked' : '' }} value="0">
                                    <label for="utp">UTP</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12">
                            <label for="photo">Photo</label>
                            <div class="card">
                                <div class="body">
                                    <img class="img-fluid" src="{{ asset($registration->photo) }}" alt="user picture">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <label for="photo">Choose Photo* (Passport Size)</label>
                            <div class="card">
                                <div class="body">
                                    <input type="file" name="photo" class="dropify" id="inputGroupFile02" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            @error('photo')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    @if($registration->nid_have == 'yes')
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="photo">NID Front Side</label>
                            <div class="card text-center">
                                <div class="body">
                                    <img class="img-fluid" src="{{ asset($registration->nid_front) }}" alt="NID Front Side">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="nid_front">Choose NID Front Side*</label>
                            <div class="card">
                                <div class="body">
                                    <input type="file" name="nid_front" class="dropify" id="inputGroupFile02" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            @error('nid_front')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="photo">NID Back Side</label>
                            <div class="card text-center">
                                <div class="body">
                                    <img class="img-fluid" src="{{ asset($registration->nid_back) }}" alt="NID Back Side">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="nid_front">Choose NID Back Side*</label>
                            <div class="card">
                                <div class="body">
                                    <input type="file" name="nid_back" class="dropify" id="inputGroupFile02" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            @error('nid_back')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="photo">Birth Certificate</label>
                            <div class="card text-center">
                                <div class="body">
                                    <img class="img-fluid" src="{{ asset($registration->birth_certificate) }}" alt="Birth Certificate">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="birth_certificate">Choose Birth Certificate*</label>
                            <div class="card">
                                <div class="body">
                                    <input type="file" name="birth_certificate" class="dropify" id="inputGroupFile02" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            @error('birth_certificate')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="nid_number">NID / Birth Certificate / Passport Number*</label>
                            <input type="phone" name="nid_number" class="form-control" id="nid_number" placeholder="NID Number" required value="{{ isset($registration->nid_number) ? $registration->nid_number : '' }}">
                            @error('nid_number')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <div class="input-group">
                                <span class="input-group-text">Address*</span>
                                <textarea class="form-control" name="address" aria-label="Address">{{ isset($registration->address) ? $registration->address : '' }}</textarea>
                            </div>
                            @error('address')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="input-group">
                                <span class="input-group-text">Remarks</span>
                                <textarea class="form-control" name="remarks" aria-label="Remarks (if any)">{{ isset($registration->remarks) ? $registration->remarks : '' }}</textarea>
                            </div>
                            @error('remarks')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="form-group">
                                <label>Select Branch*</label>
                                <select name="area_id" class="form-control select2-show-search form-select" data-placeholder="Choose Branch" required>
                                    <option value="" {{ empty($registration->area_id) ? 'selected' : 'Select a Branch' }}>Select a Branch</option>
                                    @foreach ($areas as $item)
                                    <option value="{{ $item->id }}" {{ !empty($registration->area_id) && $registration->area_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->en_area_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="marketing_person_name">Marketing Person</label>
                            <input type="marketing_person_name" name="marketing_person_name" class="form-control" id="marketing_person_name" value="{{ isset($registration->marketing_person_name) ? $registration->marketing_person_name : '' }}">
                            @error('marketing_person_name')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-12">
                            <h2>Package Information</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_package_name">Package Name</label>
                            <input type="text" class="form-control" name="en_package_name" id="en_package_name" required value="{{ isset($registration->en_package_name) ? $registration->en_package_name : '' }}">
                            @error('en_package_name')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_mbps_value">Bandwidth</label>
                            <input type="number" class="form-control" name="en_mbps_value" id="en_mbps_value" required value="{{ isset($registration->en_mbps_value) ? $registration->en_mbps_value : '' }}">
                            @error('en_mbps_value')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_amount">Monthly Bill</label>
                            <input type="number" class="form-control" name="en_amount" id="en_amount" required value="{{ isset($registration->en_amount) ? $registration->en_amount : '' }}">
                            @error('en_amount')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="real_ip">Real IP Bill</label>
                            <input type="number" class="form-control" name="real_ip" id="real_ip" placeholder="Amount in TK" value="{{ isset($registration->real_ip) ? $registration->real_ip : '' }}">
                            @error('real_ip')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_otc_amount">OTC</label>
                            <input type="number" class="form-control" name="en_otc_amount" id="en_otc_amount" required value="{{ isset($registration->en_otc_amount) ? $registration->en_otc_amount : '' }}">
                            @error('en_otc_amount')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="subtotal">Sub Total</label>
                            <input type="number" class="form-control" name="subtotal" id="subtotal" required readonly value="{{ isset($registration->subtotal) ? $registration->subtotal : '0' }}">
                            @error('subtotal')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_discount_monthly_fee">Discount on Monthly Bill</label>
                            <input type="number" class="form-control" name="en_discount_monthly_fee" id="en_discount_monthly_fee" required value="{{ isset($registration->en_discount_monthly_fee) ? $registration->en_discount_monthly_fee : '0' }}">
                            @error('en_discount_monthly_fee')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="en_advance_bill_amount">Advance Bill Amount</label>
                            <input type="number" class="form-control" name="en_advance_bill_amount" id="en_advance_bill_amount" value="{{ isset($registration->en_advance_bill_amount) ? $registration->en_advance_bill_amount : '0' }}">
                            @error('en_advance_bill_amount')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <label for="formattedTotal">Total Amount to be Paid</label>
                            <input type="number" class="form-control" name="formattedTotal" id="formattedTotal" required readonly value="{{ isset($registration->formattedTotal) ? $registration->formattedTotal : '' }}">
                            @error('formattedTotal')
                            <strong class="error_form">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-success mb-2" type="submit">Update Registration</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Function to calculate and update the total amount
    function updateTotal() {
        // Get the values of the input fields
        var monthlyBill = parseFloat(document.getElementById('en_amount').value) || 0;
        var otcAmount = parseFloat(document.getElementById('en_otc_amount').value) || 0;
        var advanceBillAmount = parseFloat(document.getElementById('en_advance_bill_amount').value) || 0;
        var discountMonthlyFee = parseFloat(document.getElementById('en_discount_monthly_fee').value) || 0;
        var real_ip_bill = parseFloat(document.getElementById('real_ip').value) || 0;

        // Calculate subtotal
        var subtotal = monthlyBill + real_ip_bill + otcAmount + advanceBillAmount;

        // Calculate formatted total
        var formattedTotal = subtotal - discountMonthlyFee;

        // Update the subtotal and formattedTotal fields
        document.getElementById('subtotal').value = subtotal;
        document.getElementById('formattedTotal').value = formattedTotal;
    }

    // Attach the updateTotal function to the onkeyup event of the relevant input fields
    document.getElementById('en_amount').onkeyup = updateTotal;
    document.getElementById('en_otc_amount').onkeyup = updateTotal;
    document.getElementById('en_advance_bill_amount').onkeyup = updateTotal;
    document.getElementById('en_discount_monthly_fee').onkeyup = updateTotal;
    document.getElementById('real_ip').onkeyup = updateTotal;

</script>
@endsection
