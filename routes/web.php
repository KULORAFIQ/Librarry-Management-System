<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KembaliController;
use App\Http\Controllers\ListController;
use Intervention\Image\Facades\Image;


 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', [CustomAuthController::class, 'home']); 
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('buku', BukuController::class);
Route::resource('kembali',KembaliController::class);
Route::get('/list-list', [listController::class, 'index'])->name('list.list');
Route::post('/resize-image', [ImageController::class, 'resizeImage'])->name('resize.image');
