<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama_berkas',
        'alamat_berkas',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
