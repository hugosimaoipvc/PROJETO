<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InitialPageController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [InitialPageController::class, 'initalPageView']);
Route::get('/loginArea', [AuthController::class, 'index'])->name('loginArea');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');
