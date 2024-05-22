<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_kuliah',
        'nama_dosen',
        'nama_kelas',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'semester',
        'prodi',
        'jurusan',
        'tahun_akademik',
    ];
}
