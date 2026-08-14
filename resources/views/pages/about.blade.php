@extends('layouts.front')

@section('title', 'About Us — Grand Satya | Rental Kendaraan Mobil & Alat Berat')
@section('meta_description', 'Grand Satya didirikan tahun 2021 sebagai perusahaan rental kendaraan mobil dan alat berat terpercaya di Indonesia. Mitra strategis untuk kebutuhan sewa kendaraan operasional, eksekutif, proyek, dan heavy equipment.')
@section('og_title',       'About Grand Satya — Rental Kendaraan Mobil & Alat Berat')
@section('og_description', 'Didirikan tahun 2021, Grand Satya hadir sebagai mitra terpercaya untuk kebutuhan rental kendaraan mobil dan alat berat di Indonesia. Melayani sewa mobil, kendaraan proyek, dan heavy equipment.')
@section('og_image',        asset('images/hero/hero2.png'))

@php use Illuminate\Support\Facades\Storage; @endphp

@push('styles')
<style>
/* ── Page Hero ─────────────────────────────────── */
.gs-page-hero {
    background-image: url('{{ asset("images/hero/hero2.png") }}');
}

/* ── Intro split grid ──────────────────────────── */
.gs-about-nv-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2.5rem;
    align-items: center;
}
@media (min-width: 1024px) {
    .gs-about-nv-grid { grid-template-columns: 1fr 1fr; gap: 4rem; }
}

/* ── Photo stacked layout — mobile (xs) ────────── */
.gs-about-nv-photos {
    position: relative;
    min-height: 440px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}
.gs-about-nv-photo-main {
    width: 75%;
    border-radius: 1.5rem;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,.15);
    position: relative;
    z-index: 2;
}
.gs-about-nv-photo-main img {
    width: 100%; height: 380px; object-fit: cover; display: block;
}
.gs-about-nv-photo-side {
    position: absolute; top: 0; right: 0; width: 50%;
    border-radius: 1.5rem; overflow: hidden;
    box-shadow: 0 12px 40px rgba(0,0,0,.15); z-index: 3;
    border: 4px solid white;
}
.gs-about-nv-photo-side img {
    width: 100%; height: 240px; object-fit: cover; display: block;
}
.gs-about-nv-asterisk {
    position: absolute; top: 8%; left: 5%;
    font-size: 3rem; color: var(--orange);
    animation: gs-spin-slow 18s linear infinite;
    z-index: 1; user-select: none;
}

/* xs: stack vertically, no overlap */
@media (max-width: 479px) {
    .gs-about-nv-photos {
        flex-direction: column;
        align-items: center;
        min-height: auto;
        gap: .75rem;
    }
    .gs-about-nv-photo-main {
        position: relative; width: 100%; z-index: 2;
    }
    .gs-about-nv-photo-main img  { height: 210px; }
    .gs-about-nv-photo-side {
        position: relative !important;
        top: auto !important; right: auto !important;
        width: 78% !important;
        border: 3px solid white;
    }
    .gs-about-nv-photo-side img  { height: 150px; }
    .gs-about-nv-asterisk        { display: none; }
}
@media (min-width: 480px) and (max-width: 767px) {
    .gs-about-nv-photos       { min-height: 300px; }
    .gs-about-nv-photo-main img { height: 260px; }
    .gs-about-nv-photo-side img { height: 170px; }
}
@media (min-width: 768px) and (max-width: 1023px) {
    .gs-about-nv-photos       { min-height: 380px; }
    .gs-about-nv-photo-main img { height: 320px; }
    .gs-about-nv-photo-side img { height: 210px; }
}

/* ── Stat card ─────────────────────────────────── */
.gs-stat-nv {
    background: white;
    border: 1.5px solid var(--border);
    border-radius: 1rem;
    padding: 1.25rem 1.5rem;
    text-align: center;
    transition: all .3s;
}
.gs-stat-nv:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(0,0,0,.1);
    border-color: rgba(245,158,11,.2);
}
.gs-stat-nv-num {
    font-size: 2rem; font-weight: 800; color: var(--orange);
    line-height: 1; margin-bottom: .25rem;
}
.gs-stat-nv-label { font-size: .8rem; color: var(--text-muted); font-weight: 600; }

@media (max-width: 479px) {
    .gs-stat-nv { padding: 1rem; }
    .gs-stat-nv-num { font-size: 1.625rem; }
}

/* ── Why choose us items — mobile left-align ───── */
@media (max-width: 1023px) {
    .gs-about-wcu-item {
        text-align: left !important;
    }
    .gs-about-wcu-item > div:first-child {
        margin-left: 0 !important;
    }
}

/* ── Vision / Mission tabs ─────────────────────── */
.gs-vm-tabs {
    display: inline-flex;
    gap: .35rem;
    background: #f3f4f6;
    border-radius: 9999px;
    padding: .35rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
    justify-content: center;
}
.gs-vm-tab {
    padding: .6rem 1.5rem;
    border-radius: 9999px;
    border: none;
    background: transparent;
    font-family: 'Outfit', sans-serif;
    font-size: .875rem;
    font-weight: 700;
    color: var(--text-muted);
    cursor: pointer;
    transition: all .25s;
    white-space: nowrap;
}
.gs-vm-tab:hover { color: var(--navy); }
.gs-vm-tab.active {
    background: var(--orange);
    color: white;
    box-shadow: 0 4px 14px rgba(232,75,42,.35);
}
.gs-vm-panel { display: none; }
.gs-vm-panel.active { display: block; }

.gs-vm-split {
    display: grid;
    grid-template-columns: 1fr;
    gap: 3rem;
    align-items: center;
    padding-top: .5rem;
}
@media (min-width: 1024px) {
    .gs-vm-split { grid-template-columns: 1fr 1fr; gap: 4rem; }
}
.gs-vm-text { display: flex; flex-direction: column; }

.gs-vm-image-wrap {
    display: flex;
    justify-content: center;
}
.gs-vm-image {
    position: relative;
    border-radius: 1.5rem;
    overflow: visible;
    width: 100%;
    max-width: 480px;
}
.gs-vm-image img {
    width: 100%;
    height: 360px;
    object-fit: cover;
    border-radius: 1.5rem;
    display: block;
    box-shadow: 0 20px 60px rgba(0,0,0,.15);
}
@media (max-width: 479px) { .gs-vm-image img { height: 220px; } }
@media (min-width: 480px) and (max-width: 767px) { .gs-vm-image img { height: 280px; } }

.gs-vm-badge {
    position: absolute;
    bottom: -1.25rem;
    left: 1.5rem;
    background: white;
    border: 1.5px solid var(--border);
    border-radius: 1rem;
    padding: .875rem 1.25rem;
    display: flex;
    align-items: center;
    gap: .875rem;
    box-shadow: 0 8px 32px rgba(0,0,0,.1);
    min-width: 160px;
}
.gs-vm-badge > i {
    font-size: 1.5rem;
    color: var(--orange);
    flex-shrink: 0;
}
@media (max-width: 479px) {
    .gs-vm-badge { left: .875rem; bottom: -.875rem; padding: .625rem 1rem; }
}

.gs-vm-values-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.25rem;
}
@media (max-width: 479px) { .gs-vm-values-grid { grid-template-columns: 1fr; } }
@media (min-width: 1024px) { .gs-vm-values-grid { grid-template-columns: repeat(4, 1fr); } }

.gs-vm-value-card {
    background: white;
    border: 1.5px solid var(--border);
    border-radius: 1.25rem;
    padding: 1.75rem 1.5rem;
    transition: all .3s;
}
.gs-vm-value-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,.1);
    border-color: rgba(13,27,46,.2);
}

/* ── Drivers grid ─────────────────────────────── */
@media (max-width: 479px) {
    .gs-grid-drivers { grid-template-columns: 1fr 1fr; gap: .75rem; }
}
@media (min-width: 480px) and (max-width: 767px) {
    .gs-grid-drivers { grid-template-columns: repeat(2, 1fr); gap: 1rem; }
}
@media (min-width: 768px) and (max-width: 1023px) {
    .gs-grid-drivers { grid-template-columns: repeat(3, 1fr); gap: 1rem; }
}

/* ── Testimonials auto-fit ─────────────────────── */
@media (min-width: 540px) and (max-width: 1023px) {
    .gs-testi-grid-about {
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)) !important;
    }
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero" style="border-radius:1.5rem">
        <div class="gs-container">
            <h1>About Grand Satya</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">About Us</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>

{{-- ======= INTRO / SPLIT ======= --}}
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div class="gs-about-nv-grid">

            {{-- Photos --}}
            <div class="gs-about-nv-photos" data-aos="fade-right">
                <div class="gs-about-nv-asterisk" aria-hidden="true">✦</div>
                <div class="gs-about-nv-photo-main">
                    <img src="{{ asset('anyar/img/p2.png') }}"
                         alt="Tim Profesional Grand Satya" loading="lazy">
                </div>
                
            </div>

            {{-- Content --}}
            <div data-aos="fade-left">
                <span class="gs-eyebrow-orange">&#9733; Tentang Grand Satya</span>
                <h2 style="font-size:clamp(1.625rem,3.5vw,2.75rem);margin-bottom:1.25rem;line-height:1.15">
                    Mitra Terpercaya Rental<br>Kendaraan &amp; Alat Berat
                </h2>
                <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.75;margin-bottom:1rem">
                    Grand Satya adalah perusahaan yang bergerak di bidang
                    <strong>Rental Kendaraan Mobil</strong> dan
                    <strong>Rental Alat Berat</strong> — menyediakan solusi sewa lengkap
                    untuk kebutuhan operasional perusahaan, kendaraan proyek, hingga
                    heavy equipment industri di seluruh Indonesia.
                </p>
                <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.75;margin-bottom:2rem">
                    Didirikan pada tahun 2021, Grand Satya hadir sebagai mitra terpercaya bagi
                    perusahaan yang membutuhkan kendaraan dan alat berat handal dengan standar
                    keamanan, ketersediaan unit, dan ketepatan jadwal yang tinggi.
                </p>

                {{-- Feature rows --}}
                <div style="display:flex;flex-direction:column;gap:0">
                    @foreach([
                        ['bi-patch-check',  'Armada Lengkap & Terawat',
                         'Kendaraan mobil dan alat berat selalu dalam kondisi prima dengan perawatan berkala oleh teknisi berpengalaman. Inspeksi rutin dilakukan sebelum setiap penyerahan unit.'],
                        ['bi-tools',        'Heavy Equipment Bersertifikat',
                         'Alat berat kami memenuhi standar operasional industri. Operator tersertifikat dan berpengalaman tersedia untuk mendukung proyek konstruksi, tambang, dan migas.'],
                        ['bi-shield-check', 'Safety First & Fully Insured',
                         'Seluruh unit dilengkapi perlindungan asuransi serta prosedur keselamatan ketat. Unit pengganti tersedia jika terjadi kendala di lapangan.'],
                    ] as [$icon, $title, $desc])
                    <div style="display:flex;align-items:flex-start;gap:1rem;padding:1.125rem 0;border-bottom:1px solid var(--border)">
                        <div style="width:2.75rem;height:2.75rem;min-width:2.75rem;border-radius:50%;background:var(--orange-light);display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:var(--orange);flex-shrink:0">
                            <i class="bi {{ $icon }}"></i>
                        </div>
                        <div>
                            <div style="font-size:.9375rem;font-weight:800;color:var(--navy);margin-bottom:.25rem">{{ $title }}</div>
                            <p style="font-size:.8125rem;color:var(--text-muted);line-height:1.65;margin:0">{{ $desc }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div style="margin-top:2rem">
                    <a href="{{ route('front.contact') }}" class="gs-btn gs-btn-primary">
                        Request Quotation <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ======= VISION MISSION ======= --}}
<section class="gs-section gs-vm-section" style="background:white">
    <div class="gs-container">

        {{-- Section Header --}}
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">&#9733; Visi &amp; Misi</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem);margin-bottom:1rem">
                Mendorong keunggulan dan inovasi<br class="d-none d-md-block">dalam layanan rental kendaraan &amp; alat berat
            </h2>

            {{-- Tab Switcher --}}
            <div class="gs-vm-tabs" role="tablist" aria-label="Visi Misi Navigation">
                <button class="gs-vm-tab active" role="tab" data-tab="vision"   aria-selected="true"  aria-controls="gs-vm-panel-vision">
                    Visi Kami
                </button>
                <button class="gs-vm-tab"        role="tab" data-tab="mission"  aria-selected="false" aria-controls="gs-vm-panel-mission">
                    Misi Kami
                </button>
                <button class="gs-vm-tab"        role="tab" data-tab="values"   aria-selected="false" aria-controls="gs-vm-panel-values">
                    Nilai Kami
                </button>
            </div>
        </div>

        {{-- ── VISION PANEL ── --}}
        <div id="gs-vm-panel-vision" role="tabpanel" class="gs-vm-panel active" data-aos="fade-up">
            <div class="gs-vm-split">
                {{-- Text --}}
                <div class="gs-vm-text">
                    <span class="gs-eyebrow-orange" style="margin-bottom:.875rem;display:block">&#9733; Visi Kami</span>
                    <h3 style="font-size:clamp(1.5rem,3vw,2.25rem);line-height:1.2;margin-bottom:1.25rem">
                        Menjadi mitra rental kendaraan &amp; alat berat terpercaya di Indonesia
                    </h3>
                    <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.8;margin-bottom:1.75rem">
                        Menjadi perusahaan penyedia solusi rental kendaraan mobil dan alat berat terpercaya di Indonesia yang memberikan pelayanan terbaik, inovatif, aman, dan berkelanjutan untuk mendukung operasional bisnis dan proyek industri.
                    </p>
                    <div style="display:flex;flex-direction:column;gap:.875rem">
                        @foreach([
                            ['bi-patch-check-fill', 'Pelayanan Terbaik',   'Standar layanan premium untuk setiap perjalanan korporasi.'],
                            ['bi-lightbulb-fill',   'Inovatif',            'Terus berinovasi menghadirkan solusi mobilitas terkini.'],
                            ['bi-shield-fill-check','Aman & Berkelanjutan', 'Mengutamakan keselamatan dan keberlanjutan dalam setiap operasional.'],
                        ] as [$icon, $title, $desc])
                        <div style="display:flex;align-items:flex-start;gap:.875rem">
                            <div style="width:2.25rem;height:2.25rem;min-width:2.25rem;border-radius:50%;background:var(--orange-light);display:flex;align-items:center;justify-content:center;color:var(--orange);font-size:.9rem;flex-shrink:0">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                            <div>
                                <div style="font-size:.9rem;font-weight:800;color:var(--navy);margin-bottom:.2rem">{{ $title }}</div>
                                <p style="font-size:.8125rem;color:var(--text-muted);line-height:1.6;margin:0">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Image --}}
                <div class="gs-vm-image-wrap">
                    <div class="gs-vm-image">
                        <img src="{{ asset('images/hero/hero2.png') }}" alt="Visi Grand Satya" loading="lazy">
                        <div class="gs-vm-badge">
                            <i class="bi bi-star-fill"></i>
                            <div>
                                <div style="font-size:.9rem;font-weight:800;color:var(--navy)">Berdiri Sejak</div>
                                <div style="font-size:1.375rem;font-weight:800;color:var(--orange);line-height:1">2021</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── MISSION PANEL ── --}}
        <div id="gs-vm-panel-mission" role="tabpanel" class="gs-vm-panel" hidden data-aos="fade-up">
            <div class="gs-vm-split">
                {{-- Text --}}
                <div class="gs-vm-text">
                    <span class="gs-eyebrow-orange" style="margin-bottom:.875rem;display:block">&#9733; Misi Kami</span>
                    <h3 style="font-size:clamp(1.5rem,3vw,2.25rem);line-height:1.2;margin-bottom:1.25rem">
                        Berkomitmen menyediakan kendaraan dan alat berat berkualitas tinggi
                    </h3>
                    <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.8;margin-bottom:1.75rem">
                        Setiap misi kami dirancang untuk memastikan kepuasan klien dan keandalan unit dalam setiap aspek layanan rental kendaraan dan alat berat.
                    </p>
                    <div style="display:flex;flex-direction:column;gap:.875rem">
                        @foreach([
                            ['bi-patch-check-fill', 'Unit Berkualitas Tinggi',
                             'Menyediakan kendaraan dan alat berat dengan kualitas prima melalui perawatan dan inspeksi berkala.'],
                            ['bi-tools',            'Armada Lengkap & Siap Pakai',
                             'Menyediakan berbagai jenis kendaraan dan heavy equipment yang aman, terawat, dan siap beroperasi kapan pun dibutuhkan.'],
                            ['bi-person-badge-fill','Operator & Driver Profesional',
                             'Menyediakan operator alat berat bersertifikat dan driver profesional yang berpengalaman di proyek industri.'],
                            ['bi-clock-fill',       'Responsif & Tepat Jadwal',
                             'Pengiriman unit tepat waktu ke lokasi proyek. Tim kami responsif dalam menangani setiap permintaan.'],
                            ['bi-buildings-fill',   'Mitra Industri & Korporasi',
                             'Menjadi mitra terpercaya untuk perusahaan konstruksi, pertambangan, migas, manufaktur, dan korporasi.'],
                        ] as [$icon, $title, $desc])
                        <div style="display:flex;align-items:flex-start;gap:.875rem">
                            <div style="width:2.25rem;height:2.25rem;min-width:2.25rem;border-radius:50%;background:var(--orange-light);display:flex;align-items:center;justify-content:center;color:var(--orange);font-size:.9rem;flex-shrink:0">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                            <div>
                                <div style="font-size:.9rem;font-weight:800;color:var(--navy);margin-bottom:.2rem">{{ $title }}</div>
                                <p style="font-size:.8125rem;color:var(--text-muted);line-height:1.6;margin:0">{{ $desc }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- Image --}}
                <div class="gs-vm-image-wrap">
                    <div class="gs-vm-image">
                        <img src="{{ asset('images/hero/hero2.png') }}" alt="Misi Grand Satya" loading="lazy">
                        <div class="gs-vm-badge">
                            <i class="bi bi-trophy-fill"></i>
                            <div>
                                <div style="font-size:.9rem;font-weight:800;color:var(--navy)">Klien Puas</div>
                                <div style="font-size:1.375rem;font-weight:800;color:var(--orange);line-height:1">100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ── VALUES PANEL ── --}}
        <div id="gs-vm-panel-values" role="tabpanel" class="gs-vm-panel" hidden data-aos="fade-up">
            <div style="max-width:56rem;margin:0 auto">
                <div style="text-align:center;margin-bottom:2.5rem">
                    <span class="gs-eyebrow-orange" style="margin-bottom:.875rem;display:block">&#9733; Nilai Kami</span>
                    <h3 style="font-size:clamp(1.375rem,3vw,2rem);line-height:1.2;margin-bottom:.875rem">
                        Prinsip yang Melandasi Setiap Layanan Grand Satya
                    </h3>
                    <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.8;max-width:38rem;margin:0 auto">
                        Nilai-nilai ini bukan sekadar kata-kata. Ini adalah komitmen nyata yang tercermin dalam setiap interaksi dan layanan yang kami berikan.
                    </p>
                </div>
                <div class="gs-vm-values-grid">
                    @foreach([
                        ['bi-shield-check',      'var(--navy)',   'Keamanan',         'Safety First', 'Keselamatan penumpang adalah prioritas utama dalam setiap perjalanan tanpa kompromi.'],
                        ['bi-clock-fill',        'var(--orange)', 'Ketepatan Waktu',  'On Time, Every Time', 'Komitmen tepat waktu yang menjadi fondasi kepercayaan klien korporasi kami.'],
                        ['bi-person-check-fill', 'var(--navy)',   'Profesionalisme',  'Professional Standards', 'Standar perilaku dan pelayanan tertinggi di setiap aspek operasional.'],
                        ['bi-heart-fill',        'var(--orange)', 'Kepuasan Klien',   'Customer First', 'Setiap keputusan diambil dengan mempertimbangkan kepuasan dan kenyamanan klien.'],
                    ] as [$icon, $color, $label, $subtitle, $desc])
                    <div class="gs-vm-value-card">
                        <div style="width:3.5rem;height:3.5rem;border-radius:1rem;background:{{ $color }};display:flex;align-items:center;justify-content:center;font-size:1.375rem;color:white;margin-bottom:1.25rem">
                            <i class="bi {{ $icon }}"></i>
                        </div>
                        <div style="font-size:.75rem;font-weight:700;color:var(--orange);letter-spacing:.08em;text-transform:uppercase;margin-bottom:.375rem">{{ $label }}</div>
                        <div style="font-size:1rem;font-weight:800;color:var(--navy);margin-bottom:.625rem">{{ $subtitle }}</div>
                        <p style="font-size:.8125rem;color:var(--text-muted);line-height:1.65;margin:0">{{ $desc }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>



{{-- ======= STATS ======= --}}
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">&#9733; Pencapaian Kami</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Grand Satya dalam Angka</h2>
        </div>
        <div class="gs-grid-stats" data-aos="fade-up" data-aos-delay="80">
            @foreach([
                ['2021', 'Tahun Berdiri'],
                ['200+', 'Unit Tersedia'],
                ['7',    'Kota Coverage'],
                ['24/7', 'Customer Support'],
            ] as [$num, $label])
            <div class="gs-stat-nv">
                <div class="gs-stat-nv-num">{{ $num }}</div>
                <div class="gs-stat-nv-label">{{ $label }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======= WHY CHOOSE US ======= --}}
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">&#9733; Why Choose Grand Satya</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Keunggulan yang Membuat<br class="d-none d-md-block">Perusahaan Mempercayai Grand Satya</h2>
        </div>
        <div class="gs-grid-features">
            @foreach([
                ['bi-patch-check',  'Armada Lengkap & Terawat',
                 'Kendaraan dan alat berat selalu dalam kondisi prima dengan perawatan berkala dan inspeksi rutin sebelum setiap penggunaan.'],
                ['bi-shield-check', 'Safety First & Insured',
                 'Seluruh unit diasuransikan dan dirawat oleh tim maintenance. Unit pengganti siap jika terjadi kendala operasional di lapangan.'],
                ['bi-clock-fill',   'Pengiriman Tepat Waktu',
                 'Unit tiba di lokasi sesuai jadwal yang disepakati. Tim kami responsif dalam memproses permintaan sewa secara cepat dan efisien.'],
                ['bi-geo-alt-fill', 'Coverage Seluruh Indonesia',
                 'Melayani Jakarta, Cilegon, Gresik, Medan, Pekanbaru, Balikpapan, Sumba, dan wilayah industri strategis lainnya di seluruh Indonesia.'],
            ] as $i => [$icon, $title, $desc])
            <div class="gs-about-wcu-item"
                 style="text-align:center;padding:1.75rem 1.25rem;background:white;border-radius:1.25rem;border:1.5px solid var(--border)"
                 data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div style="width:3.5rem;height:3.5rem;border-radius:50%;background:var(--orange-light);display:flex;align-items:center;justify-content:center;font-size:1.375rem;color:var(--orange);margin:0 auto 1.25rem">
                    <i class="bi {{ $icon }}"></i>
                </div>
                <div style="font-size:.9375rem;font-weight:800;color:var(--navy);margin-bottom:.5rem">{{ $title }}</div>
                <p style="font-size:.8125rem;color:var(--text-muted);line-height:1.65;margin:0">{{ $desc }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======= DRIVERS / TEAM (hidden) ======= --}}
{{--
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">&#9733; Tim Profesional Kami</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Tim Profesional<br class="d-none d-md-block">Berpengalaman di Bidangnya</h2>
        </div>

        @if(isset($teamMembers) && $teamMembers->isNotEmpty())
        <div class="gs-grid-drivers">
            @foreach($teamMembers->take(8) as $i => $member)
            <div style="border-radius:1.25rem;overflow:hidden;border:1.5px solid var(--border);display:flex;flex-direction:column"
                 data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 80 }}">
                <div style="aspect-ratio:3/4;overflow:hidden;background:var(--light-bg)">
                    @if($member->photo)
                    <img src="{{ Storage::url($member->photo) }}" alt="{{ $member->name }}"
                         style="width:100%;height:100%;object-fit:cover;transition:transform .3s"
                         onmouseover="this.style.transform='scale(1.04)'"
                         onmouseout="this.style.transform=''" loading="lazy">
                    @else
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:#e9eaec">
                        <i class="bi bi-person-fill" style="font-size:3.5rem;color:#c4ccd4"></i>
                    </div>
                    @endif
                </div>
                @if($member->name)
                <div style="padding:.875rem 1rem;border-top:1px solid var(--border)">
                    <div style="font-size:.9rem;font-weight:800;color:var(--navy);white-space:nowrap;overflow:hidden;text-overflow:ellipsis">
                        {{ $member->name }}
                    </div>
                    @if($member->role)
                    <div style="font-size:.75rem;color:var(--text-muted);margin-top:.15rem;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">
                        {{ $member->role }}
                    </div>
                    @endif
                </div>
                @endif
            </div>
            @endforeach
        </div>

        @else
        <div class="gs-grid-drivers">
            @for($i = 0; $i <= 3; $i++)
            <div style="border-radius:1.25rem;overflow:hidden;aspect-ratio:3/4;border:1.5px solid var(--border)"
                 data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <img src="{{ asset('images/drivers/driver-'.($i+1).'.jpg') }}"
                     alt="Driver Grand Satya {{ $i+1 }}"
                     style="width:100%;height:100%;object-fit:cover;transition:transform .3s"
                     onmouseover="this.style.transform='scale(1.04)'"
                     onmouseout="this.style.transform=''" loading="lazy">
            </div>
            @endfor
        </div>
        @endif
    </div>
</section>
--}}

{{-- ======= TESTIMONIALS ======= --}}
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">&#9733; Testimoni Klien</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Apa Kata Perusahaan yang<br class="d-none d-md-block">Telah Mempercayai Grand Satya</h2>
        </div>
        <div class="gs-grid-services gs-testi-grid-about" style="gap:1.5rem">
            @foreach([
                ['Budi Santoso',  'Corporate Manager',
                 'Grand Satya selalu memberikan pelayanan yang cepat dan profesional untuk kebutuhan sewa kendaraan dan alat berat proyek kami. Unit terawat, tepat jadwal, dan tim yang sangat responsif.', 5, 1],
                ['Hendra Wijaya', 'Project Manager',
                 'Mobilisasi excavator dan dump truck ke lokasi proyek jadi jauh lebih mudah dengan Grand Satya. Mereka benar-benar memahami kebutuhan operasional di lapangan.', 5, 2],
                ['Rina Kusuma',   'HR Director',
                 'Grand Satya menjadi mitra transportasi utama kami untuk seluruh kebutuhan mobilitas karyawan. Pelayanan konsisten, profesional, dan harga sangat kompetitif.', 5, 3],
            ] as [$name, $role, $text, $stars, $driverIdx])
            <div class="gs-testi-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="gs-testi-stars">
                    @for($s = 0; $s < 5; $s++)
                    <i class="bi bi-star{{ $s < $stars ? '-fill' : '' }}"
                       style="color:{{ $s < $stars ? '#f59e0b' : '#d1d5db' }};font-size:.9rem"></i>
                    @endfor
                </div>
                <p class="gs-testi-text">"{{ $text }}"</p>
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
            @endforeach
        </div>
    </div>
</section>

</main>
@endsection

@push('scripts')
<script>
(function () {
    // Vision / Mission tab switcher
    const tabs   = document.querySelectorAll('.gs-vm-tab');
    const panels = document.querySelectorAll('.gs-vm-panel');

    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            const target = tab.dataset.tab;

            tabs.forEach(function (t) {
                t.classList.remove('active');
                t.setAttribute('aria-selected', 'false');
            });
            panels.forEach(function (p) {
                p.classList.remove('active');
                p.hidden = true;
            });

            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');

            const panel = document.getElementById('gs-vm-panel-' + target);
            if (panel) {
                panel.classList.add('active');
                panel.hidden = false;
            }
        });
    });
})();
</script>
@endpush
