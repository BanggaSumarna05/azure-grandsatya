<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryPhotoController extends Controller
{
    public function index()
    {
        $photos = GalleryPhoto::orderBy('order')->orderBy('id')->get();
        return view('admin.gallery-photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.gallery-photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'   => 'required|image|mimes:jpeg,png,webp|max:5120',
            'caption' => 'nullable|max:255',
            'order'   => 'nullable|integer|min:0',
        ]);

        $photoPath = $request->file('photo')->store('gallery', 'public');

        GalleryPhoto::create([
            'photo'   => $photoPath,
            'caption' => $request->caption,
            'order'   => $request->order ?? 0,
        ]);

        return redirect()->route('admin.gallery-photos.index')->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(GalleryPhoto $galleryPhoto)
    {
        return view('admin.gallery-photos.edit', compact('galleryPhoto'));
    }

    public function update(Request $request, GalleryPhoto $galleryPhoto)
    {
        $request->validate([
            'photo'   => 'nullable|image|mimes:jpeg,png,webp|max:5120',
            'caption' => 'nullable|max:255',
            'order'   => 'nullable|integer|min:0',
        ]);

        $data = [
            'caption' => $request->caption,
            'order'   => $request->order ?? $galleryPhoto->order,
        ];

        if ($request->hasFile('photo')) {
            if (Storage::disk('public')->exists($galleryPhoto->photo)) {
                Storage::disk('public')->delete($galleryPhoto->photo);
            }
            $data['photo'] = $request->file('photo')->store('gallery', 'public');
        }

        $galleryPhoto->update($data);

        return redirect()->route('admin.gallery-photos.index')->with('success', 'Foto berhasil diupdate');
    }

    public function destroy(GalleryPhoto $galleryPhoto)
    {
        if (Storage::disk('public')->exists($galleryPhoto->photo)) {
            Storage::disk('public')->delete($galleryPhoto->photo);
        }
        $galleryPhoto->delete();
        return redirect()->route('admin.gallery-photos.index')->with('success', 'Foto berhasil dihapus');
    }
}
