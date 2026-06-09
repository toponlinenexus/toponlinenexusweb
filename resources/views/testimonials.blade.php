@extends('layout.master')
@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
       @include('layout.header')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Testimonial</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Testimonial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Sarah Gibson</h4>
                            <small class="text-uppercase">E-Commerce Store Owner</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        TopOnlineNexus built our online store and improved our Google rankings within months. Their web development and SEO team delivered a fast, mobile-friendly website that increased our sales across Pakistan.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Michael Bisping</h4>
                            <small class="text-uppercase">Marketing Director</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        We hired TopOnlineNexus for digital marketing and social media management. Their data-driven campaigns boosted our website traffic, generated quality leads, and helped us grow our brand presence online.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Hassan Ali</h4>
                            <small class="text-uppercase">Startup Founder</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        The team at TopOnlineNexus developed a professional business website for our startup. From custom web design to cloud hosting and 24/7 support, they provided reliable IT solutions that helped us launch faster.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Fatima Khan</h4>
                            <small class="text-uppercase">Business Owner</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Excellent service from start to finish. TopOnlineNexus redesigned our website, optimized it for search engines, and provided ongoing technical support. Highly recommended for digital solutions in Karachi.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection
