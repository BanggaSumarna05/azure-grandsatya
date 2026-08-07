@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Edit Anggota Tim</h1>

        <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
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
                <label for="name" class="block text-xs tracking-wider uppercase text-gs-slate">Nama <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name', $teamMember->name) }}" required maxlength="100" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="role" class="block text-xs tracking-wider uppercase text-gs-slate">Jabatan <span class="text-red-500">*</span></label>
                <input type="text" id="role" name="role" value="{{ old('role', $teamMember->role) }}" required maxlength="100" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="bio" class="block text-xs tracking-wider uppercase text-gs-slate">Bio</label>
                <textarea id="bio" name="bio" rows="4" maxlength="500" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300 resize-none">{{ old('bio', $teamMember->bio) }}</textarea>
            </div>

            <div class="space-y-3">
                <label for="photo" class="block text-xs tracking-wider uppercase text-gs-slate">Foto</label>
                @if($teamMember->photo)
                    <div class="mb-2">
                        <img src="{{ Storage::url($teamMember->photo) }}" alt="{{ $teamMember->name }}" class="h-24 w-24 object-cover rounded">
                        <p class="text-xs text-gs-slate mt-1">Foto saat ini. Pilih file baru untuk mengganti.</p>
                    </div>
                @endif
                <input type="file" id="photo" name="photo" accept="image/jpeg,image/png,image/webp" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Format: JPEG, PNG, WebP. Maksimum 2 MB. Kosongkan jika tidak ingin mengganti.</p>
            </div>

            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Update
            </button>
        </form>
    </div>
@endsection
