@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Edit Armada</h1>

        <form action="{{ route('admin.fleets.update', $fleet) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
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
                <label for="name" class="block text-xs tracking-wider uppercase text-gs-slate">Nama</label>
                <input type="text" id="name" name="name" value="{{ $fleet->name }}" required class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="class" class="block text-xs tracking-wider uppercase text-gs-slate">Kelas</label>
                <input type="text" id="class" name="class" value="{{ $fleet->class }}" required class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="capacity" class="block text-xs tracking-wider uppercase text-gs-slate">Kapasitas</label>
                <input type="number" id="capacity" name="capacity" value="{{ $fleet->capacity }}" required class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="photo" class="block text-xs tracking-wider uppercase text-gs-slate">Foto</label>
                @if($fleet->photo)
                    <div class="mb-2">
                        <img src="{{ Storage::url($fleet->photo) }}" alt="{{ $fleet->name }}" class="h-24 w-auto object-cover">
                        <p class="text-xs text-gs-slate mt-1">Foto saat ini. Pilih file baru untuk mengganti.</p>
                    </div>
                @endif
                <input type="file" id="photo" name="photo" accept="image/jpeg,image/png,image/webp" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Format: JPEG, PNG, WebP. Maksimum 2 MB. Kosongkan jika tidak ingin mengganti foto.</p>
            </div>

            <div class="space-y-3">
                <label for="description" class="block text-xs tracking-wider uppercase text-gs-slate">Deskripsi</label>
                <textarea id="description" name="description" rows="4" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300 resize-none">{{ $fleet->description }}</textarea>
            </div>

            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Update
            </button>
        </form>
    </div>
@endsection
