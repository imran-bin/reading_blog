<?php

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
Route::get('/', function () {
    return view('blog.layout');


});
// Route::get('/blog', function () {
//     $blog=Blog::all();
//     dd($blog);
// });