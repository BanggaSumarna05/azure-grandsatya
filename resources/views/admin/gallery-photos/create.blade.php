@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Tambah Foto Galeri</h1>

        <form action="{{ route('admin.gallery-photos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
            @csrf
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
                <label for="photo" class="block text-xs tracking-wider uppercase text-gs-slate">Foto <span class="text-red-500">*</span></label>
                <input type="file" id="photo" name="photo" required accept="image/jpeg,image/png,image/webp" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Format: JPEG, PNG, WebP. Maksimum 5 MB.</p>
            </div>

            <div class="space-y-3">
                <label for="caption" class="block text-xs tracking-wider uppercase text-gs-slate">Caption</label>
                <input type="text" id="caption" name="caption" value="{{ old('caption') }}" maxlength="255" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="order" class="block text-xs tracking-wider uppercase text-gs-slate">Urutan</label>
                <input type="number" id="order" name="order" value="{{ old('order', 0) }}" min="0" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Angka lebih kecil ditampilkan lebih dahulu. Default: 0.</p>
            </div>

            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Simpan
            </button>
        </form>
    </div>
@endsection
