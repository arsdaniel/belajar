<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataSantri extends Model
{
    use HasFactory;
    protected $table ='biodata_santris';

    protected $fillable = [
        'user_id',
        'no_pendaftaran',
        'nis',
        'nisn',
        'no_ijazah',
        'nama_depan',
        'nama_tengah',
        'nama_belakang',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'sekolah_asal',
        'sekolah_sekarang',
        'foto',
        'wni',
        'status',

    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
