@php
    $serviceCards = [
        ['slug' => 'ai-integration', 'icon' => 'fa fa-robot', 'title' => 'AI Integration', 'description' => 'Bring artificial intelligence into your business with TopOnlineNexus. We integrate AI chatbots, automation, and custom intelligent tools that streamline workflows, improve customer experience, and drive smarter decisions.'],
        ['slug' => 'data-analytics', 'icon' => 'fa fa-chart-pie', 'title' => 'Data Analytics', 'description' => 'Turn data into actionable insights with our analytics services. We help businesses track performance, understand customer behavior, and make smarter digital marketing decisions.'],
        ['slug' => 'web-development', 'icon' => 'fa fa-code', 'title' => 'Web Development', 'description' => 'TopOnlineNexus builds fast, responsive, and SEO-friendly websites tailored to your brand. From business sites to e-commerce platforms, we deliver modern web solutions that drive results.'],
        ['slug' => 'apps-development', 'icon' => 'fab fa-android', 'title' => 'Apps Development', 'description' => 'Get custom mobile apps for Android and iOS that engage users and grow your business. Our app development team creates scalable, user-friendly solutions for startups and enterprises.'],
        ['slug' => 'digital-marketing', 'icon' => 'fa fa-bullhorn', 'title' => 'Digital Marketing', 'description' => 'Grow your brand online with data-driven digital marketing strategies. We manage social media, paid ads, content marketing, and lead generation campaigns that deliver measurable ROI.'],
    ];
@endphp

@foreach ($serviceCards as $index => $card)
    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ number_format(($index % 3 + 1) * 0.3, 1) }}s">
        <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
            <div class="service-icon">
                <i class="{{ $card['icon'] }} text-white"></i>
            </div>
            <h4 class="mb-3">{{ $card['title'] }}</h4>
            <p class="m-0">{{ $card['description'] }}</p>
            <a class="btn btn-lg btn-primary rounded" href="{{ url('services/' . $card['slug']) }}" aria-label="Learn more about {{ $card['title'] }}">
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
@endforeach
