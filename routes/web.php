<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('user.beranda');
});

Route::get('/beranda', [FrontController::class, 'beranda']);
Route::get('/fti', [FrontController::class, 'fti']);
Route::get('/fai', [FrontController::class, 'fai']);
Route::get('/fe', [FrontController::class, 'fe']);
Route::get('/fip', [FrontController::class, 'fip']);
Route::get('/ft', [FrontController::class, 'ft']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route Group Middleware Auth untuk bagian backend Admin
Route::middleware(['auth'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

});
