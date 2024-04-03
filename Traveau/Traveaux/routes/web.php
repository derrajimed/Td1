<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController ;

Route::get('/',[MarketController::class ,"Affichage"]);
Route::post('/store',[MarketController::class,"Ajouter"]);
Route::get('/{id}',[MarketController::class,"Delete"] );
Route::get('/upd/{id}',[MarketController::class,"Modifie"] );
Route::get('/upd/modification/{id}',[MarketController::class,"Update"] );




