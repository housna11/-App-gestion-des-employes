<?php

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


//brief
Route::get('/', function () {
    return view('Accueil');
});
Route:: get('/Modifier', function (){
    return view('Modifier');
});
Route::get('/Ajouter',function(){
    return view('Ajouter');
});
Route::get('/Supprimer',function(){
    return view('Supprimer');
});
Route::get('/Detail',function(){
    return view('Detail');
});



// Route::get('/',function (){
//      return view ('accueil');
// });
Route::get('/test',[App\Http\Controllers\TestController::class, 'index']);
Route::get('/accueil', [App\Http\Controllers\TestController::class, 'show']);

Route::get('/home',function (){
    return view ('accueil');

 
});
Route::get('bonjour/{nom}', function($nom)  {
    return "Bonjour, $nom";
});
Route::get('/salutation/{prenom}',[App\Http\Controllers\TestController::class, 'greet']);
Route::get('/profile/{id}/{age}',[App\Http\Controllers\TestController::class, 'profile']);
Route::get('/article/{id}',[App\Http\Controllers\TestController::class, 'showArticle']);

