<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pembayaran',
        'user_id',
        'total_bayar',
        'jumlah_dibayar',
    ];


    public function Detailpembayaran(){
        return $this->hasMany('App\Detailpembayaran');
    }
}
