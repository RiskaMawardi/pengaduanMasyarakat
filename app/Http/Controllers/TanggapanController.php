<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function index($id){
        $data = Pengaduan::get();
        $data = Pengaduan::where('id',$id)->first(); 
        return view('tanggapan.form',compact('data'));
    }

    public function storeTanggapan(Request $request , $id){
        $request->validate([
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required'
        ]);

        Tanggapan::create([
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_petugas'=>Auth::user()->id,
            'id_pengaduan' => $request->id_pengaduan
        ]);

        Pengaduan::where('id',$id)->update([
            'status' => 'selesai'
        ]);

        return redirect('dashboard-admin');
    }
}
