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
                    <h2>Registration Successful</h2>
                    <strong class="text-warning">You'll get confirmation email</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <tbody>
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