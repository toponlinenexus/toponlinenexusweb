@php
    $navServices = [
        ['slug' => 'ai-integration', 'title' => 'AI Integration'],
        ['slug' => 'data-analytics', 'title' => 'Data Analytics'],
        ['slug' => 'web-development', 'title' => 'Web Development'],
        ['slug' => 'apps-development', 'title' => 'Apps Development'],
        ['slug' => 'digital-marketing', 'title' => 'Digital Marketing'],
    ];
@endphp

<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
    <div class="dropdown-menu m-0">
        <a href="{{ url('services') }}" class="dropdown-item fw-bold">All Services</a>
        <div class="dropdown-divider"></div>
        @foreach ($navServices as $navService)
            <a href="{{ url('services/' . $navService['slug']) }}" class="dropdown-item">{{ $navService['title'] }}</a>
        @endforeach
    </div>
</div>
