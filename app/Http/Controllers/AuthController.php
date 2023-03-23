<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'password' => 'required',
            'no_tlp' => 'required'
        ]);

        Masyarakat::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'password' => Hash::make($request->password),
            'no_tlp' => $request->no_tlp
        ]);

        return redirect('index-register')->with('success','Registrasi Berhasil!');

    }

    //Login

    public function indexLogin(){
        return view('auth.login');
    }

    public function storelogin(Request $request){
        $credentials = $request->validate([
            'nama' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard-masyarakat');
        }
        
        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
 
    }
}
