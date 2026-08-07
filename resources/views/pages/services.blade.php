@extends('layouts.front')

@section('title', 'Services — Grand Satya | Corporate Car Rental, Project Transport & Travel Management')
@section('meta_description', 'Grand Satya menyediakan layanan Corporate Car Rental, Executive Car Rental, Project Transportation, Professional Driver Service, Airport Transfer, dan Corporate Travel Management di seluruh Indonesia.')
@section('og_title',       'Layanan Grand Satya — Corporate Car Rental & Travel Management')
@section('og_description', 'Satu mitra untuk semua kebutuhan transportasi dan perjalanan bisnis perusahaan Anda. Corporate Rental, Executive Fleet, Project Transport, dan Travel Management di seluruh Indonesia.')
@section('og_image',        asset('images/hero/hero2.png'))

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images//hero/hero2.png") }}');
}
.gs-svc-nv-card {
    background: white;
    border: 1.5px solid var(--border);
    border-radius: 1.25rem;
    padding: 1.75rem;
    display: flex; flex-direction: column;
    gap: .75rem;
    transition: all .3s;
    position: relative;
}
.gs-svc-nv-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(0,0,0,.1);
    border-color: rgba(232,71,10,.25);
}
.gs-svc-nv-icon {
    width: 3.5rem; height: 3.5rem; border-radius: var(--radius-md);
    background: var(--orange-light);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem; color: var(--orange); margin-bottom: .25rem;
}
.gs-svc-nv-title { font-size: 1rem; font-weight: 800; color: var(--navy); }
.gs-svc-nv-desc { font-size: .875rem; color: var(--text-muted); line-height: 1.65; flex: 1; margin: 0; }
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero" style="border-radius:1.5rem">
        <div class="gs-container">
            <h1>Our Services</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">Services</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>

{{-- ======= SERVICES LIST ======= --}}
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:3rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">★ Core Services</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Solusi Mobilitas Korporasi<br>yang Terintegrasi</h2>
            <p style="color:var(--text-muted);font-size:.9375rem;max-width:36rem;margin:1rem auto 0;line-height:1.75">
                Satu mitra untuk seluruh kebutuhan transportasi dan perjalanan bisnis perusahaan Anda.
            </p>
        </div>
        <div class="gs-grid-services">
            @foreach([
                ['bi-car-front-fill',    'Corporate Car Rental',        'Penyewaan kendaraan untuk perjalanan dinas, kunjungan bisnis, executive meeting, site visit, hingga operasional proyek perusahaan. Tersedia paket harian, bulanan, dan kontrak jangka panjang.'],
                ['bi-gem',               'Executive Car Rental',        'Pilihan kendaraan premium untuk kebutuhan eksekutif: BMW 730Li, Lexus RX, Alphard, Camry. Representatif, nyaman, dan berkesan untuk tamu VIP dan direksi.'],
                ['bi-airplane-fill',     'Airport Transfer',            'Layanan jemput-antar bandara tepat waktu untuk tamu perusahaan dan perjalanan dinas. Driver profesional, tarif transparan, dan gratis waiting time.'],
                ['bi-person-badge-fill', 'Professional Driver Service', 'Pengemudi profesional berpengalaman, disiplin, berpenampilan rapi, dan memahami standar operasional korporasi maupun kebutuhan proyek industri.'],
                ['bi-tools',             'Project Transportation',      'Penyediaan armada operasional untuk proyek industri: Construction, Mining, Oil & Gas, Manufacturing. Tersedia Long Term Rental dan Monthly Rental.'],
                ['bi-briefcase-fill',    'Corporate Travel Management', 'Solusi perjalanan bisnis terpadu: tiket pesawat, hotel, kereta, airport transfer, asuransi perjalanan, visa & passport assistance, dan business trip arrangement.'],
            ] as $i => [$icon,$title,$desc])
            <div class="gs-svc-nv-card" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                <div class="gs-svc-nv-icon">
                    <i class="bi {{ $icon }}"></i>
                </div>
                <div class="gs-svc-nv-title">{{ $title }}</div>
                <p class="gs-svc-nv-desc">{{ $desc }}</p>
                <a href="{{ route('front.contact') }}" class="gs-arrow-cta" aria-label="{{ $title }}" style="align-self:flex-start;margin-top:.5rem">
                    <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======= TRUSTED PARTNERS ======= --}}
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">★ Klien Kami</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Dipercaya oleh Perusahaan-Perusahaan Terkemuka</h2>
        </div>
        <div style="display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:2.5rem 3rem" data-aos="fade-up" data-aos-delay="80">
            @foreach([
                ['azure.png','Azure'],
                ['swadayagraha.png','Swadaya Graha'],
                ['makadia.jpg','Makadia Group'],
                ['client-8.png','Client'],
                ['swadaya-raya.png','Swadaya Raya'],
            ] as [$img,$alt])
            <img src="{{ asset('images/clients/'.$img) }}" alt="{{ $alt }}" loading="lazy"
                 style="max-height:2.5rem;width:auto;object-fit:contain;opacity:.7;filter:grayscale(1);transition:all .3s"
                 onmouseover="this.style.opacity='1';this.style.filter='grayscale(0)'"
                 onmouseout="this.style.opacity='.7';this.style.filter='grayscale(1)'"
                 onerror="this.style.display='none'">
            @endforeach
        </div>
    </div>
</section>

{{-- ======= TESTIMONIALS ======= --}}
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">★ Testimoni Klien</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Apa Kata Perusahaan yang<br>Telah Mempercayai Grand Satya</h2>
        </div>
        <div class="gs-grid-services" style="gap:1.5rem">
            @foreach([
                ['Budi Santoso','Corporate Manager — PT Azure Group','Grand Satya selalu memberikan pelayanan yang cepat dan profesional untuk kebutuhan transportasi perusahaan kami. Driver tepat waktu, armada terawat, dan tim sangat responsif.',5,'0'],
                ['Hendra Wijaya','Project Manager — Swadaya Graha','Kebutuhan transportasi proyek industri kami tertangani dengan sangat baik oleh Grand Satya. Mereka benar-benar memahami kebutuhan operasional di lapangan.',5,'2'],
                ['Rina Kusuma','HR Director','Grand Satya menjadi mitra transportasi utama kami untuk seluruh kebutuhan mobilitas karyawan. Pelayanan konsisten dan profesional.',5,'1'],
            ] as [$name,$role,$text,$stars,$img])
            <div class="gs-testi-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="gs-testi-stars">
                    @for($s=0;$s<5;$s++)
                    <i class="bi bi-star{{ $s < $stars ? '-fill' : '' }}" style="color:{{ $s < $stars ? '#f59e0b' : '#d1d5db' }};font-size:.9rem"></i>
                    @endfor
                </div>
                <p class="gs-testi-text">"{{ $text }}"</p>
                <div class="gs-testi-author">
                    <img src="{{ asset('images/drivers/driver-'.($loop->index+1).'.jpg') }}" alt="{{ $name }}" loading="lazy">
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
