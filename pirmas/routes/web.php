<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PirmasController;
use App\Http\Controllers\CalcController as C;

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

Route::get('/labas', fn() => '<h1 style=color:crimson;">Labas</h1>')->name('briedis');

Route::prefix('labas')->group(function () {

    Route::get('/briedi', [PirmasController::class, 'hello'])->name('briedis');
    Route::get('/vovere', [PirmasController::class, 'helloV']);
    Route::get('/{animal}', [PirmasController::class, 'helloAnimal']);
    Route::get('/{animal}/{color}/color', [PirmasController::class, 'helloFancy'])->name('fancy');

});

Route::get('calc', [C::class, 'show'])->name('show');
Route::post('calc', [C::class, 'doCalc'])->name('do-calc');

Route::get('/sum/{a}/{b}', [PirmasController::class, 'sum']);