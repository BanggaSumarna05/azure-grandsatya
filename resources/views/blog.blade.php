@extends('layouts.front')

@section('title', 'Blog — Grand Satya')
@section('meta_description', 'Baca artikel, tips, dan informasi terbaru seputar rental kendaraan dan alat berat dari Grand Satya.')
@section('og_title',       'Blog Grand Satya — Artikel & Tips Rental Kendaraan & Alat Berat')
@section('og_description', 'Temukan artikel terbaru seputar rental kendaraan, tips sewa alat berat, dan informasi industri dari Grand Satya.')
@section('og_image',        asset('images/hero/hero-blog.jpg'))

@php use Illuminate\Support\Facades\Storage; @endphp

@push('preload')
<link rel="preload" href="{{ asset('images/hero/hero-blog.jpg') }}" as="image" fetchpriority="high">
@endpush

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ asset("images/hero/hero-blog.jpg") }}');
}
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero">
        <div class="gs-container">
            <h1>Blog</h1>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <span class="current">Blog</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">

        @if($posts->isEmpty())
        <div style="text-align:center;padding:5rem 1rem;color:#9ca3af" data-aos="fade-up">
            <i class="bi bi-newspaper" style="font-size:3.5rem;display:block;margin-bottom:1rem;opacity:.4"></i>
            <p style="font-size:1rem;font-weight:600">Belum ada artikel yang dipublikasikan.</p>
        </div>
        @else

        <div class="gs-grid-blog" id="blogGrid">
            @foreach($posts as $i => $post)
            <a href="{{ route('front.blog.show', $post->slug) }}"
               class="gs-blog-nv-card"
               data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 80 }}">
                <div class="gs-blog-nv-thumb">
                    @if($post->photo)
                    <img src="{{ Storage::url($post->photo) }}" alt="{{ $post->title }}" loading="lazy"
                         onerror="this.parentElement.style.background='var(--light-bg)'">
                    @else
                    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;color:#d1d5db;font-size:3rem">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    @endif
                </div>
                <div class="gs-blog-nv-body">
                    <div class="gs-blog-nv-meta">
                        <i class="bi bi-calendar3"></i>
                        {{ $post->published_at->translatedFormat('F j, Y') }}
                    </div>
                    <div class="gs-blog-nv-title">{{ $post->title }}</div>
                    <span class="gs-read-more-orange">
                        Read More
                        <span class="dot"><i class="bi bi-arrow-up-right"></i></span>
                    </span>
                </div>
            </a>
            @endforeach
        </div>

        {{-- Pagination --}}
        @if($posts->hasPages())
        <div style="margin-top:3rem;display:flex;justify-content:center;align-items:center;gap:.5rem;flex-wrap:wrap" data-aos="fade-up">
            @if($posts->onFirstPage())
            <span class="gs-btn gs-btn-outline gs-btn-sm" style="opacity:.4;cursor:default;border-radius:50%;width:2.5rem;height:2.5rem;padding:0">
                <i class="bi bi-chevron-left"></i>
            </span>
            @else
            <a href="{{ $posts->previousPageUrl() }}" class="gs-btn gs-btn-outline gs-btn-sm" style="border-radius:50%;width:2.5rem;height:2.5rem;padding:0">
                <i class="bi bi-chevron-left"></i>
            </a>
            @endif

            @foreach($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
            @if($page == $posts->currentPage())
            <span class="gs-btn gs-btn-primary gs-btn-sm" style="border-radius:50%;width:2.5rem;height:2.5rem;padding:0;justify-content:center">{{ $page }}</span>
            @else
            <a href="{{ $url }}" class="gs-btn gs-btn-outline gs-btn-sm" style="border-radius:50%;width:2.5rem;height:2.5rem;padding:0;justify-content:center">{{ $page }}</a>
            @endif
            @endforeach

            @if($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}" class="gs-btn gs-btn-outline gs-btn-sm" style="border-radius:50%;width:2.5rem;height:2.5rem;padding:0">
                <i class="bi bi-chevron-right"></i>
            </a>
            @else
            <span class="gs-btn gs-btn-outline gs-btn-sm" style="opacity:.4;cursor:default;border-radius:50%;width:2.5rem;height:2.5rem;padding:0">
                <i class="bi bi-chevron-right"></i>
            </span>
            @endif
        </div>
        @endif

        @endif
    </div>
</section>
</main>
@endsection
