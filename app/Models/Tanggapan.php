<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table= 'tanggapan';
    protected $fillable=['id_petugas','id_pengaduan','tgl_tanggapan','tanggapan','id_petugas'];
}
