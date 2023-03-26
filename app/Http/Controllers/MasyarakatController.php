<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    public function index(){
        $data = Masyarakat::first();
        return view('masyarakat.index' , compact('data'));
    }

    public function upload(Request $request){

       //dd($request->all());

       $request->validate([
        'nik' => 'required',
        'isi_laporan' => 'required',
        'foto' => 'required'
       ]);

        $filename='';

        if($request->hasFile('foto')){
            $filename= date('YmdHis') . "." . $request->getClientOriginalExtension();
            $request->foto->move(public_path('/images'),$filename);
        }

        Pengaduan::create([
            'nik' =>  $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $filename,
            'status' => 0,
           
        ]);
     
        return redirect('index-masyarakat')->with('success','Product created successfully.');
}

}
