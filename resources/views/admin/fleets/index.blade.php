@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
            <div>
                <h1 class="font-display text-4xl tracking-tightest">Daftar Armada</h1>
            </div>
            <a href="{{ route('admin.fleets.create') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Tambah Armada
            </a>
        </div>

        <div class="border border-gs-stone">
            <table class="w-full">
                <thead class="bg-gs-ink text-gs-cream">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Nama</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Kelas</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Kapasitas</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($fleets as $fleet)
                        <tr class="border-t border-gs-stone">
                            <td class="px-8 py-6">{{ $fleet->name }}</td>
                            <td class="px-8 py-6">{{ $fleet->class }}</td>
                            <td class="px-8 py-6">{{ $fleet->capacity }}</td>
                            <td class="px-8 py-6 text-sm">
                                <a href="{{ route('admin.fleets.edit', $fleet) }}" class="text-gs-navy hover:text-gs-gold mr-6">Edit</a>
                                <form action="{{ route('admin.fleets.destroy', $fleet) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
