@extends('frontend.master')
@section('title')
Packages :: One Net
@endsection
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white" style="display: flex; justify-content: center; flex-direction: column;">
                    @if(session('emailStatus') === 'sent')
                        <div class="alert alert-success text-white">
                            Registration successful! Package details have been emailed to you. N:B: Dont't forget to check spam folder.
                        </div>
                    @elseif(session('emailStatus') === 'failed')
                        <div class="alert alert-warning">
                            Registration successful, but email could not be sent.
                        </div>
                    @else
                        <div class="alert alert-info">
                            Registration successful.
                        </div>
                    @endif

                    <hr>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Terms & Conditions You Agreed To. Click to View
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @if($tc)
                                {!! $tc->en_payment_mode !!} <br>
                                {!! $tc->en_documentation !!} <br>
                                {!! $tc->en_after_sales_service !!} <br>
                                {!! $tc->en_client_responsibility !!} <br>
                                {!! $tc->en_others !!} <br>
                                {!! $tc->en_contact_termination !!} <br>
                                @else
                                <strong>Terms & Conditions not available.</strong>
                                @endif
                            </div>
                        </div>
                    </div>
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
                                <td>NID / Birth Certificate / Passport Number</td>
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
                            @if($userInfo->nid_have == 'yes')
                            <tr>
                                <td>NID Front Side</td>
                                <td> <img src="{{asset($userInfo->nid_front)}}" alt="" style="max-width: 300px"> </td>
                            </tr>
                            <tr>
                                <td>NID Back Side</td>
                                <td> <img src="{{asset($userInfo->nid_back)}}" alt="" style="max-width: 300px"> </td>
                            </tr>
                            @else
                            <tr>
                                <td>Birth Certificate</td>
                                <td> <img src="{{asset($userInfo->birth_certificate)}}" alt="" style="max-width: 300px"> </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection