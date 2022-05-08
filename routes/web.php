<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/store',[EmployeeController::class, 'store'])->name('store');
Route::get('/fetchAll',[EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit',[EmployeeController::class, 'edit'])->name('edit');
Route::post('/update',[EmployeeController::class, 'update'])->name('update');
Route::delete('/delete',[EmployeeController::class, 'delete'])->name('delete');
