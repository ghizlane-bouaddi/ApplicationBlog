<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategorieController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/posts", [PostController::class, 'index']);
Route::get("/posts/create", [PostController::class, 'create']);
Route::post("/posts",[PostController::class ,'store']);
Route::get("/categorie", [CategorieController::class,'index']);
Route::get("/categorie" , [CategorieController::class,'create']);
Route::get("/categorie" , [CategorieController::class,'create']);


