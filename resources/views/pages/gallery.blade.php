@extends('layouts.front')

@section('title', 'Gallery — Grand Satya | Armada & Layanan Corporate Transportation')
@section('meta_description', 'Lihat galeri foto armada, layanan, dan momen-momen Grand Satya Transportation — Corporate Car Rental & Travel Management terpercaya di Indonesia.')
@section('og_title',       'Gallery Grand Satya — Armada & Layanan Corporate Transportation')
@section('og_description', 'Foto-foto armada premium, kegiatan layanan, dan momen bersama klien Grand Satya Transportation di seluruh Indonesia.')
@section('og_image',        asset('images/hero/hero-blog.jpg'))

@php use Illuminate\Support\Facades\Storage; @endphp

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images/hero/hero-blog.jpg") }}');
}
.gs-gallery-nv-item {
    overflow: hidden;
    border-radius: 1.25rem;
    border: 1.5px solid var(--border);
    background: white;
    transition: all .3s;
    cursor: pointer;
    position: relative;
}
.gs-gallery-nv-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 48px rgba(0,0,0,.1);
    border-color: rgba(245,158,11,.3);
}
.gs-gallery-nv-item img {
    width: 100%; height: 15rem;
    object-fit: cover;
    transition: transform .35s;
    display: block;
}
.gs-gallery-nv-item:hover img { transform: scale(1.06); }
.gs-gallery-nv-item:hover .gs-gallery-zoom-icon { opacity: 1; }
.gs-gallery-zoom-icon {
    position: absolute; top: 50%; left: 50%;
    transform: translate(-50%,-50%);
    width: 3rem; height: 3rem; border-radius: 50%;
    background: rgba(0,0,0,.55);
    color: white; font-size: 1.25rem;
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity .25s;
    pointer-events: none;
    z-index: 2;
}
.gs-gallery-nv-caption {
    text-align: center; font-size: .8125rem;
    color: #4b5563; font-weight: 600; padding: .75rem 1rem;
}

/* ---- Lightbox ---- */
#gs-lightbox {
    display: none;
    position: fixed;
    inset: 0;
    z-index: 99999;
    background: rgba(0,0,0,.93);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    align-items: center;
    justify-content: center;
    padding: 1rem;
}
#gs-lightbox.open { display: flex; }
#gs-lightbox img {
    max-width: 92vw;
    max-height: 88vh;
    object-fit: contain;
    border-radius: .75rem;
    box-shadow: 0 24px 80px rgba(0,0,0,.6);
    display: block;
    transition: opacity .2s;
}
#gs-lightbox-close {
    position: fixed;
    top: 1rem; right: 1.25rem;
    width: 2.75rem; height: 2.75rem;
    border-radius: 50%;
    background: rgba(255,255,255,.12);
    color: white; font-size: 1.25rem;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    border: 1.5px solid rgba(255,255,255,.2);
    transition: background .2s;
    z-index: 100001;
}
#gs-lightbox-close:hover { background: rgba(255,255,255,.25); }
#gs-lightbox-prev,
#gs-lightbox-next {
    position: fixed;
    top: 50%; transform: translateY(-50%);
    width: 3rem; height: 3rem;
    border-radius: 50%;
    background: rgba(255,255,255,.12);
    color: white; font-size: 1.25rem;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    border: 1.5px solid rgba(255,255,255,.2);
    transition: background .2s;
    z-index: 100001;
}
#gs-lightbox-prev { left: 1rem; }
#gs-lightbox-next { right: 1rem; }
#gs-lightbox-prev:hover,
#gs-lightbox-next:hover { background: rgba(255,255,255,.25); }
#gs-lightbox-caption {
    position: fixed;
    bottom: 1.25rem; left: 50%; transform: translateX(-50%);
    background: rgba(0,0,0,.55); color: rgba(255,255,255,.9);
    font-size: .8125rem; font-weight: 600;
    padding: .5rem 1.25rem; border-radius: 9999px;
    max-width: 80vw; text-align: center;
    z-index: 100001;
    white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
}
#gs-lightbox-counter {
    position: fixed;
    top: 1.125rem; left: 50%; transform: translateX(-50%);
    background: rgba(0,0,0,.5); color: rgba(255,255,255,.8);
    font-size: .75rem; font-weight: 700;
    padding: .3rem .875rem; border-radius: 9999px;
    z-index: 100001;
}
@media (max-width: 479px) {
    #gs-lightbox-prev { left: .375rem; width: 2.5rem; height: 2.5rem; font-size: 1rem; }
    #gs-lightbox-next { right: .375rem; width: 2.5rem; height: 2.5rem; font-size: 1rem; }
    .gs-gallery-nv-item img { height: 11rem; }
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero" style="border-radius:1.5rem">
        <div class="gs-container">
            <h1>Gallery</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">Gallery</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">

        <div style="text-align:center;margin-bottom:2.5rem" data-aos="fade-up">
            <span class="gs-eyebrow-orange">★ Our Portfolio</span>
            <h2 style="font-size:clamp(1.75rem,4vw,2.5rem)">Moments worth remembering</h2>
        </div>

        {{-- Filter Tabs --}}
        <div class="gs-tabs gs-tabs-center" style="margin-bottom:2rem" data-aos="fade-up">
            @foreach(['all'=>'All','events'=>'Events','gallery'=>'Gallery','service'=>'Service','fleet'=>'Fleet'] as $val => $label)
            <button class="gs-tab gallery-tab-btn {{ $val==='all' ? 'active' : '' }}" data-filter="{{ $val }}">
                {{ $label }}
            </button>
            @endforeach
        </div>

        <div class="gs-grid-gallery" id="galleryGrid">
            @forelse($galleryPhotos as $i => $photo)
            <div class="gs-gallery-nv-item gallery-item"
                 data-category="{{ $photo->category ?? 'gallery' }}"
                 data-src="{{ Storage::url($photo->photo) }}"
                 data-caption="{{ $photo->caption ?? '' }}"
                 data-index="{{ $i }}"
                 data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 70 }}"
                 role="button"
                 tabindex="0"
                 aria-label="Lihat foto {{ $photo->caption ?? 'galeri' }}">
                <img src="{{ Storage::url($photo->photo) }}"
                     alt="{{ $photo->caption ?? 'Grand Satya Gallery' }}"
                     loading="lazy">
                <div class="gs-gallery-zoom-icon" aria-hidden="true">
                    <i class="bi bi-zoom-in"></i>
                </div>
                @if($photo->caption)
                <p class="gs-gallery-nv-caption">{{ $photo->caption }}</p>
                @endif
            </div>
            @empty
            <div style="text-align:center;padding:4rem;color:#9ca3af;grid-column:1/-1" data-aos="fade-up">
                <i class="bi bi-images" style="font-size:3rem;display:block;margin-bottom:1rem;opacity:.4"></i>
                <p style="font-size:.9375rem;font-weight:600">Foto galeri segera hadir.</p>
            </div>
            @endforelse
        </div>

    </div>
</section>
</main>

{{-- Lightbox --}}
<div id="gs-lightbox" role="dialog" aria-modal="true" aria-label="Lightbox foto">
    <button id="gs-lightbox-close" aria-label="Tutup lightbox"><i class="bi bi-x-lg"></i></button>
    <button id="gs-lightbox-prev"  aria-label="Foto sebelumnya"><i class="bi bi-chevron-left"></i></button>
    <img id="gs-lightbox-img" src="" alt="Gallery photo">
    <button id="gs-lightbox-next"  aria-label="Foto berikutnya"><i class="bi bi-chevron-right"></i></button>
    <div id="gs-lightbox-caption"></div>
    <div id="gs-lightbox-counter"></div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ---- Filter tabs ---- */
    var tabs = document.querySelectorAll('.gallery-tab-btn');
    tabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { t.classList.remove('active'); });
            tab.classList.add('active');
            var f = tab.getAttribute('data-filter');
            getVisibleItems(); // rebuild visible list after filter
            document.querySelectorAll('.gallery-item').forEach(function (item) {
                item.style.display = (f === 'all' || item.getAttribute('data-category') === f) ? '' : 'none';
            });
        });
    });

    /* ---- Lightbox ---- */
    var lightbox = document.getElementById('gs-lightbox');
    var lbImg    = document.getElementById('gs-lightbox-img');
    var lbCap    = document.getElementById('gs-lightbox-caption');
    var lbCnt    = document.getElementById('gs-lightbox-counter');
    var currentIndex = 0;
    var visibleItems = [];

    function getVisibleItems() {
        visibleItems = Array.from(document.querySelectorAll('.gallery-item'))
            .filter(function (el) { return el.style.display !== 'none'; });
        return visibleItems;
    }

    function openLightbox(index) {
        getVisibleItems();
        currentIndex = Math.max(0, Math.min(index, visibleItems.length - 1));
        showSlide(currentIndex);
        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.remove('open');
        document.body.style.overflow = '';
        lbImg.src = '';
    }

    function showSlide(index) {
        var item = visibleItems[index];
        if (!item) return;
        lbImg.style.opacity = '0';
        lbImg.src = item.getAttribute('data-src') || item.querySelector('img').src;
        lbImg.alt = item.getAttribute('data-caption') || 'Grand Satya Gallery';
        lbImg.onload = function () { lbImg.style.opacity = '1'; };
        lbCap.textContent = item.getAttribute('data-caption') || '';
        lbCap.style.display = lbCap.textContent ? 'block' : 'none';
        lbCnt.textContent = (index + 1) + ' / ' + visibleItems.length;
        currentIndex = index;
    }

    // Open on item click / Enter key
    document.querySelectorAll('.gallery-item').forEach(function (item, i) {
        item.addEventListener('click', function () {
            getVisibleItems();
            var pos = visibleItems.indexOf(item);
            openLightbox(pos >= 0 ? pos : 0);
        });
        item.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); item.click(); }
        });
    });

    document.getElementById('gs-lightbox-close').addEventListener('click', closeLightbox);
    document.getElementById('gs-lightbox-prev').addEventListener('click', function () {
        showSlide((currentIndex - 1 + visibleItems.length) % visibleItems.length);
    });
    document.getElementById('gs-lightbox-next').addEventListener('click', function () {
        showSlide((currentIndex + 1) % visibleItems.length);
    });

    // Backdrop click closes
    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox || e.target === lbImg) closeLightbox();
    });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'Escape')      closeLightbox();
        if (e.key === 'ArrowLeft')   showSlide((currentIndex - 1 + visibleItems.length) % visibleItems.length);
        if (e.key === 'ArrowRight')  showSlide((currentIndex + 1) % visibleItems.length);
    });

    // Touch swipe
    var touchStartX = 0;
    lightbox.addEventListener('touchstart', function (e) { touchStartX = e.touches[0].clientX; }, { passive: true });
    lightbox.addEventListener('touchend', function (e) {
        var diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) showSlide((currentIndex + 1) % visibleItems.length);
            else          showSlide((currentIndex - 1 + visibleItems.length) % visibleItems.length);
        }
    });

    // Init visible list
    getVisibleItems();
});
</script>
@endpush

@endsection
