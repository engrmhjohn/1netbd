<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>OSCL - New Connection Registration Form</title>
      <!-- Font Kohinoor  -->
  <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/font_style.css">
</head>
<style type="text/css">
    body {
          font-family: "Roboto", sans-serif;
    }

    .m-0 {
        margin: 0px;
    }

    .p-0 {
        padding: 0px;
    }

    .pt-5 {
        padding-top: 5px;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .text-center {
        text-align: center !important;
    }

    .w-100 {
        width: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .w-85 {
        width: 85%;
    }

    .w-15 {
        width: 15%;
    }

    .logo img {
        max-width: 200px;
        max-height: 150px;
    }

    .gray-color {
        color: #5D5D5D;
    }

    .text-bold {
        font-weight: bold;
    }

    .border {
        border: 1px solid black;
    }

    table tr,
    th,
    td {
        border: 1px solid #d2d2d2;
        border-collapse: collapse;
        padding: 7px 8px;
    }

    table tr th {
        background: #F4F4F4;
        font-size: 15px;
    }

    table tr td {
        font-size: 13px;
    }

    table {
        border-collapse: collapse;
    }

    .box-text p {
        line-height: 10px;
    }

    .float-left {
        float: left;
    }

    .float-right {
        float: right;
    }

    .total-part {
        font-size: 16px;
        line-height: 12px;
    }

    .total-right p {
        padding-right: 20px;
    }
</style>

<body>
	<div class="logo text-center">
        {{-- <img src="{{ asset($image) }}" alt=""> --}}
    </div>
    <div class="head-title">
        <h1 class="text-center m-0 p-0">New Connection Form</h1>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td>
                    <div class="box-text">
                        <p class="m-0 pt-5 text-bold w-100">Registration Date : <span class="gray-color">{{ $userInfo->created_at->format('d F Y') }} </span></p>
                        <p class="m-0 pt-5 text-bold w-100">Package Category: <span class="gray-color">{{ $userInfo->category }} </span></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td>
                    <div class="box-text">
                        <p>Name : {{ $userInfo->name }}</p>
                        <p>Phone : {{ $userInfo->phone }}</p>
                        <p>Email : {{ $userInfo->email }}</p>
                        <p>NID Number : {{ $userInfo->nid_number }}</p>
                        <p>Address : {{ $userInfo->address }}</p>
                    </div>
                </td>
                <td>
                    <div class="box-text">
                        {{-- <img src="{{ asset($userInfo->photo) }}" alt="" style="height: auto; width: 130px; float: right; margin-top: -50px;"> --}}
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">NID Front Side</th>
                <th class="w-50">NID Back Side</th>
            </tr>
            <tr>
                <td>
                    <div class="box-text" style="margin-right: 10px;">
                        {{-- <img src="{{ asset($userInfo->nid_front) }}" alt="" style="height: 160px; width: 320px;"> --}}
                    </div>
                </td>
                <td>
                    <div class="box-text">
                        {{-- <img src="{{ asset($userInfo->nid_back) }}" alt="" style="height: 160px; width: 320px;"> --}}
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Package Name</th>
                <th class="w-50">Bandwidth</th>
            </tr>
            <tr align="center">
                <td> {{ $userInfo->en_package_name }} </td>
                <td> {{ $userInfo->en_mbps_value }} MBPS</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Monthly Bill</th>
                <th class="w-50">OTC</th>
                <th class="w-50">Advance Bill</th>
                <th class="w-50">Sub Total</th>
            </tr>
            <tr align="center">
                <td> {{ $userInfo->en_amount }} TK</td>
                <td> {{ $userInfo->en_otc_amount }} TK</td>
                <td> {{ $userInfo->en_advance_bill_amount }} TK</td>
                <td> {{ $userInfo->subtotal ?? 0}} TK</td>
            </tr>

            <tr>
                <td colspan="7">
                    <div class="total-part">
                        <div class="total-left w-85 float-left" align="right">
                            <p>Sub Total</p>
                            <p>Discount on Monthly Running Bill</p>
                            <p>Discount on OTC</p>
                            <p>Total Payable</p>
                        </div>
                        <div class="total-right w-15 float-left text-bold" align="right">
                            <p>{{ $userInfo->subtotal ?? 0}} TK</p>
                            <p>{{ $userInfo->en_discount_monthly_fee ?? 0}} TK</p>
                            <p>{{ $userInfo->en_discount_otc ?? 0}} TK</p>
                            <p>{{ $userInfo->formattedTotal }} TK</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="position: fixed; bottom: 0px;">
        <p style="line-height: 20px;"><strong>Office Address:</strong> {{ $address }}</p>
    </div>
    <br>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td style="font-size: 14px;">
                    <h3 class="text-center">Terms & Conditions</h3> {!! $tc->en_payment_mode !!}
                </td>
            </tr>
            <tr>
                <td style="font-size: 14px;"> {!! $tc->en_documentation !!} </td>
            </tr>
            <tr>
                <td style="font-size: 14px;"> {!! $tc->en_after_sales_service !!} </td>
            </tr>
            <tr>
                <td style="font-size: 14px;"> {!! $tc->en_client_responsibility !!} </td>
            </tr>
            <tr>
                <td style="font-size: 14px;"> {!! $tc->en_others !!} </td>
            </tr>
            <tr>
                <td style="font-size: 16px;"> <mark>*Terms & conditions approved by client, this is why doesn’t require any signature</mark> </td>
            </tr>
        </table>
    </div>

</html>
