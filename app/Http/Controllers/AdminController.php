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

    public function dataPetugas(){
        $data = Petugas::where('level','petugas')->get();
        return view('admin.data-petugas',compact('data'));
    }

    public function createPetugas(Request $request){
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
            'level' => 'petugas'
        ]);

        return redirect('data-petugas');
    }

    public function approveLaporan(Request $request){
        $id = $request->id;
        Pengaduan::where('id',$id)->update([
            'status'=>'proses',
        ]);

        return redirect(route('dashboard-admin'));
    }
}
