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


//brief
// Route::get('/', function () {
//     return view('Accueil');
// });
// Route:: get('/Modifier', function (){
//     return view('Modifier');
// });
// Route::get('/Ajouter',function(){
//     return view('Ajouter');
// });
// Route::get('/Supprimer',function(){
//     return view('Supprimer');
// });
// Route::get('/Detail',function(){
//     return view('Detail');
// });
Route::get('/', function () {
    return view('accueil');
})->name('accueil');
Route::get('/employe', [EmployeeController::class, 'create'])->name('employe.create');
Route::post('/employe', [EmployeeController::class, 'store'])->name('employe.store');

