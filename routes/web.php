<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Models\Blog;
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

Route::get('/xhh', function () {
    return view('welcome');
});
Route::get('/user', [userController::class,"index"]);
Route::get('/',[HomeController::class,'index']);
Route::get('/blog/single/{id}',[HomeController::class,'singleBlog']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/sdafgasdgar', [AuthController::class, 'signin'])->name('signin');
Route::post('/newRegister', [AuthController::class, 'newRegister'])->name('newRegister');