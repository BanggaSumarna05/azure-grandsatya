@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Dashboard</h1>
        
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white border border-gs-stone p-10">
                <h2 class="font-display text-2xl tracking-tight mb-4">Armada</h2>
                <p class="text-5xl font-display font-semibold text-gs-ink mb-4">{{ \App\Models\Fleet::count() }}</p>
                <a href="{{ route('admin.fleets.index') }}" class="text-sm tracking-wide text-gs-gold hover:text-gs-navy transition-colors duration-300">Kelola Armada</a>
            </div>
            <div class="bg-white border border-gs-stone p-10">
                <h2 class="font-display text-2xl tracking-tight mb-4">Blog Posts</h2>
                <p class="text-5xl font-display font-semibold text-gs-ink mb-4">{{ \App\Models\BlogPost::count() }}</p>
                <a href="{{ route('admin.blog-posts.index') }}" class="text-sm tracking-wide text-gs-gold hover:text-gs-navy transition-colors duration-300">Kelola Blog</a>
            </div>
            <div class="bg-white border border-gs-stone p-10">
                <h2 class="font-display text-2xl tracking-tight mb-4">Galeri</h2>
                <p class="text-5xl font-display font-semibold text-gs-ink mb-4">{{ \App\Models\GalleryPhoto::count() }}</p>
                <a href="{{ route('admin.gallery-photos.index') }}" class="text-sm tracking-wide text-gs-gold hover:text-gs-navy transition-colors duration-300">Kelola Galeri</a>
            </div>
            <div class="bg-white border border-gs-stone p-10">
                <h2 class="font-display text-2xl tracking-tight mb-4">Users</h2>
                <p class="text-5xl font-display font-semibold text-gs-ink mb-4">{{ \App\Models\User::count() }}</p>
                <a href="{{ route('admin.users.index') }}" class="text-sm tracking-wide text-gs-gold hover:text-gs-navy transition-colors duration-300">Kelola Users</a>
            </div>
        </div>
    </div>
@endsection
