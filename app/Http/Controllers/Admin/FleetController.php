<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fleet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FleetController extends Controller
{
    public function index()
    {
        $fleets = Fleet::all();
        return view('admin.fleets.index', compact('fleets'));
    }

    public function create()
    {
        return view('admin.fleets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required',
            'class'       => 'required',
            'capacity'    => 'required|integer',
            'photo'       => 'required|image|mimes:jpeg,png,webp|max:2048',
            'description' => 'nullable',
        ]);

        $photoPath = $request->file('photo')->store('fleets', 'public');

        Fleet::create([
            'name'        => $request->name,
            'class'       => $request->class,
            'capacity'    => $request->capacity,
            'photo'       => $photoPath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.fleets.index')->with('success', 'Armada berhasil ditambahkan');
    }

    public function show(Fleet $fleet)
    {
        return view('admin.fleets.show', compact('fleet'));
    }

    public function edit(Fleet $fleet)
    {
        return view('admin.fleets.edit', compact('fleet'));
    }

    public function update(Request $request, Fleet $fleet)
    {
        $request->validate([
            'name'        => 'required',
            'class'       => 'required',
            'capacity'    => 'required|integer',
            'photo'       => 'nullable|image|mimes:jpeg,png,webp|max:2048',
            'description' => 'nullable',
        ]);

        $data = [
            'name'        => $request->name,
            'class'       => $request->class,
            'capacity'    => $request->capacity,
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($fleet->photo);
            $data['photo'] = $request->file('photo')->store('fleets', 'public');
        }

        $fleet->update($data);

        return redirect()->route('admin.fleets.index')->with('success', 'Armada berhasil diupdate');
    }

    public function destroy(Fleet $fleet)
    {
        if ($fleet->photo && Storage::disk('public')->exists($fleet->photo)) {
            Storage::disk('public')->delete($fleet->photo);
        }
        $fleet->delete();
        return redirect()->route('admin.fleets.index')->with('success', 'Armada berhasil dihapus');
    }
}
