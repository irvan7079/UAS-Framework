<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);
        if ($request->password == $request->confirm_password) {
            $usernameExist = User::where("username", $request->username)->first();
            if ($usernameExist) {
                session()->flash('error', 'Username sudah digunakan!');
                return redirect('/register');
            }
            User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            session()->flash('success', 'Akun berhasil dibuat!');
            return redirect('/register');
        } else {
            session()->flash('error', 'Konfirmasi password anda salah!');
            return redirect('/register');
        }
    }
    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($data)) {
            if ($request->username == "admin" && $request->password == "admin"){
                return redirect('/admin/adminmenu');
            } else {
                return redirect('/user/usermenu');
            }
        } else {
            session()->flash('error', 'Username atau Password anda salah!');
            return redirect('/auth');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
