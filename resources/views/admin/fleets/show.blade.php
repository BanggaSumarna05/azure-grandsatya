@extends('layouts.admin')

@section('content')
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-serif mb-8">{{ $fleet->name }}</h1>
        
        <div class="bg-white border border-navy-brand/20 p-6">
            <img src="{{ $fleet->photo }}" alt="{{ $fleet->name }}" class="w-full h-64 object-cover mb-4">
            <div class="mb-2">
                <span class="font-mono text-gold text-xs tracking-wider uppercase">Kelas:</span> {{ $fleet->class }}
            </div>
            <div class="mb-2">
                <span class="font-mono text-gold text-xs tracking-wider uppercase">Kapasitas:</span> {{ $fleet->capacity }}
            </div>
            <div>
                <span class="font-mono text-gold text-xs tracking-wider uppercase">Deskripsi:</span> {{ $fleet->description }}
            </div>
        </div>
    </div>
@endsection
