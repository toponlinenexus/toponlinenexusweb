@extends('layout.master')

@section('title', 'Our Services | TopOnlineNexus')
@section('meta_description', 'Explore TopOnlineNexus services: AI integration, data analytics, web development, mobile apps, and digital marketing. Professional IT solutions in Karachi and worldwide.')
@section('meta_keywords', 'IT services, web development, AI integration, digital marketing, mobile apps, data analytics, Karachi, Pakistan')

@section('content')
    <div class="container-fluid position-relative p-0">
        @include('layout.header')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                    <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url('services') }}" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Professional Digital & IT Solutions for Your Business</h1>
            </div>
            <div class="row g-5">
                @include('partials.service-cards')
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">Get a free, no-obligation quote for web development, digital marketing, or IT services. Contact TopOnlineNexus today and let our experts help grow your business online.</p>
                        <h2 class="text-white mb-0"><a href="tel:+923365554271" class="text-white text-decoration-none">+92 336 5554271</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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

@endsection