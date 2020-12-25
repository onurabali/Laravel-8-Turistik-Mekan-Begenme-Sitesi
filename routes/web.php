<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/home2', function () {
    return view('welcome');
});
Route::get('', function(){
    return view('home.index');
});
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');

//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
