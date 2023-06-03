<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use Laravel\Passport\Http\Controllers\ScopeController;
use Laravel\Passport\Http\Controllers\PersonalAccessTokenController;
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
    return view('home');
});

Auth::routes();

// Route::get('/setting', [App\Http\Controllers\SettingsController::class, 'index'])->name('home');
// Route::get('/settings', [SettingController::class, 'index']);
// Route::get('settings','SettingController@index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [SettingController::class, 'getData'])->name('settings.getData');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
// Route::get('post', 'PostController@index');
// Route::get('/settings', function () {
//     return view('setting');
// });
Route::post('/oauth/token', [AccessTokenController::class, 'issueToken'])
    ->middleware(['api'])
    ->name('passport.token');

Route::middleware(['auth:api', 'scopes:{scope}'])->group(function () {
    Route::get('/oauth/authorize', [AuthorizationController::class, 'authorize'])
        ->name('passport.authorize');
    Route::post('/oauth/authorize', [AuthorizationController::class, 'approveAuthorization'])
        ->name('passport.approve');
    Route::delete('/oauth/authorize', [AuthorizationController::class, 'denyAuthorization'])
        ->name('passport.deny');
});

Route::middleware(['auth:api'])->group(function () {
    Route::get('/oauth/scopes', [ScopeController::class, 'all'])
        ->name('passport.scopes');
    Route::get('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'forUser'])
        ->name('passport.personal.tokens.index');
    Route::post('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'store'])
        ->name('passport.personal.tokens.store');
    Route::delete('/oauth/personal-access-tokens/{tokenId}', [PersonalAccessTokenController::class, 'destroy'])
        ->name('passport.personal.tokens.destroy');
});
use App\Http\Controllers\UserController;
// Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::post('/register', [UserController::class, 'register'])->name('register.register');
Route::post('/login', [UserController::class, 'login']);
Route::get('/user', [UserController::class, 'details']);
// Route::get('user', 'UserController@details');
Route::middleware(['auth:api'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);
});