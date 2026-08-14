<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ── Primary Meta ───────────────────────────────────────────── --}}
    <title>@yield('title', 'Grand Satya — Rental Kendaraan Mobil & Alat Berat | Sewa Mobil & Heavy Equipment Jakarta')</title>
    <meta name="description" content="@yield('meta_description', 'Grand Satya, perusahaan rental kendaraan mobil dan alat berat terpercaya di Indonesia. Melayani sewa mobil operasional, kendaraan proyek, excavator, bulldozer, crane, dan heavy equipment untuk industri. Hubungi 0896-3646-3189')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ── Open Graph ──────────────────────────────────────────────── --}}
    <meta property="og:type"        content="@yield('og_type', 'website')">
    <meta property="og:site_name"   content="Grand Satya">
    <meta property="og:locale"      content="id_ID">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:title"       content="@yield('og_title', 'Grand Satya — Rental Kendaraan Mobil & Alat Berat')">
    <meta property="og:description" content="@yield('og_description', 'Grand Satya, perusahaan rental kendaraan mobil dan alat berat terpercaya di Indonesia. Solusi lengkap untuk kebutuhan industri dan korporasi.')">
    <meta property="og:image"       content="@yield('og_image', asset('images/hero/hero2.png'))">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt"    content="Grand Satya Rental Kendaraan & Alat Berat">

    {{-- ── Twitter / X Card ───────────────────────────────────────── --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:site"        content="@grandsatya">
    <meta name="twitter:title"       content="@yield('og_title', 'Grand Satya — Rental Kendaraan Mobil & Alat Berat')">
    <meta name="twitter:description" content="@yield('og_description', 'Grand Satya, perusahaan rental kendaraan mobil dan alat berat terpercaya di Indonesia. Solusi lengkap untuk kebutuhan industri dan korporasi.')">
    <meta name="twitter:image"       content="@yield('og_image', asset('images/hero/hero2.png'))">

    {{-- ── Favicon ─────────────────────────────────────────────────── --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- ── DNS Prefetch / Preconnect ──────────────────────────────── --}}
    <link rel="dns-prefetch"  href="https://fonts.googleapis.com">
    <link rel="dns-prefetch"  href="https://fonts.gstatic.com">
    <link rel="dns-prefetch"  href="https://api.whatsapp.com">
    <link rel="preconnect"    href="https://fonts.googleapis.com">
    <link rel="preconnect"    href="https://fonts.gstatic.com" crossorigin>

    {{-- ── Preload critical assets ────────────────────────────────── --}}
    <link rel="preload" href="{{ asset('css/gs-front.css') }}" as="style">
    <link rel="preload" href="https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4TC0C4G-EiAou6Y.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('anyar/vendor/bootstrap-icons/bootstrap-icons.css') }}" as="style">

    @stack('preload')

    {{-- ── Critical CSS ────────────────────────────────────────────── --}}
    <link rel="stylesheet" href="{{ asset('css/gs-front.css') }}">

    {{-- ── Fonts ───────────────────────────────────────────────────── --}}
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- ── Defer non-critical CSS ─────────────────────────────────── --}}
    <link rel="stylesheet" href="{{ asset('anyar/vendor/bootstrap-icons/bootstrap-icons.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('anyar/vendor/swiper/swiper-bundle.min.css') }}"        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('anyar/vendor/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('anyar/vendor/swiper/swiper-bundle.min.css') }}">
    </noscript>

    @stack('styles')
</head>
<body>

    {{-- WhatsApp Float --}}
    <a href="https://api.whatsapp.com/send?phone=6289636463189&text=Hallo%21%20Saya%20ingin%20menanyakan%20rental%20kendaraan%20atau%20alat%20berat."
       class="gs-wa-float" target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    {{-- Vendor JS --}}
    <script src="{{ asset('anyar/vendor/swiper/swiper-bundle.min.js') }}" defer></script>

    <script>
    /* ── Navbar scroll ─────────────────────────────────────────────── */
    (function () {
        var nav = document.getElementById('mainNav');
        if (!nav) return;
        var ticking = false;
        function update() { nav.classList.toggle('scrolled', window.scrollY > 60); ticking = false; }
        window.addEventListener('scroll', function () { if (!ticking) { requestAnimationFrame(update); ticking = true; } }, { passive: true });
        update();
    })();

    /* ── Mobile menu ───────────────────────────────────────────────── */
    function closeMobile() {
        var m = document.getElementById('navMobile');
        var mi = document.getElementById('iconMenu');
        var mc = document.getElementById('iconClose');
        if (m)  m.classList.remove('open');
        if (mi) mi.style.display = '';
        if (mc) mc.style.display = 'none';
        document.body.classList.remove('nav-menu-open');
    }
    var mBtn = document.getElementById('mobileMenuBtn');
    if (mBtn) {
        mBtn.addEventListener('click', function () {
            var menu   = document.getElementById('navMobile');
            var isOpen = menu.classList.contains('open');
            if (isOpen) {
                closeMobile();
            } else {
                menu.classList.add('open');
                document.getElementById('iconMenu').style.display  = 'none';
                document.getElementById('iconClose').style.display = 'block';
                document.body.classList.add('nav-menu-open');
            }
        });
    }

    /* ── Scroll reveal (IntersectionObserver) ──────────────────────── */
    (function () {
        if (!('IntersectionObserver' in window)) {
            document.querySelectorAll('[data-aos]').forEach(function (el) { el.style.opacity = '1'; el.style.transform = 'none'; });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var el    = entry.target;
                    var delay = parseInt(el.getAttribute('data-aos-delay') || 0, 10);
                    setTimeout(function () { el.classList.add('gs-revealed'); }, delay);
                    io.unobserve(el);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

        document.querySelectorAll('[data-aos]').forEach(function (el) {
            el.classList.add('gs-reveal');
            var type = el.getAttribute('data-aos');
            if (type === 'fade-right')     el.classList.add('gs-reveal--right');
            else if (type === 'fade-left') el.classList.add('gs-reveal--left');
            else if (type === 'zoom-in')   el.classList.add('gs-reveal--zoom');
            io.observe(el);
        });
    })();

    /* ── Swiper auto-init ──────────────────────────────────────────── */
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Swiper !== 'undefined' && document.querySelector('.clientsSwiper')) {
            new Swiper('.clientsSwiper', {
                loop: true,
                autoplay: { delay: 2500, disableOnInteraction: false },
                slidesPerView: 2,
                spaceBetween: 32,
                breakpoints: { 576: { slidesPerView: 3 }, 992: { slidesPerView: 5 } }
            });
        }
    });
    </script>

    @stack('scripts')
</body>
</html>
