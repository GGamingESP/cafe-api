<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/form', function () {
    return view('formulario');
});

Route::get('/departamento', function () {
    return view('departamento');
});

Route::get('/estudios', function () {
    return view('estudios');
});
