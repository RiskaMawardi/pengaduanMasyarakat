<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

    public function indexLaporan(){
        //$data = Tanggapan::select('pengaduan.*', 'tanggapan.tanggapan','tanggapan.tgl_tanggapan')->leftjoin('pengaduan', 'pengaduan.id', '=', 'tanggapan.id_pengaduan')->get();

        // $data = Pengaduan::leftjoin('tanggapan', 'tanggapan.id_pengaduan', '=', 'pengaduan.id')->select('pengaduan.*','tanggapan.tanggapan')->get();
        //$data = Tanggapan::();
        // $projects = DB::table('pengaduan')
        // ->leftJoin('tanggapan', 'pengaduan.id', '=', 'tanggapan.id_pengaduan')
        // ->get('tgl_tanggapan','tanggapan')
        $data = DB::table('tanggapan')
        ->leftjoin('pengaduan', 'tanggapan.id_pengaduan', '=', 'pengaduan.id')
        ->select('tanggapan.*', 'pengaduan.nik','pengaduan.foto','pengaduan.isi_laporan','pengaduan.created_at')
        ->get();

        return view('admin.laporan.index',compact('data'));
    }
}
