<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\carController;

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



//CARROS prueba
Route::get('/cartest',[carController::class, 'index']);
Route::get('/cartest/{id}', [carController::class, 'show']);

//BASE
Route::get('/', function () {
    return view('welcome');
});

//SALUDO EN VISTA
Route::get('/saluvista/{nom?}', function ($nom="") {
    return view('saludoPlantilla', ['nom' => $nom]);
})->where(['nom' => '[a-z]+']);

//SALUDO NORMAL
Route::get('/salunormal/{nom?}/{ape?}', function (string $nom, $ape="") {
    return 'Te saludo '.$nom.' '.$ape;
})->where(['nom' => '[a-z]+', 'ape' => '[a-z]+']);

//SALUDO CONTROLADOR

Route::get('/saludocontrol/{nombre?}', [Controller::class, 'pruebaController']);

//CALCULADORA - SUMA
Route::get('/sum/{num1}/{num2}', function ($num1,$num2) {
    return $num1. ' + '.$num2. ' es = '.$num1 + $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

//RESTA
Route::get('/res/{num1}/{num2}', function ($num1,$num2) {
    return $num1. ' - '.$num2. ' es = '.$num1 - $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

//DIVISION
Route::get('/div/{num1}/{num2}', function ($num1,$num2) {
    return $num1. ' / '.$num2. ' es = '.$num1 / $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

//MULTIPLICACION
Route::get('/multi/{num1}/{num2}', function ($num1,$num2) {
    return $num1. ' * '.$num2. ' es = '.$num1 * $num2;
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
