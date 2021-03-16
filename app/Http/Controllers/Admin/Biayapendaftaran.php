<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Biayapendaftaran extends Controller
{
    //
    public function __construct() //phpcs:ignore
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'biayapendaftaran';
       
    }
    //
    public function index(){
        return view('admin.biayapendaftaran.index', $this->data);
    }
}
