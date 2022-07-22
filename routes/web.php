<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('test', function () {
    return Auth::user()->posts;
});

Route::get('/test', function(){
    return view('pages.home');
});

Route::resource('post', PostController::class)->middleware(['role']);

Route::resource('tag', TagController::class);
