@extends('layouts.front')

@section('title', '404 — Halaman Tidak Ditemukan | Grand Satya')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan. Kembali ke Grand Satya untuk layanan rental kendaraan dan alat berat terbaik.')

@push('styles')
<style>
.gs-error-wrap {
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: calc(72px + 3rem) 1rem 4rem;
    background: #fff;
}
.gs-error-inner {
    text-align: center;
    max-width: 36rem;
}
.gs-error-code {
    font-size: clamp(6rem, 20vw, 10rem);
    font-weight: 800;
    color: var(--navy);
    line-height: 1;
    letter-spacing: -.04em;
    opacity: .08;
    display: block;
    margin-bottom: -1rem;
}
.gs-error-title {
    font-size: clamp(1.5rem, 4vw, 2.25rem);
    font-weight: 800;
    color: var(--navy);
    margin-bottom: .875rem;
}
.gs-error-desc {
    color: var(--text-muted);
    font-size: .9375rem;
    line-height: 1.75;
    margin-bottom: 2.5rem;
}
.gs-error-links {
    display: flex;
    flex-wrap: wrap;
    gap: .75rem;
    justify-content: center;
}
</style>
@endpush

@section('content')
<div class="gs-error-wrap">
    <div class="gs-error-inner">
        <span class="gs-error-code">404</span>
        <span class="gs-eyebrow-orange" style="display:block;margin-bottom:1rem">Halaman Tidak Ditemukan</span>
        <h1 class="gs-error-title">Oops! Halaman ini<br>tidak ada.</h1>
        <p class="gs-error-desc">
            Halaman yang Anda cari mungkin sudah dipindahkan, dihapus, atau URL-nya salah.
            Jangan khawatir — Grand Satya siap membantu.
        </p>
        <div class="gs-error-links">
            <a href="{{ route('front.index') }}" class="gs-btn gs-btn-primary">
                <i class="bi bi-house-fill"></i> Kembali ke Beranda
            </a>
            <a href="{{ route('front.contact') }}" class="gs-btn gs-btn-outline">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>
@endsection
