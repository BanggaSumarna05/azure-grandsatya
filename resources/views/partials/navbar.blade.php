@php
    $currentPage = $currentPage ?? 'home';
@endphp

<nav id="mainNav" aria-label="Main navigation">
    <div id="navInner">

        {{-- Logo --}}
        <a href="{{ route('front.index') }}" class="nav-logo-link" aria-label="Grand Satya Home">
            <img id="navLogo" src="{{ asset('anyar/img/logo_gs.png') }}" alt="Grand Satya"
                 onerror="this.style.display='none';document.getElementById('navBrandText').style.display='inline'">
            <span id="navBrandText" style="display:none" class="nav-brand-text">
                GRAND<span>SATYA</span>
            </span>
        </a>

        {{-- Desktop Links --}}
        <ul class="nav-links" role="list">
            <li>
                <a href="{{ route('front.index') }}" class="nav-link-item {{ $currentPage==='home' ? 'active' : '' }}">
                    Home
                </a>
            </li>

            {{-- Services Mega Menu --}}
            <li class="nav-has-mega" id="navItemServices">
                <button class="nav-link-item nav-mega-trigger {{ in_array($currentPage,['services']) ? 'active' : '' }}" aria-haspopup="true" aria-expanded="false" type="button">
                    Services <i class="bi bi-chevron-down nav-mega-chevron"></i>
                </button>
                <div class="nav-mega-panel" id="megaServices" role="region">
                    <div class="nav-mega-inner">

                        {{-- Col 1: Highlight card --}}
                        <div class="nav-mega-highlight">
                            <div class="nav-mega-hl-eyebrow"> Core Services</div>
                            <h3 class="nav-mega-hl-title">Solusi Rental<br>Lengkap & Terpadu</h3>
                            <p class="nav-mega-hl-desc">Satu mitra untuk seluruh kebutuhan sewa kendaraan mobil dan alat berat perusahaan Anda.</p>
                            <a href="{{ route('front.services') }}" class="nav-mega-hl-cta">
                                Lihat Semua Layanan <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>

                        {{-- Col 2 & 3: Bento service cards --}}
                        <div class="nav-mega-bento">
                            @foreach([
                                ['bi-car-front-fill',    'Rental Mobil Operasional',    'Sewa harian, mingguan, bulanan untuk kebutuhan operasional.',route('front.services')],
                                ['bi-gem',               'Rental Mobil Eksekutif',      'Alphard, Camry, Fortuner untuk tamu VIP dan pimpinan.',      route('front.services')],
                                ['bi-truck',             'Rental Alat Berat',           'Excavator, bulldozer, crane untuk proyek konstruksi & tambang.',route('front.services')],
                                ['bi-tools',             'Rental Kendaraan Proyek',     'Double cabin, pickup, dump truck untuk lapangan industri.',  route('front.services')],
                                ['bi-person-badge-fill', 'Dengan Operator/Driver',      'Operator alat berat & driver profesional berpengalaman.',    route('front.services')],
                                ['bi-clipboard-check',   'Kontrak Jangka Panjang',      'Paket bulanan & tahunan dengan harga kompetitif.',           route('front.services')],
                            ] as [$icon, $title, $desc, $url])
                            <a href="{{ $url }}" class="nav-bento-card">
                                <div class="nav-bento-icon"><i class="bi {{ $icon }}"></i></div>
                                <div class="nav-bento-title">{{ $title }}</div>
                                <div class="nav-bento-desc">{{ $desc }}</div>
                            </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </li>

            {{-- Fleet Mega Menu --}}
            <li class="nav-has-mega" id="navItemFleet">
                <button class="nav-link-item nav-mega-trigger {{ in_array($currentPage,['fleet']) ? 'active' : '' }}" aria-haspopup="true" aria-expanded="false" type="button">
                    Fleet <i class="bi bi-chevron-down nav-mega-chevron"></i>
                </button>
                <div class="nav-mega-panel" id="megaFleet" role="region">
                    <div class="nav-mega-inner">

                        {{-- Col 1: Highlight --}}
                        <div class="nav-mega-highlight">
                            <div class="nav-mega-hl-eyebrow"> Armada Grand Satya</div>
                            <h3 class="nav-mega-hl-title">Kendaraan & Alat<br>Berat Siap Pakai</h3>
                            <p class="nav-mega-hl-desc">Pilihan lengkap dari kendaraan penumpang eksekutif hingga alat berat industri.</p>
                            <a href="{{ route('front.fleet.index') }}" class="nav-mega-hl-cta">
                                Lihat Semua Armada <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>

                        {{-- Bento fleet categories --}}
                        <div class="nav-mega-bento">
                            @foreach([
                                ['bi-gem',               'Eksekutif',      'Alphard · Camry · Fortuner · Innova',              route('front.fleet.index')],
                                ['bi-car-front-fill',    'Operasional',    'Avanza · Xenia · Ertiga · Pickup',                 route('front.fleet.index')],
                                ['bi-truck-front-fill',  'Angkutan Grup',  'Hiace · Elf · Medium Bus · Big Bus',               route('front.fleet.index')],
                                ['bi-truck',             'Alat Berat',     'Excavator · Bulldozer · Motor Grader · Crane',     route('front.fleet.index')],
                                ['bi-tools',             'Kendaraan Proyek','Double Cabin · Dump Truck · Tronton · Mixer',    route('front.fleet.index')],
                                ['bi-shield-check',      'Terawat & Aman', 'Semua unit diasuransikan & diinspeksi berkala.',   route('front.fleet.index')],
                            ] as [$icon, $title, $desc, $url])
                            <a href="{{ $url }}" class="nav-bento-card">
                                <div class="nav-bento-icon"><i class="bi {{ $icon }}"></i></div>
                                <div class="nav-bento-title">{{ $title }}</div>
                                <div class="nav-bento-desc">{{ $desc }}</div>
                            </a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </li>

            <li>
                <a href="{{ route('front.about') }}" class="nav-link-item {{ $currentPage==='about' ? 'active' : '' }}">
                    About Us
                </a>
            </li>
            <li>
                <a href="{{ route('front.gallery') }}" class="nav-link-item {{ $currentPage==='gallery' ? 'active' : '' }}">
                    Gallery
                </a>
            </li>
            <li>
                <a href="{{ route('front.blog') }}" class="nav-link-item {{ $currentPage==='blog' ? 'active' : '' }}">
                    Blog
                </a>
            </li>
            <li>
                <a href="{{ route('front.contact') }}" class="nav-link-item {{ $currentPage==='contact' ? 'active' : '' }}">
                    Contact Us
                </a>
            </li>
        </ul>

        {{-- Desktop CTA --}}
        <div class="nav-cta">
            <a href="{{ route('front.contact') }}" class="nav-book-btn">
                Request Quotation
            </a>
            <a href="{{ route('front.contact') }}" class="nav-book-icon" aria-label="Request Quotation">
                <i class="bi bi-arrow-up-right"></i>
            </a>
        </div>

        {{-- Hamburger --}}
        <button id="mobileMenuBtn" class="nav-hamburger" aria-label="Toggle menu" aria-expanded="false">
            <svg id="iconMenu" width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="iconClose" width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="navMobile" role="dialog" aria-label="Mobile navigation">
        <div class="nav-mobile-links">
            <a href="{{ route('front.index') }}"       class="nav-mobile-link {{ $currentPage==='home'?'active':'' }}"     onclick="closeMobile()">Home</a>
            <a href="{{ route('front.services') }}"    class="nav-mobile-link {{ $currentPage==='services'?'active':'' }}" onclick="closeMobile()">Services</a>
            <a href="{{ route('front.fleet.index') }}" class="nav-mobile-link {{ $currentPage==='fleet'?'active':'' }}"    onclick="closeMobile()">Fleet</a>
            <a href="{{ route('front.about') }}"       class="nav-mobile-link {{ $currentPage==='about'?'active':'' }}"    onclick="closeMobile()">About Us</a>
            <a href="{{ route('front.gallery') }}"     class="nav-mobile-link {{ $currentPage==='gallery'?'active':'' }}"  onclick="closeMobile()">Gallery</a>
            <a href="{{ route('front.blog') }}"        class="nav-mobile-link {{ $currentPage==='blog'?'active':'' }}"     onclick="closeMobile()">Blog</a>
            <a href="{{ route('front.contact') }}"     class="nav-mobile-link {{ $currentPage==='contact'?'active':'' }}"  onclick="closeMobile()">Contact Us</a>
            <div class="nav-mobile-divider">
                <a href="{{ route('front.contact') }}" class="nav-book-btn" style="justify-content:center;width:100%" onclick="closeMobile()">
                    Request Quotation
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Mega menu backdrop --}}
<div id="navBackdrop"></div>

<script>
(function() {
    var backdrop  = document.getElementById('navBackdrop');
    var openLi    = null;   // currently open <li>
    var closeTimer = null;

    function getEls(li) {
        return {
            trigger : li.querySelector('.nav-mega-trigger'),
            panel   : li.querySelector('.nav-mega-panel')
        };
    }

    function openMega(li) {
        clearTimeout(closeTimer);
        if (openLi && openLi !== li) closeMegaImmediately();

        var e = getEls(li);
        e.panel.classList.add('open');
        e.trigger.setAttribute('aria-expanded', 'true');
        e.trigger.classList.add('mega-open');
        backdrop.classList.add('show');
        openLi = li;
    }

    function schedulClose() {
        closeTimer = setTimeout(closeMegaImmediately, 120);
    }

    function closeMegaImmediately() {
        clearTimeout(closeTimer);
        if (!openLi) return;
        var e = getEls(openLi);
        e.panel.classList.remove('open');
        e.trigger.setAttribute('aria-expanded', 'false');
        e.trigger.classList.remove('mega-open');
        backdrop.classList.remove('show');
        openLi = null;
    }

    document.querySelectorAll('.nav-has-mega').forEach(function(li) {
        var e = getEls(li);

        /* --- hover (desktop) --- */
        li.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 1024) openMega(li);
        });
        li.addEventListener('mouseleave', function() {
            if (window.innerWidth >= 1024) schedulClose();
        });

        /* Keep open when mouse is inside the panel itself */
        e.panel.addEventListener('mouseenter', function() {
            clearTimeout(closeTimer);
        });
        e.panel.addEventListener('mouseleave', function() {
            schedulClose();
        });

        /* --- click (trigger button) --- */
        e.trigger.addEventListener('click', function(ev) {
            ev.stopPropagation();
            if (e.panel.classList.contains('open')) {
                closeMegaImmediately();
            } else {
                openMega(li);
            }
        });
    });

    /* Close on backdrop / outside click / Escape */
    backdrop.addEventListener('click', closeMegaImmediately);
    document.addEventListener('click', function(ev) {
        if (openLi && !openLi.contains(ev.target)) closeMegaImmediately();
    });
    document.addEventListener('keydown', function(ev) {
        if (ev.key === 'Escape') closeMegaImmediately();
    });
})();
</script>

