<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');

Route::get('/upload', function () {
    return view('upload');
})->middleware(['auth'])->name('upload');

Route::post('/upload', [UploadController::class, 'uploadPost'])->name('file.upload.post');

Route::get('/bio', function () {
    return view('bio');
})->name('bio');



require __DIR__ . '/auth.php';
