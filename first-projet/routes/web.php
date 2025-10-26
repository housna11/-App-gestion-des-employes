<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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



Route::get('/employe', [EmployeeController::class, 'create']);
Route::post('/employe', [EmployeeController::class, 'store']);
Route::get('/', [EmployeeController::class, 'index']);
Route::delete('employe/{id}',[EmployeeController::class,'destroy']);
Route::put('employe/{id}', [EmployeeController::class, 'update']);
Route::get('employe/{id}/edit', [EmployeeController::class, 'edit']);
Route::get('employe/{id}',[EmployeeController::class,'show']);