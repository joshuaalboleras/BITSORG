<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('welcome');

Auth::routes();


Route::view('about-us','about-us')->name('about.us');

Route::prefix('user/')->middleware('checkrole:user')->name('user.')->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::prefix('admin/')->name('admin.')->middleware('checkrole:admin')->group(function () {
    Route::get('dashboard',function(){
        return view('admin.dashboard');
    })->name('dashboard');
});

