@extends('layouts.front')

@section('title', 'Contact Us — Grand Satya | Request Quotation Corporate Transportation')
@section('meta_description', 'Hubungi Grand Satya untuk konsultasi dan Request Quotation layanan Corporate Transportation, Executive Car Rental, dan Business Travel Management. WhatsApp: 0896-3646-3189 | cs@grandsatya.com')
@section('og_title',       'Hubungi Grand Satya — Request Quotation Corporate Transportation')
@section('og_description', 'Konsultasikan kebutuhan transportasi korporasi Anda. Hubungi tim Grand Satya via WhatsApp 0896-3646-3189 atau isi formulir Request Quotation.')
@section('og_image',        asset('images/hero/hero2.png'))

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images//hero/hero2.png") }}');
}
.gs-contact-nv-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    align-items: start;
}
@media (min-width: 1024px) {
    .gs-contact-nv-grid { grid-template-columns: 5fr 7fr; gap: 2.5rem; }
}
/* Contact form grid — mobile single col */
.gs-contact-nv-grid .gs-form-grid {
    grid-template-columns: 1fr;
}
@media (min-width: 480px) {
    .gs-contact-nv-grid .gs-form-grid { grid-template-columns: 1fr 1fr; }
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero" style="border-radius:1.5rem">
        <div class="gs-container">
            <h1>Contact Us</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">Contact Us</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>

{{-- ======= CONTACT FORM ======= --}}
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div class="gs-contact-nv-grid">

            {{-- LEFT: Dark Info Card --}}
            <div data-aos="fade-right">
                <div class="gs-contact-dark-card">
                    <h3>Hubungi Grand Satya</h3>
                    <p class="subtitle">Tim kami siap membantu kebutuhan corporate transportation Anda.</p>

                    <div class="gs-contact-dark-row">
                        <div class="gs-contact-dark-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <div class="gs-contact-dark-label">Email</div>
                            <a href="mailto:cs@grandsatya.com" class="gs-contact-dark-text" style="color:rgba(255,255,255,.8);text-decoration:none">
                                cs@grandsatya.com
                            </a>
                        </div>
                    </div>

                    <div class="gs-contact-dark-row">
                        <div class="gs-contact-dark-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <div class="gs-contact-dark-label">Address</div>
                            <p class="gs-contact-dark-text" style="margin:0">
                                Talavera Office Park lt.11,<br>
                                Jl. T.B. Simatupang Kav 22-26,<br>
                                Jakarta Selatan, Indonesia
                            </p>
                        </div>
                    </div>

                    
                </div>
            </div>

            {{-- RIGHT: Form --}}
            <div data-aos="fade-left">

                @if(session('success'))
                <div style="background:#f0fdf4;border:1px solid #bbf7d0;color:#15803d;padding:1rem 1.25rem;border-radius:var(--radius-md);font-size:.875rem;font-weight:600;margin-bottom:1.5rem;display:flex;align-items:center;gap:.625rem">
                    <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                </div>
                @endif

                    <form action="{{ route('postRequest') }}" method="POST">
                    @csrf
                    <div class="gs-form-grid">
                        <div class="gs-form-group" style="margin-bottom:0">
                            <label class="gs-label">Nama <span style="color:#ef4444">*</span></label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama Anda" required class="gs-input">
                            @error('name')<p style="color:#ef4444;font-size:.75rem;margin:.25rem 0 0">{{ $message }}</p>@enderror
                        </div>
                        <div class="gs-form-group" style="margin-bottom:0">
                            <label class="gs-label">Perusahaan</label>
                            <input type="text" name="company" value="{{ old('company') }}" placeholder="Nama Perusahaan Anda" class="gs-input">
                        </div>
                    </div>
                    <div class="gs-form-grid">
                        <div class="gs-form-group" style="margin-bottom:0">
                            <label class="gs-label">Email <span style="color:#ef4444">*</span></label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Perusahaan Anda" required class="gs-input">
                            @error('email')<p style="color:#ef4444;font-size:.75rem;margin:.25rem 0 0">{{ $message }}</p>@enderror
                        </div>
                        <div class="gs-form-group" style="margin-bottom:0">
                            <label class="gs-label">No. WhatsApp / Telepon</label>
                            <input type="tel" name="contact" value="{{ old('contact') }}" placeholder="08xx-xxxx-xxxx" class="gs-input">
                        </div>
                    </div>
                    <div class="gs-form-group">
                        <label class="gs-label">Pesan / Kebutuhan Layanan <span style="color:#ef4444">*</span></label>
                        <textarea name="message" rows="5" placeholder="Ceritakan kebutuhan transportasi korporasi Anda..." required class="gs-input gs-textarea">{{ old('message') }}</textarea>
                        @error('message')<p style="color:#ef4444;font-size:.75rem;margin:.25rem 0 0">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="gs-btn gs-btn-primary">
                        Kirim Request Quotation <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

{{-- ======= LOCATION ======= --}}
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange"> Lokasi Kantor</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Temukan Kami di Jakarta</h2>
        </div>
        <div style="border-radius:var(--radius-lg);overflow:hidden;border:1.5px solid var(--border);box-shadow:0 8px 32px rgba(0,0,0,.08)" data-aos="fade-up" data-aos-delay="80">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7574847047365!2d106.7966!3d-6.2741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15c3ff30011%3A0x8a27bbdd4b8b4c57!2sTalavera%20Office%20Park!5e0!3m2!1sen!2sid!4v1720000000000!5m2!1sen!2sid"
                width="100%" height="420" style="border:0;display:block" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Grand Satya Office Location">
            </iframe>
        </div>
    </div>
</section>

</main>
@endsection


