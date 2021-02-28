<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_depan',
        'nama_tengah',
        'nama_belakang',
        'email',
        'no_pendaftaran',
        'nis',
        'nisn',
        'no_ijazah',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'kabupaten',
        'provinsi',
        'kota',
        'kelurahan',
        'kode_pos',
        'sekolah_asal',
        'sekolah_sekarang',
        'foto',
        'wni',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function biodatasantri(){
        return $this->hasOne('App\Models\BiodataSantri');
    }

    public function status(){
        return $this->hasOne('App\Models\StatusUser');
    }

    public function Doc(){
        return $this->hasMany('App\Models\Doc');
    }
}
