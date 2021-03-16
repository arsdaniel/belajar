<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biayapendaftaran extends Model
{
    use HasFactory;
    protected $table ='biaya_pendaftaran';

    protected $fillable = [
        'nama_biaya',
        'tahun_ajaran',
        'sekolah',
        'harga',
    ];
}
