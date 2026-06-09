@extends('layout.master')

@section('title', 'Careers at TopOnlineNexus | Join Our Team')
@section('meta_description', 'Explore career opportunities at TopOnlineNexus in sales, AI, SEO, digital marketing, web development, and software development. Join our Karachi-based team serving clients worldwide.')
@section('meta_keywords', 'careers TopOnlineNexus, jobs Karachi, web developer jobs, SEO careers, AI jobs Pakistan, digital marketing careers')

@section('content')
    <div class="container-fluid position-relative p-0">
        @include('layout.header')

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Build the Future With Us</h1>
                    <p class="fs-5 text-white mx-auto animated fadeInUp" style="max-width: 800px;">
                        Join a team passionate about innovation, digital growth, AI-powered solutions, and creating exceptional experiences for businesses worldwide.
                    </p>
                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="h5 text-white">Home</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="{{ url('careers') }}" class="h5 text-white">Careers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Introduction Start -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="careers-intro-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
                <h5 class="fw-bold text-primary text-uppercase">Work With Us</h5>
                <h2 id="careers-intro-heading" class="mb-0">Grow Your Career at TopOnlineNexus</h2>
            </div>
            <div class="mx-auto text-center" style="max-width: 900px;">
                <p class="mb-4">TopOnlineNexus is always interested in connecting with talented individuals who are passionate about technology, sales, marketing, AI, SEO, and software development. Based in Karachi, Pakistan, we serve clients across the globe — and we are building a team that shares our drive for excellence.</p>
                <p class="mb-4">We believe in a collaborative culture where ideas are valued, learning never stops, and innovation is part of everyday work. Whether you thrive in client-facing roles or love building powerful digital products, you will find opportunities to grow, contribute, and make a real impact.</p>
                <div class="row g-3 justify-content-center mb-3">
                    <div class="col-sm-6 col-md-5 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Collaborative Culture</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Continuous Learning</h5>
                    </div>
                    <div class="col-sm-6 col-md-5 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Innovation-Driven</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Global Opportunities</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Introduction End -->

    <!-- Opportunities Start -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="careers-opportunities-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Open Opportunities</h5>
                <h2 id="careers-opportunities-heading" class="mb-0">Areas Where We Are Always Looking for Talent</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.2s">
                    <article class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <div class="service-icon">
                            <i class="fa fa-handshake text-white" aria-hidden="true"></i>
                        </div>
                        <h3 class="h4 mb-3">Sales &amp; Business Development</h3>
                        <p class="m-0">We seek confident communicators who understand client needs, build lasting relationships, and drive business growth. Ideal candidates have experience in B2B sales, lead generation, or digital services.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                    <article class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <div class="service-icon">
                            <i class="fa fa-robot text-white" aria-hidden="true"></i>
                        </div>
                        <h3 class="h4 mb-3">Artificial Intelligence (AI)</h3>
                        <p class="m-0">Join us to build intelligent solutions — from AI chatbots and automation to custom integrations. We welcome professionals skilled in machine learning, NLP, prompt engineering, or AI product development.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <article class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <div class="service-icon">
                            <i class="fa fa-search text-white" aria-hidden="true"></i>
                        </div>
                        <h3 class="h4 mb-3">SEO &amp; Digital Marketing</h3>
                        <p class="m-0">We are looking for strategists who excel at SEO, content marketing, paid campaigns, and analytics. Help our clients improve visibility, generate leads, and grow their brand presence online.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <article class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <div class="service-icon">
                            <i class="fa fa-code text-white" aria-hidden="true"></i>
                        </div>
                        <h3 class="h4 mb-3">Web Development</h3>
                        <p class="m-0">Talented front-end and full-stack developers who craft fast, responsive, and SEO-friendly websites are a great fit. Experience with modern frameworks, CMS platforms, and e-commerce is a plus.</p>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <article class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code text-white" aria-hidden="true"></i>
                        </div>
                        <h3 class="h4 mb-3">Software Development</h3>
                        <p class="m-0">We welcome engineers who design scalable applications, APIs, and custom software solutions. Strong problem-solving skills, clean code practices, and a passion for building reliable products matter most.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Opportunities End -->

    <!-- CTA Start -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="careers-cta-heading">
        <div class="container py-5">
            <div class="bg-primary rounded p-5 text-center">
                <h2 id="careers-cta-heading" class="text-white mb-4">Interested in Joining Our Team?</h2>
                <p class="text-white mb-4 mx-auto" style="max-width: 800px;">
                    We are always excited to connect with talented professionals who share our passion for innovation and helping businesses succeed. If you are interested in becoming part of our Sales, AI, SEO, or Development team, we would love to hear from you.
                </p>
                <ul class="list-unstyled text-white mb-4 mx-auto" style="max-width: 700px;">
                    <li class="mb-2"><i class="fa fa-envelope text-white me-2"></i>Send your resume and introduction to <a href="mailto:sales@toponlinenexus.com" class="text-white fw-bold">sales@toponlinenexus.com</a></li>
                    <li><i class="fa fa-file-alt text-white me-2"></i>Or fill out our <a href="{{ url('contact') }}" class="text-white fw-bold">Contact Form</a> and provide your contact details so our team can reach out to you.</li>
                </ul>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <a href="mailto:sales@toponlinenexus.com" class="btn btn-light py-3 px-5">
                        <i class="fa fa-envelope me-2"></i>Email Your Resume
                    </a>
                    <a href="{{ url('contact') }}" class="btn btn-outline-light py-3 px-5">
                        <i class="fa fa-paper-plane me-2"></i>Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA End -->

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
