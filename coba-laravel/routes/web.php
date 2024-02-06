<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Models\Genre;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [AuthController::class, 'signup']);
Route::post('/welcome', [AuthController::class, 'authenticate']);

//table pages
Route::get('/table', function(){
    return view('pages.table');
});
Route::get('/data-table', function(){
    return view('pages.data-table');
});

// CRUD Cast
//CRUD -> Create, Read, Update, Delete
Route::get('/cast', [CastController::class, 'index']); //read
Route::get('/cast/create', [CastController::class, 'create']); //create
Route::post('/cast', [CastController::class, 'store']); //create
Route::get('/cast/{cast_id}', [CastController::class, 'show']); //read
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']); //update
Route::put('/cast/{cast_id}', [CastController::class, 'update']); //update
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']); //delete

//CRUD Genre
route::resource('genre', GenreController::class);


//CRUD Film
route::resource('film', FilmController::class);