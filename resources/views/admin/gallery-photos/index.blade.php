@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
            <div>
                <h1 class="font-display text-4xl tracking-tightest">Galeri Foto</h1>
            </div>
            <a href="{{ route('admin.gallery-photos.create') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Tambah Foto
            </a>
        </div>

        <div class="border border-gs-stone">
            <table class="w-full">
                <thead class="bg-gs-ink text-gs-cream">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Foto</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Caption</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Urutan</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($photos as $photo)
                        <tr class="border-t border-gs-stone">
                            <td class="px-8 py-4">
                                <img src="{{ Storage::url($photo->photo) }}" alt="{{ $photo->caption }}" class="h-16 w-24 object-cover">
                            </td>
                            <td class="px-8 py-6">{{ $photo->caption ?? '-' }}</td>
                            <td class="px-8 py-6">{{ $photo->order }}</td>
                            <td class="px-8 py-6 text-sm">
                                <a href="{{ route('admin.gallery-photos.edit', $photo) }}" class="text-gs-navy hover:text-gs-gold mr-6">Edit</a>
                                <form action="{{ route('admin.gallery-photos.destroy', $photo) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-8 py-10 text-center text-gs-slate">Belum ada foto galeri.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
