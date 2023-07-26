<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/create_post', [PostController::class, 'create'])->name('create_post');
Route::get('/edit_post', [PostController::class, 'edit'])->name('edit_post');
Route::get('delete_post', [PostController::class, 'delete'])->name('delete_post');
