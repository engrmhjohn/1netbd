@extends('frontend.master')
@section('title')
Packages :: One Sky Communications Limited
@endsection
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white" style="display: flex; justify-content: center; flex-direction: column;">
                    <h4>Registration Successful</h4>
                    <small>You'll get confirmation email</small>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Category</td>
                                <td> {{ $userInfo->category }}</td>
                            </tr>
                            <tr>
                                <td>Package Name</td>
                                <td> {{ $userInfo->en_package_name }}</td>
                            </tr>
                            <tr>
                                <td>Bandwith</td>
                                <td>{{ $userInfo->en_mbps_value }} MBPS</td>
                            </tr>
                            <tr>
                                <td>Monthly Fee</td>
                                <td>{{ $userInfo->en_amount }} TK</td>
                            </tr>
                            <tr>
                                @if($userInfo->category==='SME')
                                <td> <mark>OTC Charge will be added after negotiation</mark>
                                </td>
                                @else
                                <td>OTC Charge</td>
                                @endif
                                <td>{{ $userInfo->en_otc_amount }} TK</td>
                            </tr>
                            <tr>
                                <td class="bg-info text-white fw-bold">Total Amount</td>
                                <td class="bg-info text-white fw-bold">{{$userInfo->formattedTotal}} TK</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $userInfo->name }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $userInfo->phone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $userInfo->email }}</td>
                            </tr>
                            <tr>
                                <td>NID Number</td>
                                <td>{{ $userInfo->nid_number }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $userInfo->address }}</td>
                            </tr>
                            <tr>
                                <td>Remarks</td>
                                <td>{{ $userInfo->remarks }}</td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td> <img src="{{asset($userInfo->photo)}}" alt="" style="max-height: 150px"> </td>
                            </tr>
                            <tr>
                                <td>NID Front Side</td>
                                <td> <img src="{{asset($userInfo->nid_front)}}" alt="" style="max-width: 300px"> </td>
                            </tr>
                            <tr>
                                <td>NID Back Side</td>
                                <td> <img src="{{asset($userInfo->nid_back)}}" alt="" style="max-width: 300px"> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection