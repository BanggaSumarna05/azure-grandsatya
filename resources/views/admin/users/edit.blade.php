@extends('layouts.admin')

@section('content')
    <div class="max-w-3xl mx-auto px-6 lg:px-12">
        <h1 class="font-display text-4xl tracking-tightest mb-12">Edit User</h1>

        <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-10">
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
                <label for="nama" class="block text-xs tracking-wider uppercase text-gs-slate">Nama <span class="text-red-500">*</span></label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required maxlength="100" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="email" class="block text-xs tracking-wider uppercase text-gs-slate">Email <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required maxlength="255" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="password" class="block text-xs tracking-wider uppercase text-gs-slate">Password Baru</label>
                <input type="password" id="password" name="password" minlength="8" maxlength="255" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                <p class="text-xs text-gs-slate">Kosongkan jika tidak ingin mengubah password. Minimal 8 karakter.</p>
            </div>

            <div class="space-y-3">
                <label for="status" class="block text-xs tracking-wider uppercase text-gs-slate">Status</label>
                <select id="status" name="status" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
                    <option value="1" {{ old('status', $user->status) == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="3" {{ old('status', $user->status) == 3 ? 'selected' : '' }}>Non-Aktif</option>
                </select>
            </div>

            <div class="space-y-3">
                <label for="telp" class="block text-xs tracking-wider uppercase text-gs-slate">Telepon</label>
                <input type="text" id="telp" name="telp" value="{{ old('telp', $user->telp) }}" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="nik" class="block text-xs tracking-wider uppercase text-gs-slate">NIK</label>
                <input type="text" id="nik" name="nik" value="{{ old('nik', $user->nik) }}" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <div class="space-y-3">
                <label for="dob" class="block text-xs tracking-wider uppercase text-gs-slate">Tanggal Lahir</label>
                <input type="date" id="dob" name="dob" value="{{ old('dob', $user->dob) }}" class="w-full bg-white border border-gs-stone px-5 py-4 focus:ring-0 focus:border-gs-ink transition-colors duration-300">
            </div>

            <button type="submit" class="inline-flex items-center justify-center px-10 py-4 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Update
            </button>
        </form>
    </div>
@endsection
