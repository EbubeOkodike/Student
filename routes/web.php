<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use App\Models\student;

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('home', [studentController::class, 'index'])->name('home'); /* home page route */

Route::get('create', [studentController::class, 'create']); /* create page route */

Route::post('store', [studentController::class, 'store']); /* store route */

Route::get('view/{id}', [studentController::class, 'view']); /* edit page route */

Route::get('edit/{id}', [studentController::class, 'edit']); /* edit page route */

Route::post('update/{id}', [studentController::class, 'update']); /* update route */

Route::get('expel/{id}', [studentController::class, 'expel']); /* expel route */