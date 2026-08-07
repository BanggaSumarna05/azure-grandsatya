@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Edit Artikel Blog</h1>

        <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 px-6 py-4">
                    <ul class="text-sm text-red-700 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="space-y-3">
                <label for="title" class="block text-xs tracking-wider uppercase text-gs-slate">Judul <span class="text-red-500">*</span></label>
                <input type="text" id="title" name="title" value="{{ old('title', $blogPost->title) }}" required class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Slug: <span class="font-mono">{{ $blogPost->slug }}</span> (tidak berubah saat edit)</p>
            </div>

            <div class="space-y-3">
                <label for="photo" class="block text-xs tracking-wider uppercase text-gs-slate">Foto Cover</label>
                @if($blogPost->photo)
                    <div class="mb-2">
                        <img src="{{ Storage::url($blogPost->photo) }}" alt="{{ $blogPost->title }}" class="h-32 w-auto object-cover">
                        <p class="text-xs text-gs-slate mt-1">Foto saat ini. Pilih file baru untuk mengganti.</p>
                    </div>
                @endif
                <input type="file" id="photo" name="photo" accept="image/jpeg,image/png,image/webp" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Format: JPEG, PNG, WebP. Maksimum 2 MB. Kosongkan jika tidak ingin mengganti.</p>
            </div>

            <div class="space-y-3">
                <label for="excerpt" class="block text-xs tracking-wider uppercase text-gs-slate">Excerpt / Ringkasan</label>
                <textarea id="excerpt" name="excerpt" rows="3" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300 resize-none">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
            </div>

            <div class="space-y-3">
                <label for="content" class="block text-xs tracking-wider uppercase text-gs-slate">Konten <span class="text-red-500">*</span></label>
                <textarea id="content" name="content" rows="16" required class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300 resize-none">{{ old('content', $blogPost->content) }}</textarea>
            </div>

            <div class="space-y-3">
                <label for="published_at" class="block text-xs tracking-wider uppercase text-gs-slate">Tanggal Publikasi</label>
                <input type="datetime-local" id="published_at" name="published_at"
                    value="{{ old('published_at', $blogPost->published_at ? $blogPost->published_at->format('Y-m-d\TH:i') : '') }}"
                    class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Kosongkan untuk menyimpan kembali sebagai draft.</p>
            </div>

            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Update
            </button>
        </form>
    </div>
@endsection
