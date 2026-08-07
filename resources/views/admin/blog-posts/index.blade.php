@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6 mb-12">
            <div>
                <h1 class="font-display text-4xl tracking-tightest">Blog Posts</h1>
            </div>
            <a href="{{ route('admin.blog-posts.create') }}" class="inline-flex items-center justify-center px-8 py-3 bg-gs-ink text-gs-cream text-sm tracking-wide hover:bg-gs-navy transition-colors duration-300">
                Tambah Artikel
            </a>
        </div>

        <div class="border border-gs-stone">
            <table class="w-full">
                <thead class="bg-gs-ink text-gs-cream">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Judul</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Slug</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Dipublikasikan</th>
                        <th class="px-8 py-4 text-left text-xs tracking-wider uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @forelse ($posts as $post)
                        <tr class="border-t border-gs-stone">
                            <td class="px-8 py-6">{{ $post->title }}</td>
                            <td class="px-8 py-6 text-xs text-gs-slate">{{ $post->slug }}</td>
                            <td class="px-8 py-6 text-sm">
                                @if($post->published_at && $post->published_at <= now())
                                    <span class="text-green-700">{{ $post->published_at->format('d M Y') }}</span>
                                @elseif($post->published_at)
                                    <span class="text-yellow-600">Terjadwal: {{ $post->published_at->format('d M Y') }}</span>
                                @else
                                    <span class="text-gs-slate">Draft</span>
                                @endif
                            </td>
                            <td class="px-8 py-6 text-sm">
                                <a href="{{ route('front.blog.show', $post->slug) }}" target="_blank" class="text-gs-gold hover:text-gs-navy mr-4">Lihat</a>
                                <a href="{{ route('admin.blog-posts.edit', $post) }}" class="text-gs-navy hover:text-gs-gold mr-6">Edit</a>
                                <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-8 py-10 text-center text-gs-slate">Belum ada artikel blog.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
