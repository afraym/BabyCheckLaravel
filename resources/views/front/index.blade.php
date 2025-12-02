@extends('layouts.front')

@section('content')
   <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 gsap-exclude-mobile" data-gsap="mobile-exclude">

    <section class="pt-3 pb-4" id="count-stats">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto py-3">
                    <div class="row">
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state1" countTo="99">0</span>%</h1>
                                <h5 class="mt-3">Clinical Accuracy</h5>
                                <p class="text-sm font-weight-normal">Over 99% accurate when used as directed — fast,
                                    reliable results for early detection of pregnancy.</p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4 position-relative">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary"><span id="state2" countTo="3">60</span> min</h1>
                                <h5 class="mt-3">Time to Result</h5>
                                <p class="text-sm font-weight-normal">Fast, clear results in about 3 minutes — highly
                                    sensitive for early detection when used as directed.</p>
                            </div>
                            <hr class="vertical dark">
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 text-center">
                                <h1 class="text-gradient text-primary" id="state3" countTo="10000">0</h1>
                                <h5 class="mt-3">Customers</h5>
                                <p class="text-sm font-weight-normal">10,000+ satisfied customers worldwide · &gt;99%
                                    clinical accuracy when used as directed · Fast, one-step test with clear results in
                                    ~3 minutes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="my-5 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4 gsap-exclude" data-gsap="exclude">
                    <div class="rotating-card-container">
                        <div
                            class="card card-rotate card-background card-background-mask-primary shadow-primary mt-md-0 mt-5">
                            <div class="front front-background"
                                style="background-image: url(assets/img/02.jpg); background-size: cover;">
                                <div class="card-body py-7 text-center">
                                    <i class="material-icons text-white text-4xl my-3">touch_app</i>
                                    <h3 class="text-white">Baby Check</h3>
                                    <p class="text-white opacity-8">BabyCheck is a fast, highly sensitive at‑home
                                        pregnancy test that delivers clear, easy‑to‑read results in about 3 minutes.
                                        Designed for early detection with &gt;99% clinical accuracy when used as
                                        directed.</p>
                                </div>
                            </div>
                            <div class="back back-background"
                                style="background-image: url(assets/img/01.jpg); background-size: cover;">
                                <div class="card-body pt-7 text-center">
                                    <h3 class="text-white">BabyCheck — Fast, Early Detection</h3>
                                    <p class="text-white opacity-8">A highly sensitive at-home pregnancy test that
                                        delivers a clear, easy-to-read result in about 3 minutes. Designed for early
                                        detection with &gt;99% clinical accuracy when used as directed.</p>
                                    <ul class="text-white opacity-8 text-sm"
                                        style="list-style:none;padding-left:0;margin-top:0.5rem;">
                                    </ul>
                                    <a href="/how-it-works" target="_blank"
                                        class="btn btn-white btn-sm w-50 mx-auto mt-3">Learn how it works</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ms-auto">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">pregnant_woman</i>
                                <h5 class="font-weight-bolder mt-3">BabyCheck Pregnancy Test</h5>
                                <p class="pe-5">At‑home pregnancy testing that's fast, discreet, and easy to use.
                                    Readable in ~3 minutes and highly sensitive for early detection when used as
                                    directed.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">pregnant_woman</i>
                                <h5 class="font-weight-bolder mt-3">Fast, Sensitive & Easy</h5>
                                <p class="pe-3">BabyCheck delivers a clear result in ~3 minutes. Highly sensitive to low
                                    hCG for early detection and built for a simple, single‑step at‑home test.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start mt-5">
                        <div class="col-md-6 mt-3 promo-card">
                            <i class="material-icons text-gradient text-primary text-3xl">medical_services</i>
                            <h5 class="font-weight-bolder mt-3">Fast & Accurate Results</h5>
                            <p class="pe-5">Get a clear BabyCheck result in ~3 minutes. Highly sensitive to low hCG for
                                early detection and >99% accuracy when used as directed.</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="info">
                                <i class="material-icons text-gradient text-primary text-3xl">check_circle</i>
                                <h5 class="font-weight-bolder mt-3">Fast, Sensitive Results</h5>
                                <p class="pe-3">Clear result in ~3 minutes. Highly sensitive to low hCG for early
                                    detection and >99% accuracy when used as directed — simple one‑step at‑home testing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- -------- START Content Presentation Docs ------- -->
    <div class="container mt-sm-5">
        <div class="page-header py-6 py-md-5 my-sm-3 mb-3 border-radius-xl promo-card animate-on-scroll"
            data-delay="0.12" style="background-image: url('/assets/img/04.jpg');" loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ms-lg-5">
                        <h4 class="text-white">Designed for confidence</h4>
                        <h1 class="text-white">BabyCheck Pregnancy Test</h1>
                        <p class="lead text-white opacity-8">A fast, sensitive at‑home pregnancy test that delivers a
                            clear, easy-to-read result in about 3 minutes. Built for early detection with a simple
                            one‑step process you can trust.</p>
                        <a href="/how-it-works" class="text-white icon-move-right">
                            Learn how it works
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info-horizontal bg-gradient-primary border-radius-xl d-block d-md-flex p-4 promo-card animate-on-scroll"
                    data-delay="0.12">
                    <i class="material-icons text-white text-3xl">pregnant_woman</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5 class="text-white">BabyCheck Pregnancy Test</h5>
                        <p class="text-white">Fast, sensitive at‑home pregnancy test — clear, easy-to-read results in ~3
                            minutes. Designed for early detection with >99% clinical accuracy when used as directed.</p>
                        <a href="/how-it-works" class="text-white icon-move-right">
                            Learn how it works
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 h-100promo-card animate-on-scroll"
                    data-delay="0.12"">
        <i class=" material-icons text-gradient text-primary text-3xl">precision_manufacturing</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0 promo-card">
                        <h5>Plugins</h5>
                        <p>Get inspiration and have an overview about the plugins that we used to create the Baby Check.
                        </p>
                        <a href="/learning-lab/bootstrap/datepicker/material-kit" class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-lg-0 mt-4">
                <div class="info-horizontal bg-gray-100 border-radius-xl d-block d-md-flex p-4 promo-card animate-on-scroll"
                    data-delay="0.12"">
        <i class=" material-icons text-gradient text-primary text-3xl">receipt_long</i>
                    <div class="ps-0 ps-md-3 mt-3 mt-md-0">
                        <h5>Utility Classes</h5>
                        <p>Baby Check is giving you a lot of pre-made elements. For those who want flexibility, we
                            included many utility classes.</p>
                        <a href="/learning-lab/bootstrap/utilities/material-kit" class="text-primary icon-move-right">
                            Read more
                            <i class="fas fa-arrow-right text-sm ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -------- END Content Presentation Docs ------- -->


    <section class="py-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <div class="author">
                                        <div class="name">
                                            <h6 class="mb-0 font-weight-bolder">Maria J.</h6>
                                            <div class="stats">
                                                <i class="far fa-clock"></i> 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-4">"BabyCheck gave me a clear, confident result in under 3 minutes. The
                                        test was simple to use and felt very reliable."</p>
                                    <div class="rating mt-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-gradient-primary">
                                <div class="card-body">
                                    <div class="author align-items-center">
                                        <div class="name">
                                            <h6 class="text-white mb-0 font-weight-bolder">A. Thompson</h6>
                                            <div class="stats text-white">
                                                <i class="far fa-clock"></i> 1 week ago
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-4 text-white">"Very sensitive — I was able to test earlier than with
                                        other brands. Accurate and easy to read. Highly recommend BabyCheck."</p>
                                    <div class="rating mt-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <div class="author">
                                        <div class="name">
                                            <h6 class="mb-0 font-weight-bolder">Samuel K.</h6>
                                            <div class="stats">
                                                <i class="far fa-clock"></i> 3 weeks ago
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-4">"Fast, clear results and minimal steps. I appreciated the readable
                                        display and consistent accuracy — gave me peace of mind."</p>
                                    <div class="rating mt-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="horizontal dark my-5">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 ms-auto">
                    <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-apple.svg" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-facebook.svg" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-nasa.svg" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6 ms-lg-0 ms-md-auto">
                    <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-vodafone.svg" alt="Logo">
                </div>
                <div class="col-lg-2 col-md-4 col-6 me-md-auto mx-md-0 mx-auto">
                    <img class="w-100 opacity-6" src="./assets/img/logos/gray-logos/logo-digitalocean.svg" alt="Logo">
                </div>
            </div>
        </div>
    </section>


    <section class="py-sm-7" id="download-soft-ui">
        <div class="bg-gradient-dark position-relative m-3 border-radius-xl overflow-hidden">
            <img src="./assets/img/shapes/waves-white.svg" alt="pattern-lines"
                class="position-absolute start-0 top-md-0 w-100 opacity-2">
            <div class="container py-7 postion-relative z-index-2 position-relative">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <h3 class="text-white mb-0">Did you purchase this product?</h3>
                        <h3 class="text-white">Verify if it's an original copy</h3>
                        <p class="text-white mb-5">If you bought this product, verify its authenticity to ensure you
                            received a legitimate license and access to official updates. Click the button below to
                            check purchase details on the vendor site.</p>
                        <a href="/verify.html" class="btn btn-primary btn-lg mb-3 mb-sm-0" target="_blank"
                            rel="noopener">Verify Purchase</a>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
@endsection