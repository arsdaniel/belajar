<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Blog\Category;
use App\Http\Controllers\Admin\dashboard;
use App\Http\Controllers\Admin\Santri;
use App\Http\Controllers\Admin\Santribaru;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['as' => 'admin.'], function() {

	Route::group(['middleware' => 'auth:admin'], function() {

		Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
		Route::get('/', [dashboard::class, 'index'])->name('home');
		Route::get('/blog/kategori', [Category::class, 'index'])->name('blog.category');
		Route::get('/santribaru', [Santribaru::class, 'index'])->name('admin.santri.santribaru');
		Route::get('/santri', [Santri::class, 'index'])->name('admin.santri.index');
		Route::get('/santri/lihat/{id}',[ Santri::class, 'lihat'])->name('admin.santri.lihat');

	});

	Route::group(['middleware' => 'guest:admin'], function() {

		Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
		Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');

	});

});
