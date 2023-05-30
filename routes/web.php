<?php

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

Auth::routes();

// Route::get('/setting', [App\Http\Controllers\SettingsController::class, 'index'])->name('home');
// Route::get('/settings', [SettingController::class, 'index']);
// Route::get('settings','SettingController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\SettingsController::class, 'index'])->name('setting');
// Route::get('/settings', function () {
//     return view('setting');
// });
