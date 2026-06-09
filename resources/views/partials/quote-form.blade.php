<form action="{{ route('quote.submit') }}" method="POST">
    @csrf
    <input type="hidden" name="redirect_to" value="{{ $redirectTo ?? url('quote') }}">

    @if (session('success'))
        <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger mb-3">{{ session('error') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger mb-3">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row g-3">
        <div class="col-xl-12">
            <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name"
                style="height: 55px;" value="{{ old('name') }}" required>
        </div>
        <div class="col-12">
            <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email"
                style="height: 55px;" value="{{ old('email') }}" required>
        </div>
        <div class="col-12">
            <select name="service" class="form-select bg-light border-0" style="height: 55px;" required>
                <option value="" disabled @selected(!old('service'))>Select A Service</option>
                <option value="web-development" @selected(old('service') === 'web-development')>Web Development</option>
                <option value="digital-marketing" @selected(old('service') === 'digital-marketing')>Digital Marketing</option>
                <option value="seo" @selected(old('service') === 'seo')>SEO Optimization</option>
                <option value="mobile-apps" @selected(old('service') === 'mobile-apps')>Mobile App Development</option>
                <option value="ai-integration" @selected(old('service') === 'ai-integration')>AI Integration</option>
                <option value="data-analytics" @selected(old('service') === 'data-analytics')>Data Analytics</option>
                <option value="other" @selected(old('service') === 'other')>Other</option>
            </select>
        </div>
        <div class="col-12">
            <textarea name="message" class="form-control bg-light border-0" rows="3" placeholder="Message"
                required>{{ old('message') }}</textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
        </div>
    </div>
</form>
