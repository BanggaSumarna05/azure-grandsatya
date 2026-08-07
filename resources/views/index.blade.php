@extends('layouts.front')

@section('title', 'Grand Satya   Corporate Mobility & Travel Management Solutions | Sewa Mobil Corporate Jakarta')
@section('meta_description', 'Grand Satya, perusahaan Corporate Transportation & Business Travel Management terpercaya di Indonesia. Melayani Executive Car Rental, Project Transportation, Professional Driver, dan Corporate Travel Management. Hubungi 0896-3646-3189')

@php use Illuminate\Support\Facades\Storage; @endphp

@push('preload')
<link rel="preload" href="{{ asset('images/hero/hero2.png') }}" as="image" fetchpriority="high">
@endpush

@push('scripts')
{{-- Schema.org Structured Data untuk SEO --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Grand Satya",
  "alternateName": "Grand Satya Corporate Transportation",
  "description": "Perusahaan Corporate Transportation, Executive Car Rental, dan Business Travel Management yang berfokus pada penyediaan solusi mobilitas bagi perusahaan, institusi, dan sektor industri di Indonesia.",
  "foundingDate": "2021",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('anyar/img/logo.png') }}",
  "image": "{{ asset('images/hero/hero2.png') }}",
  "telephone": "+6289636463189",
  "email": "cs@grandsatya.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Talavera Office Park, Jl. Let. Jen T.B. Simatupang No.Kav. 22-26, Cilandak Bar., Kec. Cilandak",
    "addressLocality": "Jakarta Selatan",
    "postalCode": "12430",
    "addressCountry": "ID"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "08:00",
      "closes": "17:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Saturday","Sunday"],
      "description": "Customer Support 24 Hours"
    }
  ],
  "areaServed": ["Jakarta","Cilegon","Gresik","Medan","Pekanbaru","Balikpapan","Sumba","Indonesia"],
  "serviceType": [
    "Corporate Car Rental",
    "Executive Car Rental",
    "Project Transportation",
    "Professional Driver Service",
    "Corporate Travel Management",
    "Airport Transfer"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Apakah tersedia paket sewa bulanan atau kontrak jangka panjang?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, Grand Satya menyediakan paket sewa bulanan maupun kontrak jangka panjang yang fleksibel untuk kebutuhan perusahaan dan proyek industri."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah Grand Satya bisa melayani operasional proyek industri?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, kami memiliki armada dan pengemudi berpengalaman untuk mendukung operasional proyek di sektor Construction, Mining, Oil & Gas, dan Manufacturing."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah armada sudah termasuk pengemudi profesional?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tersedia pilihan dengan maupun tanpa pengemudi. Pengemudi Grand Satya telah berpengalaman menangani perjalanan korporat dan operasional proyek industri."
      }
    },
    {
      "@type": "Question",
      "name": "Apakah tersedia layanan customer support 24 jam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ya, Customer Support Grand Satya siap membantu selama 24 jam setiap hari. Hubungi kami via WhatsApp 0896-3646-3189 atau email cs@grandsatya.com."
      }
    },
    {
      "@type": "Question",
      "name": "Bagaimana cara meminta quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Anda dapat menghubungi tim kami melalui WhatsApp 0896-3646-3189 atau mengisi formulir Request Quotation di halaman Contact kami. Tim kami akan merespons dengan cepat."
      }
    }
  ]
}
</script>
@endpush

@push('styles')
<style>
/* ---- Hero Nova-style wrapper ---- */
.gs-hero-wrap {
    padding: 1rem 1rem 0;
    padding-top: calc(72px + 1rem); /* account for fixed white navbar */
    background: #fff;
}
.gs-hero-card {
    position: relative;
    border-radius: 1.5rem;
    overflow: visible;          /* allow booking bar to hang below */
    min-height: 88vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 7rem 1.5rem 7rem;
    text-align: center;
}
/* Background image clipped inside card via pseudo-element */
.gs-hero-card-inner-clip {
    position: absolute;
    inset: 0;
    border-radius: 1.5rem;
    overflow: hidden;
    z-index: 0;
    background-image:
        linear-gradient(180deg, rgba(6,14,26,.50) 0%, rgba(6,14,26,.70) 55%, rgba(6,14,26,.92) 100%),
        url('{{ asset("images/hero/hero2.png") }}');
    background-size: cover;
    background-position: center;
    will-change: transform; /* GPU acceleration hint */
}
/* small red dot decoration (top-left like reference) */
.gs-hero-card-inner-clip::before {
    content: '';
    position: absolute;
    top: 1.5rem;
    left: 1.75rem;
    width: .6rem;
    height: .6rem;
    border-radius: 50%;
    background: var(--navy);
    z-index: 2;
}
.gs-hero-eyebrow-nova {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    font-size: .8125rem;
    font-weight: 600;
    color: rgba(255,255,255,.85);
    letter-spacing: .05em;
    margin-bottom: 1.25rem;
}
.gs-hero-eyebrow-nova .star {
    color: var(--navy);
    font-size: 1rem;
}
.gs-hero-headline-nova {
    font-size: clamp(2.25rem, 5.5vw, 3.875rem);
    font-weight: 800;
    color: white;
    line-height: 1.1;
    letter-spacing: -.025em;
    margin-bottom: 1.25rem;
}
.gs-hero-sub-nova {
    color: rgba(255,255,255,.65);
    font-size: .9375rem;
    line-height: 1.75;
    max-width: 38rem;
    margin: 0 auto 2.25rem;
}
/* "Learn More" outline pill button */
.gs-btn-outline-pill {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    padding: .75rem 1.5rem;
    border: 2px solid rgba(255,255,255,.55);
    border-radius: 9999px;
    background: transparent;
    color: white;
    font-size: .9375rem;
    font-weight: 600;
    text-decoration: none;
    transition: background .2s, border-color .2s;
    white-space: nowrap;
}
.gs-btn-outline-pill:hover {
    background: rgba(255,255,255,.1);
    border-color: white;
    color: white;
}
.gs-btn-outline-pill .arrow-circle {
    width: 1.75rem;
    height: 1.75rem;
    border-radius: 50%;
    background: rgba(255,255,255,.18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .8rem;
}
/* ---- Booking bar   hangs at the bottom of the hero card ---- */
.gs-hero-booking-row {
    position: absolute;
    bottom: -3rem;
    left: 1.5rem;
    right: 1.5rem;
    z-index: 20;
    display: none; /* Hide on mobile by default */
}
/* Space after hero wrap to accommodate the hanging bar */
.gs-hero-after-space {
    padding-top: 2rem;
}
@media (min-width: 768px) {
    .gs-hero-booking-row { 
        display: block;
        bottom: -3rem;
    }
    .gs-hero-after-space { padding-top: 5rem; }
}
@media (min-width: 768px) and (max-width: 1023px) {
    .gs-hero-booking-row { bottom: -4rem; }
    .gs-hero-after-space { padding-top: 6.5rem; }
}
</style>
@endpush

@section('content')
<main>

{{-- =================== HERO =================== --}}
<div class="gs-hero-wrap gs-hero-booking-outer">
    <div class="gs-hero-card" data-aos="fade-up">

        {{-- Background image clipped inside card --}}
        <div class="gs-hero-card-inner-clip"></div>

        {{-- Content --}}
        <div style="position:relative;z-index:10;max-width:54rem;width:100%;text-align:center">
            <div class="gs-hero-eyebrow-nova" data-aos="fade-down" data-aos-delay="0">
                <span class="star"></span> Trusted Corporate Transportation & Travel Partner
            </div>
            <h1 class="gs-hero-headline-nova" data-aos="fade-up" data-aos-delay="50">
                Corporate Mobility &amp;<br>Travel Management Solutions
            </h1>
            <p class="gs-hero-sub-nova" data-aos="fade-up" data-aos-delay="80">
                Grand Satya hadir sebagai mitra strategis perusahaan Anda dalam penyediaan Corporate Car Rental, Executive Transportation, Project Fleet, dan Business Travel Management di seluruh Indonesia.
            </p>
            <div class="gs-hero-actions" style="justify-content:center" data-aos="fade-up" data-aos-delay="100">
                <a href="#contact" class="gs-btn gs-btn-primary gs-btn-lg" style="border-radius:9999px">
                    Request Quotation
                </a>
                <a href="{{ route('front.fleet.index') }}" class="gs-btn-outline-pill">
                    Lihat Armada
                    <span class="arrow-circle"><i class="bi bi-arrow-up-right"></i></span>
                </a>
            </div>
        </div>

        {{-- Booking bar   hangs at bottom of card --}}
        <div class="gs-hero-booking-row" data-aos="fade-up" data-aos-delay="120">
            <form class="gs-booking-float" style="box-shadow:0 16px 50px rgba(0,0,0,.18)" action="{{ route('postRequest') }}" method="POST">
                @csrf
                <div class="gs-booking-float-label">
                    <p style="font-size:.7rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.12em;margin:0 0 .35rem">Request Quotation</p>
                    <p style="font-size:1.0625rem;font-weight:800;color:var(--navy);margin:0;line-height:1.3">Butuh Armada<br>Corporate Hari Ini?</p>
                </div>
                <div class="gs-booking-float-field">
                    <p class="gs-booking-float-field-label">Nama / Perusahaan</p>
                    <input type="text" name="name" placeholder="Nama atau PT / CV Anda" class="gs-booking-float-input" required>
                </div>
                <div class="gs-booking-float-field">
                    <p class="gs-booking-float-field-label">No. WhatsApp</p>
                    <input type="tel" name="contact" placeholder="08xx-xxxx-xxxx" class="gs-booking-float-input">
                </div>
                <div class="gs-booking-float-field">
                    <p class="gs-booking-float-field-label">Kebutuhan Layanan</p>
                    <input type="text" name="subject" placeholder="Corporate Rental / Project / Travel" class="gs-booking-float-input">
                </div>
                <div class="gs-booking-float-field">
                    <p class="gs-booking-float-field-label">Pesan Singkat</p>
                    <input type="text" name="message" placeholder="Ceritakan kebutuhan Anda..." class="gs-booking-float-input" required>
                </div>
                {{-- hidden required email — booking bar tidak punya field email, pakai placeholder --}}
                <input type="hidden" name="email" value="noreply-bookingbar@grandsatya.com">
                <div style="display:flex;align-items:center;flex-shrink:0;padding:.25rem 0 .25rem .5rem">
                    <button type="submit" class="gs-btn gs-btn-primary gs-btn-lg" style="border-radius:9999px;white-space:nowrap">
                        Kirim
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

{{-- Space for the hanging booking bar --}}
<div class="gs-hero-after-space" style="background:#fff"></div>

{{-- =================== ABOUT US =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-about-split">

                {{-- LEFT: single photo --}}
                <div class="gs-about-photos" data-aos="fade-right">
                    <div class="gs-about-photo gs-about-photo--single">
                        <img src="{{ asset('images/cars/alphard.jpg') }}" alt="Grand Satya Alphard" loading="lazy" decoding="async" width="600" height="450">
                    </div>
                </div>

                {{-- RIGHT: text content --}}
                <div class="gs-about-content" data-aos="fade-left">
                    <div class="gs-about-eyebrow">
                        <span class="gs-about-eyebrow-star"></span> Tentang Grand Satya
                    </div>
                    <h2 class="gs-about-headline">
                        Mitra Strategis Mobilitas<br>Korporasi Anda
                    </h2>
                    <p class="gs-about-lead">
                        Grand Satya adalah perusahaan yang bergerak di bidang <strong>Corporate Transportation, Executive Car Rental,</strong> dan <strong>Business Travel Management</strong>   berfokus pada penyediaan solusi mobilitas bagi perusahaan, institusi, dan sektor industri di Indonesia.
                    </p>
                    <p class="gs-about-lead" style="margin-top:.75rem">
                        Didirikan pada tahun 2021, kami hadir sebagai mitra terpercaya yang memahami bahwa mobilitas adalah bagian penting dari operasional bisnis. Kami menghadirkan layanan terpadu mulai dari penyewaan kendaraan, pengemudi profesional, hingga pengelolaan perjalanan dinas perusahaan secara menyeluruh.
                    </p>

                    {{-- Feature list --}}
                    <div class="gs-about-features">
                        @foreach([
                            ['bi-patch-check','Professional Corporate Partner','Kami memahami standar operasional perusahaan sehingga setiap layanan dirancang memenuhi kebutuhan bisnis secara profesional.'],
                            ['bi-shield-check','Safety First & Fully Insured','Seluruh armada dilengkapi perlindungan asuransi serta didukung prosedur keselamatan ketat. Unit pengganti tersedia bila terjadi kendala operasional.'],
                        ] as [$icon, $title, $desc])
                        <div class="gs-about-feature">
                            <div class="gs-about-feature-icon">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                            <div>
                                <div class="gs-about-feature-title">{{ $title }}</div>
                                <p class="gs-about-feature-desc">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- CTA --}}
                    <div style="display:flex;align-items:center;gap:.625rem;margin-top:2rem">
                        <a href="{{ route('front.contact') }}" class="gs-btn gs-btn-primary" style="border-radius:9999px;padding:.7rem 1.75rem">
                            Request Quotation
                        </a>
                        <a href="{{ route('front.about') }}" class="gs-about-cta-icon" aria-label="Pelajari lebih lanjut">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =================== SERVICES =================== --}}
<section id="services" class="gs-section">
    <div class="gs-sc gs-sc-services">
        <div class="gs-container">

            {{-- Section head --}}
            <div class="gs-svc-head" data-aos="fade-up">
                <div class="gs-svc-eyebrow">
                    <span></span> Core Services
                </div>
                <h2 class="gs-svc-headline">
                    Solusi Mobilitas Korporasi<br>yang Terintegrasi
                </h2>
            </div>

            {{-- Cards grid   hanya 4 layanan utama di homepage --}}
            <div class="gs-svc-grid">
                @foreach([
                    ['bi-car-front-fill',    'Corporate Car Rental',        'Penyewaan kendaraan untuk perjalanan dinas, kunjungan bisnis, executive meeting, site visit, hingga operasional proyek perusahaan.'],
                    ['bi-gem',               'Executive Car Rental',        'Kendaraan premium pilihan eksekutif: BMW 730Li, Lexus RX, Alphard, Camry. Representatif, nyaman, dan berkesan untuk setiap perjalanan VIP.'],
                    ['bi-tools',             'Project Transportation',      'Armada operasional untuk proyek industri: Construction, Mining, Oil & Gas, Manufacturing. Tersedia Long Term & Monthly Rental.'],
                    ['bi-briefcase-fill',    'Corporate Travel Management', 'Solusi perjalanan dinas terpadu: tiket pesawat, hotel, kereta, asuransi perjalanan, visa, dan pengaturan business trip menyeluruh.'],
                ] as $i => [$icon, $title, $desc])
                <div class="gs-svc-card" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 40 }}">
                    <div class="gs-svc-card-icon">
                        <i class="bi {{ $icon }}"></i>
                    </div>
                    <div class="gs-svc-card-title">{{ $title }}</div>
                    <p class="gs-svc-card-desc">{{ $desc }}</p>
                    <a href="{{ route('front.services') }}" class="gs-svc-card-arrow" aria-label="Lihat {{ $title }}">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
                @endforeach
            </div>

            {{-- Footer CTA --}}
            <div class="gs-svc-footer" data-aos="fade-up">
                <p class="gs-svc-footer-text">
                    Grand Satya menyediakan solusi mobilitas korporasi yang terpadu   satu mitra untuk seluruh kebutuhan transportasi dan perjalanan bisnis perusahaan Anda.<br>
                    Armada premium, pengemudi profesional, dan customer support 24/7.
                </p>
                <div style="display:flex;align-items:center;justify-content:center;gap:.625rem">
                    <a href="{{ route('front.services') }}" class="gs-btn gs-btn-primary" style="border-radius:9999px;padding:.75rem 2rem">
                        Lihat Semua Layanan
                    </a>
                    <a href="{{ route('front.services') }}" class="gs-svc-footer-arrow" aria-label="Lihat semua layanan">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- =================== FLEET =================== --}}
<section id="porto" class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">

            {{-- Section head --}}
            <div class="gs-flt-head" data-aos="fade-up">
                <div class="gs-flt-eyebrow"><span></span> Armada Grand Satya</div>
                <h2 class="gs-flt-headline">Fleet Premium Terawat<br>Siap Mendukung Bisnis Anda</h2>
            </div>

            @if($fleets->isEmpty())
            <p style="text-align:center;color:#9ca3af;padding:3rem 0">Armada segera diperbarui.</p>
            @else

            {{-- Slider wrapper --}}
            <div class="gs-flt-slider-wrap" data-aos="fade-up" data-aos-delay="40">
                <div class="gs-flt-slider swiper fleetSwiper">
                    <div class="swiper-wrapper">
                        @foreach($fleets as $car)
                        <div class="swiper-slide">
                            <div class="gs-flt-card">
                                {{-- Car image --}}
                                <div class="gs-flt-card-img">
                                    @if($car->photo)
                                    <img src="{{ Storage::url($car->photo) }}" alt="{{ $car->name }}" loading="lazy"
                                         onerror="this.src='{{ asset('images/cars/car-1.jpg') }}'">
                                    @else
                                    @php
                                        $sliderFallbacks = [
                                            'luxury'=>'images/cars/lexus.jpg','mpv'=>'images/cars/innova.jpg',
                                            'suv'=>'images/cars/fortuner.jpg','eksekutif'=>'images/cars/alphard.jpg',
                                            'executive'=>'images/cars/alphard.jpg','sedan'=>'images/cars/camry.jpg',
                                        ];
                                        $sf = $sliderFallbacks[strtolower($car->class)] ?? 'images/cars/car-1.jpg';
                                    @endphp
                                    <img src="{{ asset($sf) }}" alt="{{ $car->name }}" loading="lazy">
                                    @endif
                                    {{-- Class badge floats on image --}}
                                    <span class="gs-flt-badge">{{ $car->class }}</span>
                                </div>
                                {{-- Card inner body --}}
                                <div class="gs-flt-card-inner">
                                {{-- Name --}}
                                <div class="gs-flt-card-name">{{ $car->name }}</div>
                                {{-- Specs --}}
                                <div class="gs-flt-specs">
                                    <div class="gs-flt-spec-row">
                                        <i class="bi bi-door-closed"></i>
                                        <span class="gs-flt-spec-label">Doors</span>
                                        <span class="gs-flt-spec-val">4</span>
                                    </div>
                                    <div class="gs-flt-spec-row">
                                        <i class="bi bi-people"></i>
                                        <span class="gs-flt-spec-label">Passengers</span>
                                        <span class="gs-flt-spec-val">{{ $car->capacity ?? ' ' }}</span>
                                    </div>
                                </div>
                                {{-- Footer: CTA --}}
                                <div class="gs-flt-card-footer">
                                    <a href="{{ route('front.fleet.show', $car->id) }}" class="gs-flt-card-cta" aria-label="Lihat {{ $car->name }}">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                                </div>{{-- end .gs-flt-card-inner --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Prev / Next --}}
                <div class="gs-flt-nav">
                    <button class="gs-flt-nav-btn fleetPrev" aria-label="Previous">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="gs-flt-nav-btn fleetNext" aria-label="Next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            {{-- Category cards --}}
            @php $classes = $fleets->pluck('class')->unique()->values(); @endphp
            @if($classes->count() > 0)
            <div class="gs-flt-cats" data-aos="fade-up" data-aos-delay="60">
                @foreach($classes->take(4) as $ci => $cls)
                @php
                    $catCar = $fleets->firstWhere('class', $cls);
                    $catFallbacks = [
                        'luxury'    => 'images/cars/lexus.jpg',
                        'mpv'       => 'images/cars/innova.jpg',
                        'suv'       => 'images/cars/fortuner.jpg',
                        'eksekutif' => 'images/cars/alphard.jpg',
                        'executive' => 'images/cars/alphard.jpg',
                        'sedan'     => 'images/cars/camry.jpg',
                        'minibus'   => 'images/cars/avanza.jpg',
                        'pick up'   => 'images/cars/hilux.jpg',
                        'double cabin' => 'images/cars/hilux.jpg',
                        'project'   => 'images/cars/hilux.jpg',
                    ];
                    $fallbackKey = strtolower($cls);
                    $catFallback = $catFallbacks[$fallbackKey] ?? 'images/cars/car-1.jpg';
                @endphp
                <a href="{{ route('front.fleet.index') }}" class="gs-flt-cat-card">
                    <div class="gs-flt-cat-img">
                        @if($catCar && $catCar->photo)
                        <img src="{{ Storage::url($catCar->photo) }}" alt="{{ $cls }}" loading="lazy"
                             onerror="this.src='{{ asset($catFallback) }}'">
                        @else
                        <img src="{{ asset($catFallback) }}" alt="{{ $cls }}" loading="lazy">
                        @endif
                    </div>
                    <div class="gs-flt-cat-body">
                        <span class="gs-flt-cat-label">{{ $cls }}</span>
                        <span class="gs-flt-cat-arrow"><i class="bi bi-arrow-up-right"></i></span>
                    </div>
                    <div class="gs-flt-cat-overlay"></div>
                </a>
                @endforeach
            </div>
            @endif

            @endif

        </div>
    </div>
</section>



{{-- =================== HOW IT WORKS =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-hiw-split">

                {{-- LEFT: text + accordion steps --}}
                <div class="gs-hiw-content" data-aos="fade-right">
                    <div class="gs-hiw-eyebrow"><span></span> Our Process</div>
                    <h2 class="gs-hiw-headline">
                        Proses Cepat &amp; Profesional<br>dari Konsultasi ke Eksekusi
                    </h2>
                    <p class="gs-hiw-lead">
                        Grand Satya merancang proses layanan yang efisien agar kebutuhan transportasi dan perjalanan bisnis perusahaan Anda tertangani dengan cepat, terstruktur, dan tanpa hambatan.
                    </p>

                    {{-- Accordion steps --}}
                    <div class="gs-hiw-steps">
                        @foreach([
                            ['Consultation',      'Diskusikan kebutuhan transportasi perusahaan Anda   jenis armada, rute, durasi, dan jumlah unit yang diperlukan.'],
                            ['Quotation',         'Tim Grand Satya menyiapkan penawaran harga terbaik yang disesuaikan dengan kebutuhan dan anggaran perusahaan Anda.'],
                            ['Confirmation',      'Konfirmasi jadwal, armada, dan detail layanan. Kami memastikan semua siap sebelum hari pelaksanaan.'],
                            ['Service Delivery',  'Tim kami menjalankan layanan sesuai standar profesional. Driver tepat waktu, armada prima, dan prosedur keselamatan terjaga.'],
                            ['Ongoing Support',   'Customer support Grand Satya siap membantu selama 24 jam. Unit pengganti tersedia jika terjadi kendala operasional.'],
                        ] as $si => [$step, $desc])
                        <div class="gs-hiw-step {{ $si === 0 ? 'open' : '' }}">
                            <button class="gs-hiw-step-btn" type="button">
                                <span class="gs-hiw-step-num">{{ $si + 1 }}.</span>
                                <span class="gs-hiw-step-label">{{ $step }}</span>
                                <i class="bi bi-chevron-down gs-hiw-step-icon"></i>
                            </button>
                            <div class="gs-hiw-step-body">
                                <p>{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- RIGHT: circle photo + floating badge + decorations --}}
                <div class="gs-hiw-visual" data-aos="fade-left">
                    {{-- Big asterisk --}}
                    <div class="gs-hiw-asterisk" aria-hidden="true"></div>
                    {{-- 4-point star --}}
                    <div class="gs-hiw-star" aria-hidden="true"></div>

                    {{-- Circle photo --}}
                    <div class="gs-hiw-circle-img">
                        <img src="{{ asset('images/content/successful-partnership.webp') }}" alt="Grand Satya BMW" loading="lazy" decoding="async" width="380" height="460">
                    </div>

                    {{-- Floating badge --}}
                    <div class="gs-hiw-badge" data-aos="zoom-in" data-aos-delay="100">
                        <div class="gs-hiw-badge-stat">5+</div>
                        <div class="gs-hiw-badge-text">Dipercaya<br>Banyak<br>clients</div>
                        <div class="gs-hiw-badge-avatars">
                            @for($a = 0; $a <= 2; $a++)
                            <div style="width:2rem;height:2rem;border-radius:50%;background:#e9eaec;border:2px solid white;display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                <i class="bi bi-person-fill" style="font-size:.875rem;color:#c4ccd4"></i>
                            </div>
                            @endfor
                            <span class="gs-hiw-badge-more">+</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =================== WHY CHOOSE US =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            {{-- Header --}}
            <div class="gs-wcu-head" data-aos="fade-up">
                <div class="gs-wcu-eyebrow"><span></span> Why Choose Grand Satya</div>
                <h2 class="gs-wcu-headline">Keunggulan yang Membuat<br>Perusahaan Mempercayai Kami</h2>
            </div>

            {{-- 3-col layout: features | circle image | features --}}
            <div class="gs-wcu-layout" data-aos="fade-up" data-aos-delay="40">

                {{-- Left features --}}
                <div class="gs-wcu-col gs-wcu-col-left" style="order:1">
                    @foreach([
                        ['bi-patch-check', 'Professional Corporate Partner',  'Kami memahami standar operasional perusahaan. Setiap layanan dirancang untuk memenuhi kebutuhan bisnis secara profesional dan efisien.'],
                        ['bi-car-front-fill',  'Premium Fleet, Selalu Prima',     'Armada selalu dalam kondisi prima dengan perawatan berkala untuk memastikan keamanan dan kenyamanan di setiap perjalanan.'],
                    ] as [$icon, $title, $desc])
                    <div class="gs-wcu-item gs-wcu-item-right">
                        <div class="gs-wcu-item-icon">
                            <i class="bi {{ $icon }}"></i>
                        </div>
                        <div>
                            <div class="gs-wcu-item-title">{{ $title }}</div>
                            <p class="gs-wcu-item-desc">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Center circle image --}}
                <div class="gs-wcu-center" style="order:0">
                    <div class="gs-wcu-circle">
                        <img src="{{ asset('images/hero/angel_atas.png') }}" alt="Grand Satya Fleet" loading="lazy">
                    </div>
                </div>

                {{-- Right features --}}
                <div class="gs-wcu-col gs-wcu-col-right" style="order:2">
                    @foreach([
                        ['bi-person-check',  'Experienced Driver',              'Seluruh pengemudi berpengalaman menangani perjalanan korporat maupun operasional proyek industri. Disiplin, rapi, dan mengutamakan keselamatan.'],
                        ['bi-headset',       '24/7 Customer Support',           'Tim Grand Satya siap memberikan bantuan kapan saja. Fast response untuk quotation, reservasi, dan kendala operasional di lapangan.'],
                    ] as [$icon, $title, $desc])
                    <div class="gs-wcu-item gs-wcu-item-left">
                        <div class="gs-wcu-item-icon">
                            <i class="bi {{ $icon }}"></i>
                        </div>
                        <div>
                            <div class="gs-wcu-item-title">{{ $title }}</div>
                            <p class="gs-wcu-item-desc">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =================== FAQ =================== --}}
<section class="gs-section">
    <div class="gs-sc gs-sc-faq">
        <div class="gs-container">
            <div class="gs-faq-split">

                {{-- Left: stacked/tilted car photos --}}
                <div class="gs-faq-photos" data-aos="fade-right">
                    <div class="gs-faq-photo gs-faq-photo--back">
                        <img src="{{ asset('images/cars/pajero.jpg') }}" alt="Grand Satya Pajero" loading="lazy">
                    </div>
                    <div class="gs-faq-photo gs-faq-photo--front">
                        @if(isset($firstFleet) && $firstFleet && $firstFleet->photo)
                        <img src="{{ Storage::url($firstFleet->photo) }}" alt="{{ $firstFleet->name }}" loading="lazy">
                        @else
                        <img src="{{ asset('images/cars/fortuner.jpg') }}" alt="Grand Satya Fortuner" loading="lazy">
                        @endif
                    </div>
                </div>

                {{-- Right: FAQ accordion --}}
                <div class="gs-faq-content" data-aos="fade-left">
                    <div class="gs-faq-eyebrow"><span></span> Pertanyaan Umum (FAQ)</div>
                    <h2 class="gs-faq-headline">Yang Perlu Anda Ketahui Tentang<br>Layanan Grand Satya</h2>

                    <div class="gs-faq-list">
                        @foreach([
                            ['Apakah tersedia paket sewa bulanan atau kontrak jangka panjang?',
                             'Ya, Grand Satya menyediakan paket sewa bulanan maupun kontrak jangka panjang yang fleksibel & ideal untuk perusahaan dan kebutuhan proyek industri.'],
                            ['Apakah Grand Satya bisa menangani operasional proyek industri?',
                             'Ya, kami memiliki armada dan pengemudi berpengalaman untuk mendukung proyek di sektor Construction, Mining, Oil & Gas, dan Manufacturing.'],
                            ['Apakah armada tersedia dengan maupun tanpa pengemudi?',
                             'Tersedia pilihan dengan maupun tanpa pengemudi. Pengemudi Grand Satya terlatih dan berpengalaman menangani perjalanan korporat dan proyek industri.'],
                            ['Apakah tersedia layanan customer support 24 jam?',
                             'Ya, Customer Support Grand Satya siap membantu selama 24 jam setiap hari via WhatsApp 0896-3646-3189 atau email cs@grandsatya.com.'],
                            ['Bagaimana cara meminta quotation?',
                             'Hubungi tim kami via WhatsApp 0896-3646-3189 atau isi formulir Request Quotation di halaman Contact. Tim kami merespons dengan cepat dan profesional.'],
                        ] as $fi => [$q, $a])
                        <div class="gs-faq-item {{ $fi === 0 ? 'open' : '' }}">
                            <button class="gs-faq-btn" type="button">
                                <span>{{ $q }}</span>
                                <i class="bi bi-chevron-up gs-faq-icon"></i>
                            </button>
                            <div class="gs-faq-body">
                                <p>{{ $a }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =================== COVERAGE AREA =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-split">
                <div data-aos="fade-right">
                    <span class="gs-eyebrow" style="margin-bottom:.875rem;display:block">  Jangkauan Layanan</span>
                    <h2 style="font-size:clamp(1.75rem,3.5vw,2.75rem);margin-bottom:1.25rem">
                        Grand Satya Hadir<br>di Seluruh Indonesia
                    </h2>
                    <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.75;margin-bottom:1.5rem">
                        Dari kawasan bisnis Jakarta hingga area proyek industri di Kalimantan dan Nusa Tenggara   Grand Satya melayani kebutuhan corporate transportation di kota-kota strategis seluruh Indonesia.
                    </p>
                    <ul style="list-style:none;padding:0;margin:0 0 2rem">
                        @foreach([
                            'Jakarta &amp; Jabodetabek',
                            'Cilegon &amp; Banten',
                            'Gresik &amp; Jawa Timur',
                            'Medan &amp; Sumatera Utara',
                            'Pekanbaru &amp; Riau',
                            'Balikpapan &amp; Kalimantan Timur',
                            'Sumba &amp; Nusa Tenggara Timur',
                        ] as $area)
                        <li style="display:flex;align-items:center;gap:.75rem;font-size:.875rem;color:#4b5563;padding:.75rem 0;border-bottom:1px solid var(--border)">
                            <i class="bi bi-check-circle-fill" style="color:var(--navy);flex-shrink:0"></i>
                            {!! $area !!}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('front.services') }}" class="gs-btn gs-btn-primary">Lihat Layanan <i class="bi bi-arrow-up-right"></i></a>
                </div>
                <div data-aos="fade-left">
                    <img src="{{ asset('images/content/map-indonesia.jpg') }}" alt="Service Area Map"
                         style="width:100%;border-radius:var(--radius-lg);box-shadow:0 12px 40px rgba(0,0,0,.1);object-fit:cover"
                         onerror="this.src='{{ asset('images/content/map-fallback.jpg') }}'">
                </div>            </div>
        </div>
    </div>
</section>

{{-- =================== OUR VALUE =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-light">
        <div class="gs-container">
            <div class="gs-section-head" data-aos="fade-up">
                <span class="gs-eyebrow">  Nilai Kami</span>
                <h2>Our Values</h2>
            </div>
            <div class="gs-grid-values">
                @foreach([
                    ['icon-integrity.png',    'Integrity',         'Kami menjunjung tinggi kejujuran, tanggung jawab, dan profesionalisme dalam setiap aspek layanan kepada pelanggan.'],
                    ['icon-professional.png', 'Excellence',        'Berkomitmen memberikan standar kualitas layanan tertinggi dalam setiap perjalanan dan penugasan operasional.'],
                    ['icon-commitment.png',   'Safety Commitment', 'Keselamatan adalah prioritas utama. Semua armada diinspeksi berkala, dilindungi asuransi, dan unit pengganti tersedia jika dibutuhkan.'],
                    ['icon-teamwork.png',     'Collaboration',     'Kerja sama yang solid dengan pelanggan menghasilkan solusi mobilitas korporasi terbaik yang sesuai kebutuhan bisnis.'],
                ] as [$icon,$title,$desc])
                <div class="gs-card" style="padding:1.75rem;text-align:center" data-aos="fade-up">
                    <img src="{{ asset('images/icons/'.$icon) }}" alt="{{ $title }}" style="max-height:4.5rem;margin:0 auto 1.25rem">
                    <div class="gs-card-title" style="margin-bottom:.5rem">{{ $title }}</div>
                    <p class="gs-card-text">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- =================== TESTIMONIALS =================== --}}
<section class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-testi-head" data-aos="fade-up">
                <div class="gs-testi-eyebrow"><span></span> Testimoni Klien</div>
                <h2 class="gs-testi-headline">Apa Kata Perusahaan yang<br>Telah Mempercayai Grand Satya</h2>
            </div>

            <div class="gs-testi-slider-wrap" data-aos="fade-up" data-aos-delay="40">
                <div class="swiper testiSwiper">
                    <div class="swiper-wrapper">
                        @foreach([
                            ['Budi Santoso',  'Corporate Manager   PT Azure Group',    'Grand Satya selalu memberikan pelayanan yang cepat dan profesional untuk kebutuhan transportasi perusahaan kami. Driver tepat waktu, armada terawat, dan tim yang sangat responsif.', 5, '1'],
                            ['Hendra Wijaya', 'Project Manager   Swadaya Graha',       'Site visit ke lokasi proyek jadi jauh lebih terorganisir dengan Grand Satya. Mereka benar-benar memahami kebutuhan operasional di lapangan dan selalu siap memberikan solusi terbaik.', 5, '3'],
                            ['Rina Kusuma',   'HR Director',                           'Grand Satya menjadi mitra transportasi utama kami untuk seluruh kebutuhan mobilitas karyawan. Pelayanan konsisten, profesional, dan harga sangat kompetitif.', 5, '4'],
                            ['Sari Dewi',     'Operations Manager',                    'Untuk kebutuhan corporate travel dan antar jemput eksekutif, Grand Satya tidak pernah mengecewakan. Koordinasi mudah, armada premium, dan support 24 jam benar-benar terasa manfaatnya.', 5, '2'],
                        ] as [$name, $role, $review, $rating, $img])
                        <div class="swiper-slide">
                            <div class="gs-testi-card">
                                <div class="gs-testi-stars">
                                    @for($s=0;$s<5;$s++)
                                    <i class="bi bi-star{{ $s < $rating ? '-fill' : '' }}"
                                       style="color:{{ $s < $rating ? '#f59e0b' : '#d1d5db' }};font-size:.9rem"></i>
                                    @endfor
                                </div>
                                <p class="gs-testi-text">"{{ $review }}"</p>
                                <div class="gs-testi-author">
                                    <div style="width:2.75rem;height:2.75rem;min-width:2.75rem;border-radius:50%;background:#e9eaec;display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                        <i class="bi bi-person-fill" style="font-size:1.375rem;color:#c4ccd4"></i>
                                    </div>
                                    <div>
                                        <div class="gs-testi-name">{{ $name }}</div>
                                        <div class="gs-testi-role">{{ $role }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Prev / Next --}}
                <div class="gs-testi-nav">
                    <button class="gs-testi-nav-btn testiPrev" aria-label="Previous">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="gs-testi-nav-btn testiNext" aria-label="Next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =================== CTA BANNER =================== --}}
<section class="gs-section">
    <div class="gs-cta-outer">
        <div class="gs-cta-card" data-aos="fade-up">

            {{-- Left: text --}}
            <div class="gs-cta-left">
                <h2 class="gs-cta-headline">Let's Move Your<br>Business Forward</h2>
                <p class="gs-cta-sub">Percayakan kebutuhan transportasi dan perjalanan bisnis perusahaan Anda kepada Grand Satya. Hubungi tim kami hari ini untuk mendapatkan solusi terbaik sesuai kebutuhan perusahaan Anda.</p>
                <div style="display:flex;align-items:center;gap:.625rem;margin-top:1.75rem">
                    <a href="{{ route('front.contact') }}" class="gs-btn gs-btn-primary" style="border-radius:9999px;padding:.7rem 1.75rem">
                        Request Quotation
                    </a>
                    <a href="{{ route('front.contact') }}" class="gs-cta-arrow" aria-label="Contact our team">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            {{-- Right: car image --}}
            <div class="gs-cta-right">
               
                <img src="{{ asset('images/hero/hero-services.jpg') }}" alt="Grand Satya Innova" loading="lazy">
            
            </div>
        </div>
    </div>
</section>

{{-- =================== BLOG =================== --}}
@if(isset($recentPosts) && $recentPosts->isNotEmpty())
<section id="blog" class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-blog-head" data-aos="fade-up">
                <div class="gs-blog-eyebrow"><span></span> Artikel Terkini</div>
                <h2 class="gs-blog-headline">Tips & Panduan dari<br>Grand Satya Trans</h2>
            </div>

            <div class="gs-blog-layout">
                {{-- Featured post (first) --}}
                @php $featured = $recentPosts->first(); $sidePosts = $recentPosts->skip(1)->take(3); @endphp

                <a href="{{ route('front.blog.show', $featured->slug) }}" class="gs-blog-featured" data-aos="fade-right">
                    @if($featured->photo)
                    <img src="{{ Storage::url($featured->photo) }}" alt="{{ $featured->title }}" loading="lazy">
                    @else
                    <div class="gs-blog-featured-placeholder"></div>
                    @endif
                    <div class="gs-blog-featured-overlay"></div>
                    <div class="gs-blog-featured-body">
                        <div class="gs-blog-meta-pill">
                            <i class="bi bi-calendar3"></i>
                            {{ $featured->published_at->translatedFormat('F j, Y') }}
                        </div>
                        <h3 class="gs-blog-featured-title">{{ $featured->title }}</h3>
                    </div>
                    <span class="gs-blog-featured-arrow"><i class="bi bi-arrow-up-right"></i></span>
                </a>

                {{-- Side posts --}}
                <div class="gs-blog-side">
                    @foreach($sidePosts as $si => $post)
                    <div class="gs-blog-side-item" data-aos="fade-left" data-aos-delay="{{ $si * 40 }}">
                        <a href="{{ route('front.blog.show', $post->slug) }}" class="gs-blog-side-thumb">
                            @if($post->photo)
                            <img src="{{ Storage::url($post->photo) }}" alt="{{ $post->title }}" loading="lazy">
                            @else
                            <div class="gs-blog-side-thumb-placeholder"></div>
                            @endif
                        </a>
                        <div class="gs-blog-side-body">
                            <div class="gs-blog-side-meta">
                                <i class="bi bi-calendar3"></i>
                                {{ $post->published_at->translatedFormat('F j, Y') }}
                            </div>
                            <a href="{{ route('front.blog.show', $post->slug) }}" class="gs-blog-side-title">
                                {{ $post->title }}
                            </a>
                            <a href="{{ route('front.blog.show', $post->slug) }}" class="gs-blog-read-story">
                                Baca Artikel
                                <span class="gs-blog-read-dot"><i class="bi bi-arrow-up-right"></i></span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

{{-- =================== GALLERY =================== --}}
@if(!$galleryPhotos->isEmpty())
<section id="gallery" class="gs-section">
    <div class="gs-sc bg-light">
        <div class="gs-container">
            <div style="display:flex;align-items:flex-end;justify-content:space-between;flex-wrap:wrap;gap:1rem;margin-bottom:2.5rem" data-aos="fade-up">
                <div>
                    <span class="gs-eyebrow" style="margin-bottom:.75rem;display:block">  Portfolio</span>
                    <h2 style="font-size:clamp(1.75rem,3.5vw,2.75rem)">Galeri Armada & Layanan Kami</h2>
                </div>
                <a href="{{ route('front.gallery') }}" class="gs-btn gs-btn-outline">Lihat Semua <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="gs-grid-gallery">
                @foreach($galleryPhotos->take(6) as $i => $photo)
                <div style="overflow:hidden;border-radius:var(--radius-lg);border:1.5px solid var(--border)" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 40 }}">
                    <img src="{{ Storage::url($photo->photo) }}" alt="{{ $photo->caption ?? 'Grand Satya Gallery' }}"
                         style="width:100%;aspect-ratio:4/3;object-fit:cover;transition:transform .3s;display:block"
                         onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform=''" loading="lazy">
                    @if($photo->caption)<p style="text-align:center;font-size:.8rem;color:#4b5563;margin:.75rem 0;font-weight:600">{{ $photo->caption }}</p>@endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif

{{-- =================== CONTACT =================== --}}
<section id="contact" class="gs-section">
    <div class="gs-sc bg-white">
        <div class="gs-container">
            <div class="gs-section-head" data-aos="fade-up">
                <span class="gs-eyebrow">  Hubungi Kami</span>
                <h2>Request Quotation &amp; Konsultasi</h2>
            </div>
            <div class="gs-contact-grid">
                <div style="display:flex;flex-direction:column;gap:1rem" data-aos="fade-right">
                    @foreach([['bi-geo-alt-fill','Lokasi Kantor','Talavera Office Park lt.11<br>Jl. T.B. Simatupang Kav 22-26<br>Jakarta Selatan 12430',null],['bi-envelope-fill','Email','cs@grandsatya.com','mailto:cs@grandsatya.com'],['bi-telephone-fill','WhatsApp / Telepon','+62 896-3646-3189','https://api.whatsapp.com/send?phone=6289636463189']] as [$icon,$label,$value,$href])
                    <div class="gs-contact-card">
                        <div class="gs-contact-icon"><i class="bi {{ $icon }}"></i></div>
                        <div>
                            <p style="font-weight:700;color:var(--navy);font-size:.8rem;margin:0 0 .3rem;text-transform:uppercase;letter-spacing:.08em">{{ $label }}</p>
                            @if($href)<a href="{{ $href }}" style="color:var(--text-muted);font-size:.875rem;text-decoration:none;line-height:1.65">{{ $value }}</a>
                            @else<p style="color:var(--text-muted);font-size:.875rem;line-height:1.65;margin:0">{!! $value !!}</p>@endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <div data-aos="fade-left">
                    <form action="{{ route('postRequest') }}" method="post"
                          style="background:var(--light-bg);border-radius:var(--radius-lg);padding:2rem;border:1.5px solid var(--border)">
                        @csrf
                        @if(session('success'))
                        <div style="background:#f0fdf4;border:1px solid #86efac;color:#166534;border-radius:var(--radius-lg);padding:.875rem 1.25rem;font-size:.875rem;margin-bottom:1.25rem">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="gs-form-grid">
                            <input type="text" name="name" placeholder="Nama / Perusahaan Anda" required class="gs-input">
                            <input type="email" name="email" placeholder="Email Perusahaan" required class="gs-input">
                        </div>
                        <div class="gs-form-group">
                            <input type="text" name="subject" placeholder="Kebutuhan Layanan (Corporate Rental / Project / Travel Management)" required class="gs-input">
                        </div>
                        <div class="gs-form-group">
                            <textarea name="message" rows="5" placeholder="Ceritakan kebutuhan transportasi perusahaan Anda..." required class="gs-input gs-textarea"></textarea>
                        </div>
                        <button type="submit" class="gs-btn gs-btn-primary" style="width:100%;border-radius:var(--radius-lg);padding:1rem">
                            Kirim Request Quotation <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fleet slider
    if (typeof Swiper !== 'undefined' && document.querySelector('.fleetSwiper')) {
        var fleetSwiper = new Swiper('.fleetSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.fleetNext',
                prevEl: '.fleetPrev',
            },
            breakpoints: {
                576:  { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 4, spaceBetween: 24 },
            }
        });
    }

    // Testimonials slider
    if (typeof Swiper !== 'undefined' && document.querySelector('.testiSwiper')) {
        var testiSwiper = new Swiper('.testiSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            navigation: {
                nextEl: '.testiNext',
                prevEl: '.testiPrev',
            },
            breakpoints: {
                640:  { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 24 },
            }
        });
    }

    // How It Works accordion
    document.querySelectorAll('.gs-hiw-step-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var step = btn.closest('.gs-hiw-step');
            var isOpen = step.classList.contains('open');
            document.querySelectorAll('.gs-hiw-step').forEach(function(s) { s.classList.remove('open'); });
            if (!isOpen) step.classList.add('open');
        });
    });

    // FAQ accordion
    document.querySelectorAll('.gs-faq-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = btn.closest('.gs-faq-item');
            var isOpen = item.classList.contains('open');
            document.querySelectorAll('.gs-faq-item').forEach(function(i) { i.classList.remove('open'); });
            if (!isOpen) item.classList.add('open');
        });
    });
});
</script>
@endpush


