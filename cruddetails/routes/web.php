<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserformController;


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
    return view('welcome');
});
Route::get('/index',[UserformController::class, 'index'])->name('user.index');

Route::get('/create', [UserformController::class, 'create'])->name('user.create');
Route::post('/store', [UserformController::class, 'store'])->name('user.store');
Route::get('/edit/{id}', [UserformController::class, 'edit'])->name('user.edit');
Route::post('/update/{id}',[UserformController::class, 'update'])->name('user.update');
Route::get('/deleteuser/{id}/delete',[UserformController::class, 'delete'])->name('user.delete');