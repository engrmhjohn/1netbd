@extends('frontend.master')
@section('title')
Payment Process || One Net
@endsection
@section('content')

<section class="payment_process_section wow fadeInUp" data-wow-delay="0.1s">
    <div class="tab_wrapper">
        <input class="radio" id="one" name="group" type="radio" checked>
        <input class="radio" id="two" name="group" type="radio">
        <input class="radio" id="three" name="group" type="radio">

        <div class="tabs text-center">
            <label class="tab" id="one-tab" for="one" style="color: #dc136c;">{{ $category[0]->en_title }}</label>
            <label class="tab" id="two-tab" for="two" style="color: #8a288f;">{{ $category[1]->en_title }}</label>
            <label class="tab" id="three-tab" for="three" style="color: #d0392c">{{ $category[2]->en_title }}</label>
        </div>

        <div class="panels">
            <div class="panel" id="one-panel">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="key_point">
                            <h5> <i class="fa fa-bullhorn"></i> {{ $bkash_payment ? $bkash_payment->en_banner_text : '' }} </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $bkash_payment ? $bkash_payment->en_heading_one : '' }} </h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image1">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_one ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image1" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_one : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_one ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_one : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_one : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_two : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image2">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_two ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image2" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_two : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_two ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_two : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_two : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_three : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image3">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_three ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image3" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_three : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_three ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_three : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_three : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $bkash_payment ? $bkash_payment->en_heading_four : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image4">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_four ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image4" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_four : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_four ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_four : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_four : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_five : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image5">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_five ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image5" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_five : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_five ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_five : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <p> {{ $bkash_payment ? $bkash_payment->en_description_five : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_six : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image6">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_six ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image6" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_six : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_six ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_six : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_six : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_seven : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_imageb7">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_seven ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_imageb7" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_seven : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_seven ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_seven : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_seven : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $bkash_payment ? $bkash_payment->en_heading_eight : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_imageb8">
                                    <img class="main_img img-fluid" src="{{ asset($bkash_payment->image_eight ?? '') }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_imageb8" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $bkash_payment ? $bkash_payment->en_heading_eight : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ asset($bkash_payment->image_eight ?? '') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $bkash_payment ? $bkash_payment->en_description_eight : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $bkash_payment ? $bkash_payment->en_description_eight : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel" id="two-panel">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="key_point">
                            <h5> <i class="fa fa-bullhorn"></i> {{ $rocket_payment ? $rocket_payment->en_banner_text : '' }} </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $rocket_payment ? $rocket_payment->en_heading_one : '' }} </h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image7">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_one) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image7" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_one : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $rocket_payment ? asset($rocket_payment->image_one) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_one : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $rocket_payment ? $rocket_payment->en_description_one : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $rocket_payment ? $rocket_payment->en_heading_two : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image8">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_two) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image8" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_two : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $rocket_payment ? asset($rocket_payment->image_two) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_two : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $rocket_payment ? $rocket_payment->en_description_two : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $rocket_payment ? $rocket_payment->en_heading_three : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image9">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_three) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image9" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_three : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $rocket_payment ? asset($rocket_payment->image_three) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_three : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $rocket_payment ? $rocket_payment->en_description_three : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $rocket_payment ? $rocket_payment->en_heading_four : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image10">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_four) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image10" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_four : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $rocket_payment ? asset($rocket_payment->image_four) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_four : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $rocket_payment ? $rocket_payment->en_description_four : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $rocket_payment ? $rocket_payment->en_heading_five : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image11">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_five) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image11" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_five : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $rocket_payment ? asset($rocket_payment->image_five) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_five : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <p> {{ $rocket_payment ? $rocket_payment->en_description_five : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $rocket_payment ? $rocket_payment->en_heading_six : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image12">
                                    <img class="main_img img-fluid" src="{{ $rocket_payment ? asset($rocket_payment->image_six) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image12" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $rocket_payment ? $rocket_payment->en_heading_six : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                <img src="{{ $rocket_payment ? asset($rocket_payment->image_six) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $rocket_payment ? $rocket_payment->en_description_six : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $rocket_payment ? $rocket_payment->en_description_six : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel" id="three-panel">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="key_point">
                            <h5> <i class="fa fa-bullhorn"></i> {{ $nagad_payment ? $nagad_payment->en_banner_text : '' }} </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $nagad_payment ? $nagad_payment->en_heading_one : '' }} </h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image13">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_one) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image13" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_one : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $nagad_payment ? asset($nagad_payment->image_one) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_one : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $nagad_payment ? $nagad_payment->en_description_one : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $nagad_payment ? $nagad_payment->en_heading_two : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image14">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_two) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image14" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_two : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $nagad_payment ? asset($nagad_payment->image_two) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_two : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $nagad_payment ? $nagad_payment->en_description_two : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $nagad_payment ? $nagad_payment->en_heading_three : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image15">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_three) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image15" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_three : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $nagad_payment ? asset($nagad_payment->image_three) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_three : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $nagad_payment ? $nagad_payment->en_description_three : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6> {{ $nagad_payment ? $nagad_payment->en_heading_four : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image16">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_four) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image16" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_four : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $nagad_payment ? asset($nagad_payment->image_four) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_four : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $nagad_payment ? $nagad_payment->en_description_four : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $nagad_payment ? $nagad_payment->en_heading_five : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image17">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_five) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image17" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_five : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                    <img src="{{ $nagad_payment ? asset($nagad_payment->image_five) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_five : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                            <p> {{ $nagad_payment ? $nagad_payment->en_description_five : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12 mb-2">
                        <div class="card text-center">
                            <div class="card-header">
                                <h6>{{ $nagad_payment ? $nagad_payment->en_heading_six : '' }}</h6>
                            </div>
                            <div class="card-body">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#show_big_image18">
                                    <img class="main_img img-fluid" src="{{ $nagad_payment ? asset($nagad_payment->image_six) : '' }}" alt="">
                                </a>
                                <div class="modal fade" id="show_big_image18" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    {{ $nagad_payment ? $nagad_payment->en_heading_six : '' }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="show_big_image">
                                                <img src="{{ $nagad_payment ? asset($nagad_payment->image_six) : '' }}" alt="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <p> {{ $nagad_payment ? $nagad_payment->en_description_six : '' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>{{ $nagad_payment ? $nagad_payment->en_description_six : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection