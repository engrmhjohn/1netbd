<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>One Net - New Connection Registration Form</title>
<style type="text/css">
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
    
    .w-33 {
        width: 33.33%;
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
        {{-- <img src="{{ asset($color_logo) }}" alt="" style="height: auto; max-width: 175px;"> --}}
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
                        <p><strong>Office Address:</strong> {{ $en_address }}</p> 
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr style="width: 100%;">
                <td style="height: 135px; width: 70%; font-size: 16px;">
                    <div class="box-text user_info">
                        <p>Name : {{ $userInfo->name }}</p>
                        <p>Phone : {{ $userInfo->phone }}</p>
                        <p>Email : {{ $userInfo->email }}</p>
                        <p>NID Number : {{ $userInfo->nid_number }}</p>
                        <p>Address : {{ $userInfo->address }}</p>
                    </div>
                </td>
                <td style="width: 30%">
                    <div class="box-text">
                     {{-- <img src="{{ asset($userInfo->photo) }}" alt="" style="height: 120px; width: 130px; margin-left: 300px;">  --}}
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
                           {{-- <img src="{{ asset($userInfo->nid_front) }}" alt="" style="height: 160px; width: 320px;">  --}}
                        </div>
                    </td>
                    <td>
                        <div class="box-text">
                            {{-- <img src="{{ asset($userInfo->nid_back) }}" alt="" style="height: 160px; width: 320px;">  --}}
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
            <tr>
                <td class="text-center"> {{ $userInfo->en_package_name }} </td>
                <td class="text-center"> {{ $userInfo->en_mbps_value }} MBPS</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-33">Monthly Bill</th>
                <th class="w-33">OTC</th>
                <th class="w-33">Advance Bill</th>
            </tr>
            <tr>
                <td class="text-center"> {{ $userInfo->en_amount }} TK</td>
                <td class="text-center"> {{ $userInfo->en_otc_amount }} TK</td>
                <td class="text-center"> {{ $userInfo->en_advance_bill_amount }} TK</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr class="w-100">
                <td class="w-85" style="text-align: right;"> 
                    <p>Sub Total</p>
                    <p>Discount on Monthly Running Bill</p>
                    <p>Discount on OTC</p>
                    <p>Total Payable</p>
                </td>
                <td class="w-15" style="text-align: right;"> 
                    <p>{{ $userInfo->subtotal ?? 0}} TK</p>
                    <p>{{ $userInfo->en_discount_monthly_fee ?? 0}} TK</p>
                    <p>{{ $userInfo->en_discount_otc ?? 0}} TK</p>
                    <p>{{ $userInfo->formattedTotal }} TK</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td style="font-size: 13px;">
                    <h3 class="text-center">Terms & Conditions</h3> {!! $tc->en_payment_mode !!}
                </td>
            </tr>
            <tr>
                <td style="font-size: 13px;"> {!! $tc->en_documentation !!} </td>
            </tr>
            <tr>
                <td style="font-size: 13px;"> {!! $tc->en_after_sales_service !!} </td>
            </tr>
            <tr>
                <td style="font-size: 13px;"> {!! $tc->en_client_responsibility !!} </td>
            </tr>
            <tr>
                <td style="font-size: 13px;"> {!! $tc->en_others !!} </td>
            </tr>
            <tr>
                <td style="font-size: 16px;"> <mark>*Terms & conditions approved by client, this is why doesn't require any signature</mark> </td>
            </tr>
        </table>
    </div>

</html>