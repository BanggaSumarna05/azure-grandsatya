<?php

use App\Http\Controllers\FrontController;
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
// require __DIR__ . '/auth.php';

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::post('/postRequest', [FrontController::class, 'postRequest'])->name('postRequest');
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog/1', [FrontController::class, 'blog1'])->name('front.blog1');
Route::get('/blog/2', [FrontController::class, 'blog2'])->name('front.blog2');
Route::get('/blog/3', [FrontController::class, 'blog3'])->name('front.blog3');
Route::get('/blog/4', [FrontController::class, 'blog4'])->name('front.blog4');
Route::get('/blog/5', [FrontController::class, 'blog5'])->name('front.blog5');
