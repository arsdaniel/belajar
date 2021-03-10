<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class Category extends Controller
{
    //
    
    public function index(){

        return view('admin.blog.category', $this->data);
    }
}
