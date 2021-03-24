<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailpembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'pembayaran_id',
        'nama_biaya',
        'harga',
    ];

    public function Pembayaran(){
        return $this->hasMany('App\Pembayaran');
    }
}
