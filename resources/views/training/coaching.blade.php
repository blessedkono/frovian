@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])

@push('after-styles')

@endpush

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Business Coaching Training</h2>
                    <p>This training provides a brief explanation to guide a person interested with business skills coaching to perform better in business, also it strengthen understanding capacity of consultants and upcoming consultants</p>
                    <p>Skill is an ability and capacity acquired through deliberate, systematic, and sustained effort to smoothly and adoptively carryout complex activities or job functions involving ideas (cognitive skills), things (technical skills) and /or people ((interpersonal skills). Hard Skills are skills gained through education, training programs, certifications, and on-the-job training.</p>
                    <p>Outstanding skills, Customer focus skills, Communication Skills, Stress Management Skills, Team-working skills, Consulting skills, Public Speaking skills, Business or professional writing Skills, Leadership Skills, Strategic Planning Skills, Risk Management, Emotional intelligence just to mention but a few.</p>
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
