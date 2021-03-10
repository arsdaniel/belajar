<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aturan extends Controller
{
    public function __construct() //phpcs:ignore
    {
        parent::__construct();
        $this->data['currentAdminMenu'] = 'aturan';
       
    }
    //
}
