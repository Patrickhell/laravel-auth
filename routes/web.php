<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/home', [AdminHomeController::class, 'home'])->name('home');
    Route::get('/albums/trashed', [AlbumController::class, 'trashedAlbum'])->name('albums.trashedAlbum');
    Route::post('/albums/deleted/{album}', [AlbumController::class, 'restore'])->name('albums.restore');
    Route::delete('/albums/deleted/{album}', [AlbumController::class, 'obliterate'])->name('albums.obliterate');
    Route::resource('/albums', AlbumController::class);
});

Route::name('guest.')->group(function () {
    Route::get('/', [GuestHomeController::class, 'home'])->name('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
