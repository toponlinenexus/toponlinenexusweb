@extends('layout.master')

@section('title', 'Top Online Nexus | AI Solutions, Software Development, Web Development, Mobile Apps & Digital Marketing')
@section('meta_description', 'Top Online Nexus provides AI solutions, custom software development, web development, mobile app development, digital marketing, SEO, and data analytics to help businesses automate processes, increase growth, and accelerate digital transformation with secure, scalable, and innovative technology solutions.')
@section('meta_keywords', 'AI Solutions, Artificial Intelligence, AI Integration, AI Automation, Generative AI, Machine Learning, Software Development, Custom Software Development, Web Development, Website Development, Full Stack Development, Frontend Development, Backend Development, Mobile App Development, Android App Development, iOS App Development, Cross-Platform App Development, Digital Marketing, SEO Services, Search Engine Optimization, Local SEO, Technical SEO, Content Marketing, Social Media Marketing, Data Analytics, Business Intelligence, Data Visualization, Dashboard Development, Cloud Solutions, Enterprise Software, UI UX Design, E-Commerce Development, API Development, Database Development, Business Automation, IT Consulting, Technology Solutions, Top Online Nexus')

@section('content')
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('layout.header')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-slide-image" src="img/carousel-1.jpg" alt="Digital Marketing Services">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 carousel-content" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Digital Marketing</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Digital Marketing Services</h1>
                            <a href="#request-quote" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="tel:+923365554271" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-slide-image" src="img/carousel-2.webp" alt="Web Development Services">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 carousel-content" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Web Development</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Web Development Services</h1>
                            <a href="#request-quote" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="tel:+923365554271" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-slide-image" src="img/carousel-3.webp" alt="AI Integration Services">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3 carousel-content" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">AI Integration</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">AI Integration Services</h1>
                            <a href="#request-quote" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                                Quote</a>
                            <a href="tel:+923365554271" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


        <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">100</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">135</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">5</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About TopOnlineNexus</h5>
                        <h1 class="mb-0">Trusted IT & Digital Marketing Solutions in Karachi, Pakistan</h1>
                    </div>
                    <p class="mb-4">TopOnlineNexus is a leading digital agency in Karachi, Pakistan, specializing in web development, digital marketing, SEO, and custom IT solutions. With over 10 years of experience, we help startups and businesses build high-performance websites, improve search engine rankings, and grow their online presence through data-driven strategies, e-commerce development, and reliable technical support.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning IT Solutions</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Expert Web Developers</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Technical Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Affordable Digital Services</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+923365554271" class="text-primary text-decoration-none">+92 336 5554271</a></h4>
                        </div>
                    </div>
                    <a href="#request-quote" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Request A Quote</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose TopOnlineNexus</h5>
                <h1 class="mb-0">Digital Solutions That Help Your Business Grow Online</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">TopOnlineNexus delivers industry-leading web development, SEO, and digital marketing solutions that help businesses build a powerful online presence and outperform competitors.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Recognized for excellence in custom websites, e-commerce platforms, and data-driven digital strategies that drive traffic, leads, and measurable business growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Our skilled developers, designers, and IT consultants bring years of experience in cloud hosting, mobile apps, and scalable online business solutions.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Get reliable round-the-clock technical support, website maintenance, and dedicated assistance so your digital platforms stay secure, fast, and always online.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


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
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Call Us For Quote</h3>
                        <p class="text-white mb-3">Get a free, no-obligation quote for web development, digital marketing, or IT services. Contact TopOnlineNexus today and let our experts help grow your business online.</p>
                        <h2 class="text-white mb-0"><a href="tel:+923365554271" class="text-white text-decoration-none">+92 336 5554271</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Quote Start -->
    <div id="request-quote" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Get a Free Quote for Web Development, SEO & Digital Marketing</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24/7 telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Looking for web development, digital marketing, SEO, or custom IT solutions? Based in Karachi, Pakistan, TopOnlineNexus serves clients worldwide with reliable digital and IT services. Fill out the form and our team will respond within 24 hours with a personalized quote. Whether you need a new website, e-commerce store, mobile app, or ongoing digital support, we deliver affordable, results-driven solutions tailored to your business goals — locally and across the globe.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0"><a href="tel:+923365554271" class="text-primary text-decoration-none">+92 336 5554271</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        @include('partials.quote-form', ['redirectTo' => url('/') . '#request-quote'])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


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
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
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
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
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
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
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
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
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