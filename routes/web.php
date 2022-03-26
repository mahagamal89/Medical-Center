<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\MedicalCenter;
use App\Http\Controllers\Register;
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
        return redirect()->route('medical-center.index');
    });
Route::resource('register', Register::class)->only('index');
Route::resource('login', Login::class)->only('index');
Route::resource('medical-center', MedicalCenter::class)->only('index');