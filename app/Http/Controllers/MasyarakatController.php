<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function index(){
        return view('masyarakat.index');
    }

    public function storePengduan(Request $request){

       //dd($request->all());

        $filename='';

        if($request->hasFile('foto')){
            $filename= date('YmdHis') . "." . $request->getClientOriginalExtension();
            $request->foto->move(public_path('/images'),$filename);
        }

        Pengaduan::create([
            'isi_laporan' => $request->isi_laporan,
            'foto' => $filename,
            'nik' => Auth::user()->id,
        ]);
     
        return redirect('index-masyarakat')->with('success','Product created successfully.');
}

}
