@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])

@push('after-styles')

@endpush

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Law Training</h2>
                    <p>Frovian is a company formed by persons who are also academicians in various higher learning institutions. We have person with varsity experience in conducting training and seminars in various areas including but not limited to business law, Land Law, Regulatory Law and Compliance, Company Law and Management, Tax Law and Compliance, Labour Law and Industrial Relations, Family Law, Private International Law and International Business, Sale of Goods of Goods and Carriage, Intellectual Property Right, Probate and Administration of Estates,</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-0">You Always Get the Best Guidance</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="wrapper">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="705">0</strong>
                                    <span>Projects Completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="809">0</strong>
                                    <span>Satisfied Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="335">0</strong>
                                    <span>Awwards Received</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="35">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-scripts')

@endpush
