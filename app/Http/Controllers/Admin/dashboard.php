<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function __construct() //phpcs:ignore
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'dashboard';
       
    }
    //
    public function index()
    {
        return view('/admin/dashboard', $this->data);
    }
}
