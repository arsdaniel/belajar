<?php

use App\Http\Controllers\Santri\Dashboard;
use App\Http\Controllers\Web\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Livewire\Santri\BiodataSantri;
use App\Http\Livewire\Santri\Show;
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

Route::group(['middleware' => 'auth'], function() {

	Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
	
	Route::group(['middleware' => 'verified'], function() {
		Route::group(['middleware' => ['role:santri','permission:santri-baru']], function () {
			//
			Route::get('/santri', [HomeController::class, 'index'])->name('santri.home');
			Route::get('/dashboard', [Dashboard::class, 'index'])->name('santri.dashboard');

		});

		
	});

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biodata', BiodataSantri::class);



