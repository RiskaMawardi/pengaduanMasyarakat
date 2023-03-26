<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $data = Pengaduan::get();
        return view('admin.index', compact('data'));
    }

    public function indexRegis(){
        return view('admin.auth.register');
    }

    public function regAdmin(Request $request){
        $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required'
        ]);

        Petugas::create([
            'nama_petugas' => $request->nama_petugas,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'level' => 'admin',
        ]);

        return redirect('log-admin')->with('success','Silahkan Login dengan akun Admin!');
    }

    public function loginAd(){
        return view('admin.auth.login');
    }
}
