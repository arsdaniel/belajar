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
        return view('santri.dashboard', [
        
            'status' => $status
        ]);
    }
}
