@extends('layouts.front')

@section('title', 'Armada — Grand Satya | Rental Kendaraan Mobil & Alat Berat')
@section('meta_description', 'Lihat daftar lengkap armada Grand Satya. Mobil operasional, eksekutif, kendaraan proyek, hingga alat berat (excavator, bulldozer, crane, dump truck) siap disewa.')
@section('og_title',       'Armada Grand Satya — Rental Kendaraan Mobil & Alat Berat')
@section('og_description', 'Pilihan unit lengkap: Alphard, Fortuner, Innova, Hiace, Double Cabin, Dump Truck, Excavator, Bulldozer, Crane. Terawat, berasuransi, dan siap melayani.')
@section('og_image',        asset('images/hero/hero-fleet.jpg'))

@php use Illuminate\Support\Facades\Storage; @endphp

@push('preload')
<link rel="preload" href="{{ asset('images/hero/hero-fleet.jpg') }}" as="image" fetchpriority="high">
@endpush

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images/hero/hero2.png") }}');
}
/* Fleet sidebar toggle button — mobile only */
.gs-fleet-filter-toggle {
    display: none;
    width: 100%;
    align-items: center;
    justify-content: space-between;
    padding: .875rem 1.25rem;
    background: white;
    border: 1.5px solid var(--border);
    border-radius: var(--radius-md);
    font-family: 'Outfit', sans-serif;
    font-size: .9375rem;
    font-weight: 700;
    color: var(--navy);
    cursor: pointer;
    margin-bottom: 1rem;
}
@media (max-width: 1023px) {
    .gs-fleet-filter-toggle { display: flex; }
    .gs-fleet-sidebar {
        display: none;
        position: static;
        margin-bottom: 1.5rem;
    }
    .gs-fleet-sidebar.open { display: block; }
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero" style="border-radius:1.5rem">
        <div class="gs-container">
            <h1>Our Fleet</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">Fleet</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>
<section class="gs-section" style="background:white">
    <div class="gs-container">
        <div class="gs-fleet-layout">

            {{-- Mobile filter toggle --}}
            <button class="gs-fleet-filter-toggle" id="fleetFilterToggle" type="button">
                <span><i class="bi bi-funnel-fill" style="margin-right:.5rem"></i>Filter Kendaraan</span>
                <i class="bi bi-chevron-down" id="fleetFilterChevron"></i>
            </button>

            {{-- Sidebar --}}
            <aside class="gs-fleet-sidebar" id="fleetSidebar" data-aos="fade-right">
                <input type="search" id="fleetSearch" placeholder="Search ..."
                       aria-label="Search fleet">

                <p class="gs-fleet-sidebar-title">Kategori Unit</p>
                @php
                    $classes = $fleets->pluck('class')->unique()->sort()->values();
                @endphp
                @foreach($classes as $cls)
                <label class="gs-fleet-sidebar-check">
                    <input type="checkbox" class="fleet-class-filter" value="{{ strtolower($cls) }}">
                    {{ $cls }}
                </label>
                @endforeach

                <button id="fleetSearchBtn" class="gs-btn gs-btn-primary" style="width:100%;margin-top:1.5rem;justify-content:center">
                    Search
                </button>
            </aside>

            {{-- Grid --}}
            <div>
                <div class="gs-grid-fleet" id="fleetGrid">
                    @forelse($fleets as $i => $fleet)
                    <div class="gs-fleet-nv-card fleet-item"
                         data-name="{{ strtolower($fleet->name) }}"
                         data-category="{{ strtolower($fleet->class) }}"
                         data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 60 }}">
                        <div class="gs-fleet-nv-thumb">
                            <span class="gs-fleet-nv-badge">{{ $fleet->class }}</span>
                            @if($fleet->photo)
                            <img src="{{ Storage::url($fleet->photo) }}" alt="{{ $fleet->name }}" loading="lazy"
                                 onerror="this.style.display='none'">
                            @else
                            <i class="bi bi-truck" style="font-size:3rem;color:#d1d5db;position:relative;z-index:1"></i>
                            @endif
                        </div>
                        <div class="gs-fleet-nv-body">
                            <div class="gs-fleet-nv-name">{{ $fleet->name }}</div>
                            <div class="gs-fleet-nv-specs">
                                @php $isHeavy = str_contains(strtolower($fleet->class), 'alat berat') || str_contains(strtolower($fleet->class), 'heavy'); @endphp
                                <div class="gs-fleet-nv-spec">
                                    <i class="bi bi-tag"></i>&nbsp; {{ $fleet->class }}
                                </div>
                                <div class="gs-fleet-nv-spec">
                                    <i class="bi bi-{{ $isHeavy ? 'gear' : 'people' }}"></i>&nbsp;
                                    {{ $isHeavy ? 'Kapasitas' : 'Penumpang' }} &nbsp; {{ $fleet->capacity ?? '—' }}
                                </div>
                            </div>
                            <div class="gs-fleet-nv-footer">
                                <a href="{{ route('front.fleet.show', $fleet->id) }}"
                                   style="font-size:.8rem;font-weight:600;color:var(--navy);text-decoration:none">
                                    View Detail
                                </a>
                                <a href="{{ route('front.fleet.show', $fleet->id) }}" class="gs-arrow-cta" aria-label="Lihat {{ $fleet->name }}">
                                    <i class="bi bi-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div style="text-align:center;padding:4rem;color:#9ca3af;grid-column:1/-1">
                        <i class="bi bi-truck" style="font-size:3rem;display:block;margin-bottom:1rem;opacity:.4"></i>
                        <p style="font-size:.9375rem;font-weight:600">Unit sedang diperbarui.</p>
                    </div>
                    @endforelse
                </div>

                <div id="noResults" style="display:none;text-align:center;padding:3rem;color:#9ca3af">
                    <i class="bi bi-search" style="font-size:2.5rem;display:block;margin-bottom:.75rem;opacity:.4"></i>
                    <p style="font-weight:600">Tidak ada kendaraan yang cocok.</p>
                </div>
            </div>

        </div>
    </div>
</section>
</main>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Fleet sidebar mobile toggle
    var toggleBtn = document.getElementById('fleetFilterToggle');
    var sidebar   = document.getElementById('fleetSidebar');
    var chevron   = document.getElementById('fleetFilterChevron');
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function() {
            var open = sidebar.classList.toggle('open');
            if (chevron) chevron.style.transform = open ? 'rotate(180deg)' : '';
        });
    }

    var items    = document.querySelectorAll('.fleet-item');
    var search   = document.getElementById('fleetSearch');
    var checks   = document.querySelectorAll('.fleet-class-filter');
    var noRes    = document.getElementById('noResults');

    function applyFilter() {
        var q = (search ? search.value.toLowerCase().trim() : '');
        var active = Array.from(checks).filter(function(c){ return c.checked; }).map(function(c){ return c.value; });
        var visible = 0;
        items.forEach(function(item) {
            var name = item.getAttribute('data-name') || '';
            var cat  = item.getAttribute('data-category') || '';
            var matchQ = !q || name.includes(q);
            var matchCat = active.length === 0 || active.includes(cat);
            if (matchQ && matchCat) { item.style.display = ''; visible++; }
            else { item.style.display = 'none'; }
        });
        if (noRes) noRes.style.display = visible === 0 ? 'block' : 'none';
    }

    if (search) search.addEventListener('input', applyFilter);
    checks.forEach(function(c){ c.addEventListener('change', applyFilter); });
    var btn = document.getElementById('fleetSearchBtn');
    if (btn) btn.addEventListener('click', applyFilter);
});
</script>
@endpush

@endsection
