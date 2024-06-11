<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('Role')->where('username', '!=', 'superadmin')->get();
        $roles = Role::all();
        return view('admin.users.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:users',
            'no_hp' => 'required|unique:users',
            'password' => 'required|confirmed',
            'role_id' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        // Buat pengguna baru
        $validatedData = $validator->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan foto jika ada
        if (!empty($request->foto)) {
            $newPath = $request->file('foto')->store('fotouser', 'public');
            $validatedData['foto'] = $newPath;
        }

        // Buat URL signed dengan token
        $signedUrl = URL::signedRoute('activation', [
            'user' => $validatedData['username'],
            'token' => base64_encode($validatedData['username'] . ':' . $request->password)
        ]);

        // Simpan pengguna baru beserta URL signed
        $user = User::create(array_merge($validatedData, ['signed_url' => $signedUrl]));

        // Redirect ke halaman indeks pengguna
        return redirect()->route('users.index')->with('success', 'User Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'no_hp' => 'required|unique:users,no_hp,' . $id,
            'password' => 'required|confirmed',
            'role_id' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData = $validator->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }

        // Ambil user berdasarkan ID
        $user = User::find($id);

        // Hapus gambar lama jika ada dan foto baru diunggah
        if ($request->hasFile('foto')) {
            if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                Storage::disk('public')->delete($user->foto);
            }

            // Simpan foto baru
            $newPath = $request->file('foto')->store('fotouser', 'public');
            $validatedData['foto'] = $newPath;
        }

        // Update user
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'Berhasil Mengedit User');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success', 'Berhasil Menghapus User');
    }
}
