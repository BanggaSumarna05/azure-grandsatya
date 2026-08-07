@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
            <div>
                <h1 class="font-display text-4xl tracking-tightest">Manajemen User</h1>
            </div>
            <a href="{{ route('admin.users.create') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Tambah User
            </a>
        </div>

        <div class="border border-gs-stone">
            <table class="w-full">
                <thead class="bg-gs-ink text-gs-cream">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Nama</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Email</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Status</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($users as $user)
                        <tr class="border-t border-gs-stone">
                            <td class="px-8 py-6">{{ $user->nama }}</td>
                            <td class="px-8 py-6">{{ $user->email }}</td>
                            <td class="px-8 py-6">
                                @if($user->status == 3)
                                    <span class="inline-block px-3 py-1 text-xs bg-red-100 text-red-700">Non-Aktif</span>
                                @else
                                    <span class="inline-block px-3 py-1 text-xs bg-green-100 text-green-700">Aktif</span>
                                @endif
                            </td>
                            <td class="px-8 py-6 text-sm flex items-center gap-4 flex-wrap">
                                <a href="{{ route('admin.users.edit', $user) }}" class="text-gs-navy hover:text-gs-gold">Edit</a>
                                @if($user->status != 3)
                                    <form action="{{ route('admin.users.update', $user) }}" method="POST" class="inline">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="nama" value="{{ $user->nama }}">
                                        <input type="hidden" name="email" value="{{ $user->email }}">
                                        <input type="hidden" name="status" value="3">
                                        <button type="submit" class="text-yellow-600 hover:text-yellow-800">Nonaktifkan</button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-8 py-10 text-center text-gs-slate">Belum ada user.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
