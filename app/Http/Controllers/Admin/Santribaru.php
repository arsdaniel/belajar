<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Santribaru extends Controller
{
    public function __construct() //phpcs:ignore
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'santriBaru';
       
    }
    //
    public function index(){
        return view('admin.santri.santribaru', $this->data);
    }
    public function lihat($id)
    {
        $user = User::find($id);
        return view('admin.santri.santribaru', compact('user'));
    }
}
