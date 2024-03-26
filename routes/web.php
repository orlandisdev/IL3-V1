<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LdapUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/user-login', [LoginController::class, 'index'])->name('user-login.index');
Route::post('/user-login', [LoginController::class, 'store'])->name('user-login.store');




Route::post('/directory', [LdapUserController::class, 'login']);

Route::get('/main', [LdapUserController::class, 'view'])->name('main.view');


require __DIR__.'/auth.php';
