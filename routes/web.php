<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
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
Route::namespace('\App\Http\Controllers')->group(function(){
Route::get('/', 'HomeController@index');
Route::get('/articles/{article:slug}' , 'ArticleController@single')->middleware('auth');
Route::get('/about', 'HomeController@about');

Route::middleware(['auth','has_permission'])->group(function() {

    Route::prefix('admin')->namespace('Admin')->group(function() {
        Route::resource('articles' , 'ArticleController')->except(['show']);
        Route::middleware(['auth','is_admin'])->group(function() {
            Route::get('permissions',[UserController::class,'index']);
            Route::post('permissions',[UserController::class,'assign']);
        });    
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
});