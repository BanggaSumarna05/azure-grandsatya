@extends('layouts.front')

@section('title', $post->title . ' — Grand Satya Blog')
@section('meta_description', $post->excerpt ?? Str::limit(strip_tags($post->content), 155))

{{-- Open Graph --}}
@section('og_type',        'article')
@section('og_title',       $post->title . ' — Grand Satya Blog')
@section('og_description', $post->excerpt ?? Str::limit(strip_tags($post->content), 155))
@section('og_image',       $post->photo ? Storage::url($post->photo) : asset('images/hero/hero-blog.jpg'))

@php use Illuminate\Support\Facades\Storage; @endphp

@push('scripts')
{{-- Article structured data --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": {{ Js::from($post->title) }},
  "description": {{ Js::from($post->excerpt ?? Str::limit(strip_tags($post->content), 155)) }},
  "datePublished": "{{ $post->published_at->toIso8601String() }}",
  "dateModified":  "{{ $post->updated_at->toIso8601String() }}",
  "author":  { "@type": "Organization", "name": "Grand Satya" },
  "publisher": {
    "@type": "Organization",
    "name": "Grand Satya",
    "logo": { "@type": "ImageObject", "url": "{{ asset('anyar/img/logo.png') }}" }
  },
  "image": "{{ $post->photo ? Storage::url($post->photo) : asset('images/hero/hero-blog.jpg') }}",
  "url": "{{ url()->current() }}"
}
</script>
@endpush

@push('styles')
<style>
.gs-page-hero {
    background-image: url('{{ $post->photo ? Storage::url($post->photo) : asset("images/hero/hero-blog.jpg") }}');
}
.gs-related-blog-grid {
    display: grid; grid-template-columns: 1fr; gap: 1.25rem;
}
@media (min-width: 480px) { .gs-related-blog-grid { grid-template-columns: repeat(2, 1fr); } }
@media (min-width: 640px) { .gs-related-blog-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 479px) { .gs-article-wrap { padding: 0; } }
@media (max-width: 359px) {
    .gs-blog-share-row { flex-direction: column !important; align-items: flex-start !important; }
    .gs-blog-share-row .gs-btn { width: 100%; justify-content: center; }
}
.gs-page-hero h1 { overflow-wrap: break-word; word-break: break-word; hyphens: auto; }
</style>
@endpush

@section('content')

<div class="gs-page-hero-wrap">
    <section class="gs-page-hero">
        <div class="gs-container">
            <h1 style="max-width:44rem;margin-left:auto;margin-right:auto;line-height:1.2">{{ $post->title }}</h1>
            <div style="display:flex;align-items:center;justify-content:center;gap:.875rem;flex-wrap:wrap;margin-bottom:1rem">
                <span style="display:inline-flex;align-items:center;gap:.375rem;font-size:.8rem;color:rgba(255,255,255,.6)">
                    <i class="bi bi-calendar3"></i> {{ $post->published_at->translatedFormat('d F Y') }}
                </span>
                <span style="display:inline-flex;align-items:center;gap:.375rem;font-size:.8rem;color:rgba(255,255,255,.6)">
                    <i class="bi bi-clock"></i> {{ max(1, round(str_word_count(strip_tags($post->content)) / 200)) }} min baca
                </span>
            </div>
            <nav class="gs-breadcrumb">
                <a href="{{ route('front.index') }}">Home</a>
                <span class="sep">/</span>
                <a href="{{ route('front.blog') }}">Blog</a>
                <span class="sep">/</span>
                <span class="current">{{ Str::limit($post->title, 40) }}</span>
            </nav>
        </div>
    </section>
</div>
<div class="gs-page-hero-after"></div>

<main>
<section class="gs-section" style="background:#f8f9fa">
    <div class="gs-container">
        <div class="gs-article-wrap">

            <div style="margin-bottom:1.5rem" data-aos="fade-up">
                <a href="{{ route('front.blog') }}" class="gs-btn gs-btn-outline gs-btn-sm">
                    <i class="bi bi-arrow-left"></i> Kembali ke Blog
                </a>
            </div>

            <div class="gs-article-body" data-aos="fade-up">
                @if($post->photo)
                <img src="{{ Storage::url($post->photo) }}" alt="{{ $post->title }}"
                     class="gs-article-cover" onerror="this.style.display='none'">
                @endif

                <div style="display:flex;align-items:center;gap:1.25rem;flex-wrap:wrap;margin-bottom:2rem;padding-bottom:1.25rem;border-bottom:1px solid var(--border)">
                    <span style="display:inline-flex;align-items:center;gap:.375rem;font-size:.8rem;color:var(--text-muted);font-weight:600">
                        <i class="bi bi-calendar3" style="color:var(--orange)"></i>
                        {{ $post->published_at->translatedFormat('d F Y') }}
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:.375rem;font-size:.8rem;color:var(--text-muted);font-weight:600">
                        <i class="bi bi-clock" style="color:var(--orange)"></i>
                        {{ max(1, round(str_word_count(strip_tags($post->content)) / 200)) }} min baca
                    </span>
                </div>

                <div class="gs-article-content">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <div style="margin-top:2.5rem;padding-top:1.5rem;border-top:1px solid var(--border);display:flex;align-items:center;gap:.75rem;flex-wrap:wrap"
                     class="gs-blog-share-row">
                    <span style="font-size:.75rem;font-weight:700;color:#9ca3af;text-transform:uppercase;letter-spacing:.1em">Bagikan:</span>
                    <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . url()->current()) }}"
                       target="_blank" rel="noopener" class="gs-btn gs-btn-sm"
                       style="background:#25d366;color:white;border-color:#25d366">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(url()->current()) }}"
                       target="_blank" rel="noopener" class="gs-btn gs-btn-sm"
                       style="background:#1d9bf0;color:white;border-color:#1d9bf0">
                        <i class="bi bi-twitter-x"></i> X / Twitter
                    </a>
                    <button onclick="navigator.clipboard.writeText(window.location.href).then(function(){ this.innerHTML='<i class=\'bi bi-check-lg\'></i> Disalin!';var b=this;setTimeout(function(){b.innerHTML='<i class=\'bi bi-link-45deg\'></i> Salin Link'},2000)}.bind(this))"
                            class="gs-btn gs-btn-sm gs-btn-outline">
                        <i class="bi bi-link-45deg"></i> Salin Link
                    </button>
                </div>
            </div>

        </div>

        @if(isset($relatedPosts) && $relatedPosts->isNotEmpty())
        <div style="max-width:54rem;margin:3.5rem auto 0" data-aos="fade-up">
            <div style="margin-bottom:1.75rem">
                <span class="gs-eyebrow-orange">&#9733; Baca Juga</span>
                <h3 style="font-size:1.375rem">Artikel Lainnya</h3>
            </div>
            <div class="gs-related-blog-grid">
                @foreach($relatedPosts as $related)
                <a href="{{ route('front.blog.show', $related->slug) }}" class="gs-blog-nv-card" style="text-decoration:none">
                    <div class="gs-blog-nv-thumb">
                        @if($related->photo)
                        <img src="{{ Storage::url($related->photo) }}" alt="{{ $related->title }}" loading="lazy"
                             onerror="this.parentElement.innerHTML='<div style=\'height:100%;display:flex;align-items:center;justify-content:center;color:#d1d5db;font-size:2rem\'><i class=\'bi bi-newspaper\'></i></div>'">
                        @else
                        <div style="height:100%;display:flex;align-items:center;justify-content:center;color:#d1d5db;font-size:2rem">
                            <i class="bi bi-newspaper"></i>
                        </div>
                        @endif
                    </div>
                    <div class="gs-blog-nv-body">
                        <div class="gs-blog-nv-meta">
                            <i class="bi bi-calendar3"></i> {{ $related->published_at->translatedFormat('d M Y') }}
                        </div>
                        <div class="gs-blog-nv-title" style="font-size:.875rem">{{ $related->title }}</div>
                        <span class="gs-read-more-orange">
                            Read More <span class="dot"><i class="bi bi-arrow-up-right"></i></span>
                        </span>
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
