<?php

use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Latian\LatianController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/admin/contact', ContactController::class);
Route::get('admin/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('admin/contact/store', [ContactController::class, 'store'])->name('contact.store');

// route for latian
Route::get('admin/latian/create', [LatianController::class, 'create'])->name('latian.create');
Route::post('admin/latian/store', [LatianController::class, 'store'])->name('latian.store');