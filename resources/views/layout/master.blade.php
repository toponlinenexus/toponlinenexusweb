<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Top Online Nexus | AI Solutions, Software Development, Web Development, Mobile Apps & Digital Marketing')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta_keywords', 'AI Solutions, Artificial Intelligence, AI Integration, AI Automation, Generative AI, Machine Learning, Software Development, Custom Software Development, Web Development, Website Development, Full Stack Development, Frontend Development, Backend Development, Mobile App Development, Android App Development, iOS App Development, Cross-Platform App Development, Digital Marketing, SEO Services, Search Engine Optimization, Local SEO, Technical SEO, Content Marketing, Social Media Marketing, Data Analytics, Business Intelligence, Data Visualization, Dashboard Development, Cloud Solutions, Enterprise Software, UI UX Design, E-Commerce Development, API Development, Database Development, Business Automation, IT Consulting, Technology Solutions, Top Online Nexus')" name="keywords">
    <meta content="@yield('meta_description', 'Top Online Nexus provides AI solutions, custom software development, web development, mobile app development, digital marketing, SEO, and data analytics to help businesses automate processes, increase growth, and accelerate digital transformation with secure, scalable, and innovative technology solutions.')" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="{{ url('css/services.css') }}" rel="stylesheet">

    @stack('head')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

        <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between" style="height: 45px;">
                    <small class="text-light"><i class="fa fa-map-marker-alt me-2"></i>Block 13 A Gulshan-e-Iqbal, Karachi, Pakistan</small>
                    <div class="d-flex align-items-center">
                        <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+92 336 5554271</small>
                        <small class="text-light"><i class="fa fa-envelope-open me-2"></i>sales@toponlinenexus.com</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
                  

@yield('content')

    

@include('layout.footer')


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('js/main.js') }}"></script>
</body>

</html>