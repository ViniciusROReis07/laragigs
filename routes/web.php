<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware("auth");

// Store Listing
Route::post('/listings', [ListingController::class, 'store'])->middleware("auth");

// Edit Submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware("auth");

// Delete Submit to Update
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Manage Listings
Route::get('listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);


Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Created New user
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class,'logout'])->middleware("auth");

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// Route::get('/hello', function(){
//     return response('<h1>Hello World</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });
// Podemos personalizar o header do response

// Route::get('/posts/{id}', function(int $id){
//     // dd($id);
//     // dd mata o programa nessa linha e serve para debugar
//     // ddd($id);
//     // ddd faz o mesmo que o dd mas exibe todo o codigo e a linha que parou
//     return response('Post '.$id);
// })->where('id', '[0-9]+');
// Podemos criar condicores para acesso as rotas, caso nao atenda retornara 404

// Route::get('/search', function(Request $request){
//     // dd($request);
//     return $request->name. ' '. $request->city;
// });

