<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Santri extends Controller
{
    public function index(){
        return view('admin.santri.index');
    }
    public function lihat($id)
    {
        $user = User::find($id);
        return view('admin.santri.lihat', compact('user'));
    }
}
