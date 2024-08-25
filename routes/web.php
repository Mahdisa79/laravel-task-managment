<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Home\HomeController;

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


/*
|--------------------------------------------------------------------------
| Auth Route
|--------------------------------------------------------------------------
 */

 Route::group(['middleware' => ['guest']], function() {

    Route::get('/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');
    Route::get('/login', [LoginController::class, 'login'])->name('auth.login-form');
    Route::post('/login', [LoginController::class, 'attemptLogin'])->name('auth.login-attempt');

  });


Route::group(['middleware' => ['auth']], function() {

    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

});



/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
 */



Route::group([], function() {
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::post('/', [HomeController::class,'addTask'])->name('addTask');
    Route::get('/change-task-status/{id}/{status} ', [HomeController::class,'changeTaskStatus'])->name('changeTaskStatus');
   // Route::get('/change-task-status/{id}/{status} ', [HomeController::class,'changeTaskStatus'])->name('changeTaskStatus');
    Route::delete('/delete/task/{task}', [HomeController::class, 'deleteTask'])->name('deleteTask');


});