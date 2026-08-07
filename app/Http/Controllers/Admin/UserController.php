<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'     => 'required|max:100',
            'email'    => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'telp'     => 'nullable',
            'nik'      => 'nullable',
            'dob'      => 'nullable|date',
        ]);

        User::create([
            'nama'     => $request->nama,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'telp'     => $request->telp,
            'nik'      => $request->nik,
            'dob'      => $request->dob,
            'status'   => 1,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil ditambahkan');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama'     => 'required|max:100',
            'email'    => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)->withTrashed()],
            'password' => 'nullable|min:8|max:255',
            'telp'     => 'nullable',
            'nik'      => 'nullable',
            'dob'      => 'nullable|date',
            'status'   => 'nullable|in:1,2,3',
        ]);

        $data = [
            'nama'   => $request->nama,
            'email'  => $request->email,
            'telp'   => $request->telp,
            'nik'    => $request->nik,
            'dob'    => $request->dob,
            'status' => $request->status ?? $user->status,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'User berhasil diupdate');
    }

    public function destroy(User $user)
    {
        $user->delete(); // soft delete
        return redirect()->route('admin.users.index')->with('success', 'User berhasil dihapus');
    }
}
