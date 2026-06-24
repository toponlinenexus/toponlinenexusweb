@extends('layout.master')

@section('title', $service['title'])
@section('meta_description', $service['meta_description'])
@section('meta_keywords', $service['meta_keywords'])

@push('head')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            @foreach ($service['faqs'] as $index => $faq)
            {
                "@type": "Question",
                "name": {{ json_encode($faq['question']) }},
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": {{ json_encode($faq['answer']) }}
                }
            }@if (! $loop->last),@endif
            @endforeach
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": {{ json_encode($service['name']) }},
        "description": {{ json_encode($service['meta_description']) }},
        "provider": {
            "@type": "Organization",
            "name": "TopOnlineNexus",
            "url": {{ json_encode(url('/')) }},
            "telephone": "+923365554271",
            "email": "sales@toponlinenexus.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Block 13 A Gulshan-e-Iqbal",
                "addressLocality": "Karachi",
                "addressCountry": "PK"
            }
        },
        "areaServed": ["Karachi", "Pakistan", "Worldwide"]
    }
    </script>
@endpush

@section('content')
    <div class="container-fluid position-relative p-0">
        @include('layout.header')

        {{-- Service Hero --}}
        <div class="service-hero" style="background-image: url('{{ url($service['hero_image']) }}');">
            <div class="service-hero-overlay"></div>
            <div class="container service-hero-content">
                <div class="row align-items-center min-vh-service-hero">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="service-hero-icon wow zoomIn" data-wow-delay="0.1s">
                            <i class="{{ $service['icon'] }} text-white"></i>
                        </div>
                        <h1 class="display-3 text-white animated slideInDown mb-3">{{ $service['h1'] }}</h1>
                        <p class="fs-4 text-white mb-4 animated fadeInUp">{{ $service['tagline'] }}</p>
                        <nav aria-label="breadcrumb" class="animated fadeInUp">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('services') }}" class="text-white">Services</a></li>
                                <li class="breadcrumb-item active text-white-50" aria-current="page">{{ $service['name'] }}</li>
                            </ol>
                        </nav>
                        <div class="mt-4 animated slideInUp">
                            <a href="{{ url('quote') }}?service={{ $service['quote_service'] }}" class="btn btn-primary py-3 px-5 me-2">Get Free Quote</a>
                            <a href="tel:+923365554271" class="btn btn-outline-light py-3 px-5">Call Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Overview --}}
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-overview-heading">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h5 class="fw-bold text-primary text-uppercase">Overview</h5>
                        <h2 id="service-overview-heading" class="mb-0">{{ $service['overview_heading'] }}</h2>
                    </div>
                    @foreach ($service['intro_paragraphs'] as $paragraph)
                        <p class="mb-3">{{ $paragraph }}</p>
                    @endforeach
                    <a href="{{ url('quote') }}?service={{ $service['quote_service'] }}" class="btn btn-primary py-3 px-5 wow zoomIn" data-wow-delay="0.3s">
                        Start Your Project
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <figure class="mb-0">
                        <div class="service-overview-media rounded overflow-hidden shadow-sm wow zoomIn" data-wow-delay="0.5s">
                            <img class="service-overview-img"
                                src="{{ asset($service['hero_image']) }}"
                                alt="{{ $service['hero_image_alt'] }}">
                        </div>
                        @if (! empty($service['image_caption']))
                            <figcaption class="text-muted text-center mt-3 small">{{ $service['image_caption'] }}</figcaption>
                        @endif
                    </figure>
                </div>
            </div>
        </div>
    </section>

    {{-- Key Benefits --}}
    <section class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-benefits-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Benefits</h5>
                <h2 id="service-benefits-heading" class="mb-0">{{ $service['benefits_heading'] }}</h2>
            </div>
            <div class="row g-4">
                @foreach ($service['benefits'] as $index => $benefit)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ number_format(($index % 3 + 1) * 0.2, 1) }}s">
                        <div class="service-benefit-card bg-white rounded h-100 p-4 shadow-sm">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-4"
                                style="width: 60px; height: 60px;">
                                <i class="fa {{ $benefit['icon'] }} text-white fa-lg"></i>
                            </div>
                            <h3 class="h4 mb-3">{{ $benefit['title'] }}</h3>
                            <p class="mb-0">{{ $benefit['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Our Process --}}
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-process-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Process</h5>
                <h2 id="service-process-heading" class="mb-0">{{ $service['process_heading'] }}</h2>
            </div>
            <div class="row g-4">
                @foreach ($service['process'] as $index => $step)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ number_format(($index % 3 + 1) * 0.15, 2) }}s">
                        <div class="service-process-step d-flex align-items-start h-100 p-4 bg-light rounded">
                            <div class="service-process-number bg-primary text-white rounded flex-shrink-0 me-3">
                                {{ $step['step'] }}
                            </div>
                            <div>
                                <h3 class="h5 mb-2">{{ $step['title'] }}</h3>
                                <p class="mb-0">{{ $step['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Technologies --}}
    <section class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-tech-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Technologies</h5>
                <h2 id="service-tech-heading" class="mb-0">{{ $service['technologies_heading'] }}</h2>
            </div>
            <div class="row justify-content-center g-3">
                @foreach ($service['technologies'] as $index => $tech)
                    <div class="col-auto wow zoomIn" data-wow-delay="{{ number_format(($index % 4 + 1) * 0.1, 1) }}s">
                        <span class="service-tech-badge">{{ $tech }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Industries --}}
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-industries-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Industries</h5>
                <h2 id="service-industries-heading" class="mb-0">{{ $service['industries_heading'] }}</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($service['industries'] as $index => $industry)
                    <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="{{ number_format(($index % 4 + 1) * 0.1, 1) }}s">
                        <div class="service-industry-card text-center bg-light rounded p-4 h-100">
                            <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-industry text-white"></i>
                            </div>
                            <h3 class="h5 mb-2">{{ $industry['name'] }}</h3>
                            <p class="mb-0 small text-muted">{{ $industry['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="service-why-heading">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative pb-3 mb-4">
                        <h5 class="fw-bold text-white text-uppercase">Why TopOnlineNexus</h5>
                        <h2 id="service-why-heading" class="mb-0 text-white">{{ $service['why_choose_heading'] }}</h2>
                    </div>
                    @if (! empty($service['why_choose_intro']))
                        <p class="text-white mb-4">{{ $service['why_choose_intro'] }}</p>
                    @endif
                    <ul class="list-unstyled mb-4">
                        @foreach ($service['why_choose'] as $reason)
                            <li class="text-white mb-3 wow fadeIn" data-wow-delay="0.2s">
                                <i class="fa fa-check text-white me-3"></i>{{ $reason }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded p-5 text-center">
                        <h3 class="text-primary mb-3">Ready to Get Started?</h3>
                        <p class="mb-4">Contact TopOnlineNexus today for a free consultation and personalized quote for {{ $service['name'] }} services.</p>
                        <a href="{{ url('quote') }}?service={{ $service['quote_service'] }}" class="btn btn-primary py-3 px-5 mb-3 w-100">Request A Free Quote</a>
                        <p class="mb-0 text-primary fw-bold fs-4">
                            <a href="tel:+923365554271" class="text-primary text-decoration-none">+92 336 5554271</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="container-fluid py-5 wow fadeInUp service-faq" data-wow-delay="0.1s" aria-labelledby="service-faq-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">FAQ</h5>
                <h2 id="service-faq-heading" class="mb-0">Frequently Asked Questions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="serviceFaqAccordion">
                        @foreach ($service['faqs'] as $index => $faq)
                            <div class="accordion-item border-0 mb-3 shadow-sm rounded overflow-hidden wow fadeInUp" data-wow-delay="{{ number_format(($index + 1) * 0.1, 1) }}s">
                                <h3 class="accordion-header" id="faqHeading{{ $index }}">
                                    <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }} fw-semibold"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse{{ $index }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="faqCollapse{{ $index }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h3>
                                <div id="faqCollapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="faqHeading{{ $index }}"
                                    data-bs-parent="#serviceFaqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['answer'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Services --}}
    @if (! empty($service['related_services']))
    <section class="container-fluid py-5 bg-light wow fadeInUp" data-wow-delay="0.1s" aria-labelledby="related-services-heading">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Explore More</h5>
                <h2 id="related-services-heading" class="mb-0">Related Services You May Need</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($service['related_services'] as $index => $related)
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ number_format(($index + 1) * 0.15, 2) }}s">
                        <div class="service-benefit-card bg-white rounded h-100 p-4 shadow-sm">
                            <h3 class="h5 mb-3">
                                <a href="{{ url('services/' . $related['slug']) }}" class="text-primary text-decoration-none">
                                    {{ $related['title'] }}
                                </a>
                            </h3>
                            <p class="mb-3">{{ $related['description'] }}</p>
                            <a href="{{ url('services/' . $related['slug']) }}" class="btn btn-outline-primary btn-sm">
                                Learn More <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('services') }}" class="btn btn-primary py-3 px-5">View All Services</a>
                <a href="{{ url('contact') }}" class="btn btn-outline-primary py-3 px-5 ms-2">Contact Our Team</a>
            </div>
        </div>
    </section>
    @endif

@endsection
