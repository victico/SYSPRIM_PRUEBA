<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CarController, Modelcontroller, BrandController};
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('layouts.index');
});


Route::resources([
    'cars'    => CarController::class,
    'brand'   => BrandController::class,
    'modelos' => ModelController::class,
]);

Route::get('/getModels/{id}',[BrandController::class, 'getModels']);

Route::get('/cars/delete/{id}',[CarController::class, 'destroy']);
Route::get('/brands/delete/{id}',[BrandController::class, 'destroy']);
Route::get('/modelos/delete/{id}',[ModelController::class, 'destroy']);

Route::post('/cars/update/{id}',[CarController::class, 'update']);
