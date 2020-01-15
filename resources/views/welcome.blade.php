@extends('layouts.main', ['title' => __("label.home"), 'header' => __("label.home")])

@push('after-styles')

@endpush

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate">
                        <span class="subheading">Welcome to Frovian Analystics</span>
                        <h1 class="mb-4">Centre of excellence for management consulting practices</h1>
                        <!--     <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate">
                        <span class="subheading">Todays Talent, Tommorow Success</span>
                        <h1 class="mb-4">We transform your business to delivers much more than strategy</h1>
                        <!--     <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <!--   <div class="col-md-5 order-md-last wrap-about align-items-stretch">-->
                <!--    <div class="wrap-about-border ftco-animate">-->
                <!--     <div class="img" style="background-image: url(images/about.jpg); border"></div>-->
                <!--     <div class="text">-->
                <!--      <h3>Read Our Success Story for Inspiration</h3>-->
                <!--      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>-->
                <!--      <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>-->
                <!--      <p><a href="#" class="btn btn-primary py-3 px-4">Contact us</a></p>-->
                <!--     </div>-->
                <!--    </div>-->
                <!--   </div>-->
                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Our Values</h2>
                    <p>We have exceptional team of leading experts in numerous key disciplines all sharing a passion for consultancy and a commitment to integrity and independence and We transform your business to delivers much more than strategy for Getting the maximum performance out of your business</p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services  text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
                                <div class="text media-body">
                                    <h3>FAIRNESS AND INTEGRITY</h3>
                                    <p>A tradition of ethical and honest business conduct is the cornerstone of our business philosophy, and the foundation of our entire organization. The partnership with our clients on equal terms is very important – every time we work together, fairness and integrity are our top priorities. For this reason, we look back on long-standing customer relationships and have enjoyed continuous growth</p>
                                </div>
                            </div>
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>INDEPENDENT THINKING AND CONFIDENT IMPLEMENTATION</h3>
                                    <p>Jointly with the client, our experienced consultants develop strategies optimally aligned to requirements, and support efficient implementation. This approach ensures our clients an individual approach to their solution with added value. This idea of increasing value drives us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                                <div class="text media-body">
                                    <h3>INNOVATION</h3>
                                    <p>A tradition of ethical and honest business conduct is the cornerstone of our business 	philosophy, and the foundation of our entire organization.</p>
                                </div>
                            </div>
                            <!--      <div class="services text-center">-->
                            <!--       <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>-->
                            <!--       <div class="text media-body">-->
                            <!--        <h3>Capital Market</h3>-->
                            <!--        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>-->
                            <!--       </div>-->
                            <!--      </div>-->
                        </div>
                    </div>
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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Best Services</h2>
                    <p></p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                        <div class="text media-body">
                            <h3>Customer Strategy & Marketing	</h3>
                            <p>You know your customers are the source of real growth. But what do they really care about? How do you reach them? What happens when you put them first? We combine in-depth insights with practical expertise in operations and economics to help you build a customer-focused—and growth-oriented—organization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
                        <div class="text media-body">
                            <h3>Operations</h3>
                            <p>How much better, faster or smarter could you do what you do? 
                                Reinvent your operations to uncover a new competitive edge. Frovian helps you transform your operations by taking a holistic view that connects operations to strategy, transcends siloes, and focuses on the opportunities that will create the greatest value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
                        <div class="text media-body">
                            <h3>Sustainability & Corporate Responsibility</h3>
                            <p>The normal rules of business don’t stop when it comes to sustainability and corporate responsibility. Frovian helps both private and public-sector companies embed those principles in the core of their strategy, operations and culture to make sustainability a source of ongoing and increasing value.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
                        <div class="text media-body">
                            <h3>RISK MANAGEMENT ADVISORY</h3>
                            <p>At Frovian, we go beyond the traditional likelihood-impact analysis made so (in)famous by COSO.  We are experienced in not only assessing your operational and credit risks.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center noborder-bottom ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
                        <div class="text media-body">
                            <h3>Full Potential Transformations </h3>
                            <p>If your company is falling short of its full potential, we can guide you on a cross-functional effort to change the financial, operational and strategic trajectory of your business and produce game-changing results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center noborder-bottom ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                        <div class="text media-body">
                            <h3>Analystics Consulting</h3>
                            <p>Analytics is the discovery, interpretation, and communication of meaningful patterns in data and applying those patterns towards effective decision making. In other words, analytics can be understood as the connective tissue between data and effective decision making within an organization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-3 mb-md-0">You Always Get the Best Guidance</h2>
                </div>
                <div class="col-lg-3 col-md-4 ftco-animate">
                    <!--    <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>-->
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Recent Projects</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    <p></p>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-2.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-1.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-3.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-4.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-5.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-6.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-7.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/project-8.jpg);">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                            <span>Web Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <h2 class="mb-4">Request A Quote</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <form action="#" class="appointment-form ftco-animate">
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Guidance</option>
                                                <option value="">Finance</option>
                                                <option value="">Business</option>
                                                <option value="">Auto Loan</option>
                                                <option value="">Real Estate</option>
                                                <option value="">Other Services</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-scripts')

@endpush
