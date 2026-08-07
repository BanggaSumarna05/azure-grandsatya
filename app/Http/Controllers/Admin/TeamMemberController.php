<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $members = TeamMember::all();
        return view('admin.team-members.index', compact('members'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'role'  => 'required|max:100',
            'bio'   => 'nullable|max:500',
            'photo' => 'required|image|mimes:jpeg,png,webp|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('team', 'public');

        TeamMember::create([
            'name'  => $request->name,
            'role'  => $request->role,
            'bio'   => $request->bio,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.team-members.index')->with('success', 'Anggota tim berhasil ditambahkan');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name'  => 'required|max:100',
            'role'  => 'required|max:100',
            'bio'   => 'nullable|max:500',
            'photo' => 'nullable|image|mimes:jpeg,png,webp|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'role' => $request->role,
            'bio'  => $request->bio,
        ];

        if ($request->hasFile('photo')) {
            if ($teamMember->photo && Storage::disk('public')->exists($teamMember->photo)) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            $data['photo'] = $request->file('photo')->store('team', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Anggota tim berhasil diupdate');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->photo && Storage::disk('public')->exists($teamMember->photo)) {
            Storage::disk('public')->delete($teamMember->photo);
        }
        $teamMember->delete();
        return redirect()->route('admin.team-members.index')->with('success', 'Anggota tim berhasil dihapus');
    }
}
