<?php

namespace App\Http\Controllers\Santri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function index()
    {
        $status = auth()->user()->status;
        $statusdaftar = auth()->user()->statusdaftar;
        
        return view('santri.dashboard', [
        
            'status' => $status,
            'statusdaftar' => $statusdaftar,
        ]);
    }
}
