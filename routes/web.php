<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);

//Route::get('/hello', function () {
  //  return "<h1> Hello, World! </h1>";
//});

Route::get('/users/{id}', function ($id) {
    return 'This is user ' . $id;
});
