<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VirementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Agences
Route::GET("/agences",[AgenceController::class,'index'])
->name('agences.index');
Route::GET("/agence/create",[AgenceController::class,'create'])
->name('agences.create');
Route::POST("/agence/store",[AgenceController::class,'store'])
->name('agences.store');
Route::GET('/agence/edit/{agence}',[AgenceController::class,'edit'])
->name('agences.edit');
Route::PUT('/agence/edit/{agence}',[AgenceController::class,'update'])
->name('agences.update');
Route::DELETE('/agence/destroy/{agence}',[AgenceController::class,'destroy'])
->name('agences.destroy');
Route::GET('/agence/show/{agence}',[AgenceController::class,'show'])
->name('agences.show');

// Clients
Route::GET("/clients",[ClientController::class,'index'])
->name('clients.index');
Route::GET("/client/create",[ClientController::class,'create'])
->name('clients.create');
Route::POST("/client/store",[ClientController::class,'store'])
->name('clients.store');
Route::GET('/client/edit/{client}',[ClientController::class,'edit'])
->name('clients.edit');
Route::PUT('/client/edit/{client}',[ClientController::class,'update'])
->name('clients.update');
Route::DELETE('/client/destroy/{client}',[ClientController::class,'destroy'])
->name('clients.destroy');
Route::GET('/client/show/{client}',[ClientController::class,'show'])
->name('clients.show');
Route::GET('/client/voir/{client}',[ClientController::class,'voir'])
->name('clients.virements.voir');

// Verments
Route::GET("/virments",[VirementController::class,'index'])
->name('virments.index');
Route::GET("/virment/create",[VirementController::class,'create'])
->name('virments.create');
Route::POST("/virment/store",[VirementController::class,'store'])
->name('virments.store');
Route::GET('/virment/edit/{virment}',[VirementController::class,'edit'])
->name('virments.edit');
Route::PUT('/virment/edit/{virment}',[VirementController::class,'update'])
->name('virments.update');
Route::DELETE('/virment/destroy/{virment}',[VirementController::class,'destroy'])
->name('virments.destroy');
Route::GET('/virment/show/{virment}',[VirementController::class,'show'])
->name('virments.show');
