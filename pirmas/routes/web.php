<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PirmasController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/labas', fn() => '<h1 style=color:crimson;">Labas</h1>');
Route::get('/labas/briedi', [PirmasController::class, 'hello']);
Route::get('/labas/vovere', [PirmasController::class, 'hellov']);

Route::get('/labas/{animal}', [PirmasController::class, 'helloAnimal']);

Route::get('/labas/{animal}/{color}/color', [PirmasController::class, 'helloFancy']);

Route::get('/sum/{a}/{b}', [PirmasController::class, 'sum']);