<?php

use App\Http\Controllers\FormController;
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
    return view('welcome');
});

Route::get('/form', [FormController::class,'index'])->name('form.index');
Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');
Route::get('/table', [FormController::class, 'indexTable'])->name('table.index');
Route::get('/delete/{id}', [FormController::class, 'delete'])->name('delete.table');