<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Santri extends Controller
{
    public function __construct() //phpcs:ignore
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'santri';
       
    }

    
    public function index(){

        return view('admin.santri.index', $this->data);
    }
    public function lihat($id)
    {
        $user = User::find($id);
        return view('admin.santri.lihat', compact('user'));
    }
}
