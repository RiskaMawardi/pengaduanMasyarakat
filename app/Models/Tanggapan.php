<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tanggapan extends Model
{
    use HasFactory;
    protected $table= 'tanggapan';
    protected $fillable=['id_petugas','id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'];

    public function alldata(){
        return DB::table('tanggapan')
                    ->leftJoin('pengaduan','pengaduan.id','=','tanggapan.id_tanggapan')
                    ->get();
    }
}
