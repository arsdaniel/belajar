<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    use HasFactory;
    protected $table ='statususers';
    protected $fillable = [
        'user_id',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
