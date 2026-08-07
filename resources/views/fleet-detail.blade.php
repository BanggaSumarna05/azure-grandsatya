@extends('layouts.front')

@section('title', $fleet->name . ' — Grand Satya Fleet')
@section('meta_description', 'Detail armada ' . $fleet->name . ' — ' . ($fleet->description ?? 'Kendaraan profesional dari Grand Satya Transportation.'))
@section('og_title',       $fleet->name . ' — Armada Grand Satya')
@section('og_description', $fleet->description ?? 'Kendaraan profesional, terawat, dan berasuransi dari Grand Satya Corporate Transportation.')
@section('og_image',        $fleet->photo ? Storage::url($fleet->photo) : asset('images/hero/hero-fleet.jpg'))

@push('scripts')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": {{ Js::from($fleet->name) }},
  "description": {{ Js::from($fleet->description ?? 'Kendaraan profesional dari Grand Satya.') }},
  "image": "{{ $fleet->photo ? Storage::url($fleet->photo) : asset('images/hero/hero-fleet.jpg') }}",
  "brand": { "@type": "Brand", "name": "Grand Satya" },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "IDR",
    "availability": "https://schema.org/InStock",
    "seller": { "@type": "Organization", "name": "Grand Satya" }
  }
}
</script>
@endpush

@php use Illuminate\Support\Facades\Storage; @endphp

@push('preload')
<link rel="preload" href="{{ asset('images/hero/hero-fleet.jpg') }}" as="image" fetchpriority="high">
@endpush

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images/hero/hero-fleet.jpg") }}');
}
.gs-fleet-detail-grid {
    display: grid; grid-template-columns: 1fr; gap: 2rem; align-items: start;
}
@media (min-width: 1024px) { .gs-fleet-detail-grid { grid-template-columns: 1fr 1fr; gap: 2.5rem; } }
.gs-related-nv-grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;
}
@media (min-width: 480px) { .gs-related-nv-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 768px) { .gs-related-nv-grid { grid-template-columns: repeat(4, 1fr); } }
/* Fleet detail CTA buttons: stack on very small screens */
@media (max-width: 479px) {
    .gs-fleet-detail-cta { flex-direction: column; }
    .gs-fleet-detail-cta .gs-btn { width: 100%; justify-content: center; }
    /* Features 2-col stay 2-col but tighter */
    .gs-fleet-features-grid { gap: .5rem !important; }
    .gs-fleet-features-grid > div { font-size: .75rem !important; }
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero">
        <div class="gs-container">
            <h1>{{ $fleet->name }}</h1>
            <span style="display:inline-block;background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.3);color:white;font-size:.75rem;font-weight:700;padding:.35rem 1.25rem;border-radius:9999px;letter-spacing:.1em;text-transform:uppercase;margin-bottom:.875rem">
                {{ $fleet->class }}
            </span>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <a href="{{ route('front.fleet.index') }}">Fleet</a>
                <span class="sep">/</span>
                <span class="current">{{ Str::limit($fleet->name, 30) }}</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">

        <div style="margin-bottom:1.75rem" data-aos="fade-up">
            <a href="{{ route('front.fleet.index') }}" class="gs-btn gs-btn-outline gs-btn-sm">
                <i class="bi bi-arrow-left"></i> Kembali ke Fleet
            </a>
        </div>

        <div class="gs-fleet-detail-grid">

            {{-- Photo --}}
            <div data-aos="fade-right">
                <div style="background:white;border-radius:1.25rem;overflow:hidden;border:1.5px solid var(--border);box-shadow:0 4px 24px rgba(0,0,0,.06)">
                    {{-- Photo --}}
                    @if($fleet->photo)
                    <div style="padding:2rem;background:#f8f9fa;display:flex;align-items:center;justify-content:center;min-height:18rem">
                        <img src="{{ Storage::url($fleet->photo) }}" alt="{{ $fleet->name }}"
                             style="max-height:16rem;width:100%;object-fit:contain;display:block"
                             fetchpriority="high" decoding="async"
                             onerror="this.style.display='none'">
                    </div>
                    @else
                    <div style="min-height:18rem;display:flex;align-items:center;justify-content:center;background:#f8f9fa">
                        <i class="bi bi-truck" style="font-size:5rem;color:#d1d5db"></i>
                    </div>
                    @endif
                    <div style="padding:.875rem 1.25rem;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between">
                        <span style="font-size:.75rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.1em">Kategori</span>
                        <span class="gs-fleet-nv-badge" style="position:static">{{ $fleet->class }}</span>
                    </div>
                </div>
            </div>

            {{-- Info --}}
            <div data-aos="fade-left">
                <h2 style="font-size:1.875rem;margin-bottom:.75rem">{{ $fleet->name }}</h2>
                <p style="color:var(--text-muted);font-size:.9375rem;line-height:1.75;margin-bottom:2rem">
                    {{ $fleet->description ?? 'Kendaraan profesional siap pakai dengan kondisi prima, dirawat secara berkala oleh tim teknisi berpengalaman Grand Satya.' }}
                </p>

                {{-- Specs --}}
                <div style="background:white;border-radius:1.25rem;padding:1.5rem;border:1.5px solid var(--border);margin-bottom:1.5rem">
                    <p style="font-size:.7rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.15em;margin:0 0 1rem">Spesifikasi</p>
                    <table class="gs-spec-table">
                        @foreach([
                            ['bi-people-fill','Kapasitas',$fleet->capacity.' Penumpang'],
                            ['bi-tag-fill','Kelas',$fleet->class],
                            ['bi-fuel-pump-fill','Bahan Bakar','Bensin / Diesel'],
                            ['bi-shield-check','Asuransi','Tercakup penuh'],
                            ['bi-person-badge-fill','Driver','Profesional & Berlisensi'],
                        ] as [$icon,$label,$val])
                        <tr>
                            <td><i class="bi {{ $icon }}"></i>{{ $label }}</td>
                            <td>{{ $val }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                {{-- Features --}}
                <div style="background:white;border-radius:1.25rem;padding:1.5rem;border:1.5px solid var(--border);margin-bottom:2rem">
                    <p style="font-size:.7rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.15em;margin:0 0 1rem">Fasilitas</p>
                    <div class="gs-fleet-features-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:.625rem">
                        @foreach(['AC Double Blower','Musik / Hiburan','Kamera Mundur','GPS Tracker','WIFI (tersedia)','Bangku Nyaman','Bagasi Luas','24/7 Support'] as $feat)
                        <div style="display:flex;align-items:center;gap:.5rem;font-size:.8125rem;color:var(--text-dark)">
                            <i class="bi bi-check-circle-fill" style="color:var(--orange);flex-shrink:0"></i>
                            {{ $feat }}
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- CTA --}}
                <div class="gs-fleet-detail-cta" style="display:flex;flex-wrap:wrap;gap:.75rem">
                    <a href="https://api.whatsapp.com/send?phone=6289636463189&text=Hallo%21+Saya+tertarik+memesan+{{ urlencode($fleet->name) }}.+Boleh+info+lebih+lanjut%3F"
                       target="_blank" rel="noopener"
                       class="gs-btn"
                       style="background:#25d366;color:white;border-color:#25d366;box-shadow:0 4px 15px rgba(37,211,102,.3)">
                        <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
                    </a>
                    <a href="{{ route('front.contact') }}" class="gs-btn gs-btn-primary">
                        <i class="bi bi-calendar-check-fill"></i> Book Now
                    </a>
                </div>
            </div>

        </div>

        {{-- Related Fleet --}}
        @if(isset($relatedFleets) && $relatedFleets->isNotEmpty())
        <div style="margin-top:5rem" data-aos="fade-up">
            <div style="margin-bottom:1.75rem">
                <span class="gs-eyebrow-orange">★ Lihat Juga</span>
                <h3 style="font-size:1.5rem">Armada Lainnya</h3>
            </div>
            <div class="gs-related-nv-grid">
                @foreach($relatedFleets as $related)
                <a href="{{ route('front.fleet.show', $related->id) }}" class="gs-fleet-nv-card" style="text-decoration:none">
                    <div class="gs-fleet-nv-thumb">
                        @if($related->photo)
                        <img src="{{ Storage::url($related->photo) }}" alt="{{ $related->name }}" loading="lazy">
                        @else
                        <i class="bi bi-truck" style="font-size:2.5rem;color:#d1d5db"></i>
                        @endif
                    </div>
                    <div class="gs-fleet-nv-body">
                        <span class="gs-fleet-nv-badge">{{ $related->class }}</span>
                        <div class="gs-fleet-nv-name">{{ $related->name }}</div>
                        <div class="gs-fleet-nv-footer">
                            <span style="font-size:.75rem;color:#9ca3af">{{ $related->capacity }} Pax</span>
                            <span class="gs-arrow-cta"><i class="bi bi-arrow-up-right"></i></span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>
</main>
@endsection
