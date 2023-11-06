<?php

use App\Http\Controllers\UserController;
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
    return view('main');
});

Route::get('/signin', function(){
    return view('/signin');
});

Route::get('/signup', function(){
    return view('/signup');
});

Route::post('/signup', [UserController::class, 'store']);
Route::post('/signin', [UserController::class, 'login']);
Route::post('/checkDuplicate',[UserController::class, 'check']);