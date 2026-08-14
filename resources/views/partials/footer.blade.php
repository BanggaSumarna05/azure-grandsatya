{{-- Footer  Grand Satya --}}
<div class="gs-footer-outer" style="background:#fff">
<footer class="gs-footer-card">



    {{-- Main grid --}}
    <div class="gs-footer-grid">

        {{-- Col 1: Brand --}}
        <div class="gs-footer-brand">
            <a href="{{ route('front.index') }}" style="text-decoration:none;display:inline-block;margin-bottom:1rem">
                <img src="{{ asset('anyar/img/logo_gs.png') }}" alt="Grand Satya"
                     style="height:2.5rem"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='inline'">
                <span style="display:none;font-size:1.125rem;font-weight:800;color:white;letter-spacing:.06em">
                    GRAND<span style="color:var(--navy-mid)">SATYA</span>
                </span>
            </a>
            <p class="gs-footer-tagline">
                Grand Satya — Rental kendaraan mobil dan alat berat terpercaya di Indonesia. Melayani sewa mobil operasional, kendaraan proyek, dan heavy equipment untuk industri konstruksi, tambang, migas, dan korporasi.
            </p>
        </div>

        {{-- Col 2: Services --}}
        <div>
            <h5 class="gs-footer-col-title">Our Services</h5>
            <ul class="gs-footer-links">
                <li><a href="{{ route('front.services') }}">Rental Mobil Operasional</a></li>
                <li><a href="{{ route('front.services') }}">Rental Mobil Eksekutif</a></li>
                <li><a href="{{ route('front.services') }}">Rental Alat Berat</a></li>
                <li><a href="{{ route('front.services') }}">Rental Kendaraan Proyek</a></li>
                <li><a href="{{ route('front.services') }}">Dengan Operator / Driver</a></li>
            </ul>
        </div>

        {{-- Col 3: Quick Links --}}
        <div>
            <h5 class="gs-footer-col-title">Quick Links</h5>
            <ul class="gs-footer-links">
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li><a href="{{ route('front.about') }}">About Us</a></li>
                <li><a href="{{ route('front.fleet.index') }}">Fleet</a></li>
                <li><a href="{{ route('front.services') }}">Services</a></li>
                <li><a href="{{ route('front.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('front.blog') }}">Blog</a></li>
                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
            </ul>
        </div>

        {{-- Col 4: Contact Info --}}
        <div>
            <h5 class="gs-footer-col-title">Hubungi Kami</h5>
            <ul class="gs-footer-links" style="gap:.75rem">
                <li style="display:flex;align-items:flex-start;gap:.5rem;color:rgba(255,255,255,.6);font-size:.8125rem">
                    <i class="bi bi-geo-alt-fill" style="color:var(--orange);margin-top:.15rem;flex-shrink:0"></i>
                    Talavera Office Park lt.11,<br>Jl. T.B. Simatupang Kav 22-26,<br>Jakarta Selatan 12430
                </li>
                <li><a href="mailto:cs@grandsatya.com">
                    <i class="bi bi-envelope-fill" style="color:var(--orange)"></i> cs@grandsatya.com
                </a></li>
                <li style="color:rgba(255,255,255,.5);font-size:.8rem">
                    <i class="bi bi-clock-fill" style="color:var(--orange)"></i>
                    <span>Senin–Jumat 08.00–17.00 WIB<br>
                    <span style="padding-left:1.375rem">Customer Support 24 Jam</span></span>
                </li>
            </ul>
        </div>

    </div>

    {{-- Bottom bar --}}
    <div class="gs-footer-bottom">
        <p class="gs-footer-copy">
            &copy; {{ date('Y') }} Grand Satya. All rights reserved.
        </p>
       
    </div>

</footer>
</div>



