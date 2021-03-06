<?php

use App\Http\Controllers\DiscoController;
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

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/bob', function () {
    return view('bob');
})->middleware(['guest'])->name('bob');
 
require __DIR__.'/auth.php';

 Route::resource('discos', DiscoController::class)->except(['destroy'])->middleware(['auth']);
 Route::get('discos/delete/{disco}',[DiscoController::class, 'destroy'])->name('discos.delete')->middleware(['auth']);