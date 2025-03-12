<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DetailsCommandeController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\UniteController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\EtatController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){return redirect('/login');});
Route::get('/admin',function(){return view('adminLayout/app');});
Route::get('/login',function(){return view('login');});
Route::get('/register',function(){return view('register');});

Route::resource('users',UserController::class);
Route::resource('produits',ProduitController::class);
Route::resource('commandes',CommandeController::class);
Route::resource('details-commandes',DetailsCommandeController::class);
Route::resource('familles',FamilleController::class);
Route::resource('sous-familles',SousFamilleController::class);
Route::resource('marques',MarqueController::class);
Route::resource('unites',UniteController::class);
Route::resource('mode-reglements',ModeReglementController::class);
Route::resource('etats',EtatController::class);

Route::get('/users/{user}/toggle-admin',[UserController::class,'toggleAdmin'])->name('users.toggleAdmin');

