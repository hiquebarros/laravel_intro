<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cars;

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
    return view('welcome');
});

Route::get('/cars', function () {
    return view('cars', ['data' => Cars::list()]);
})
;

Route::get('/cars/{id}', function ($id) {
    return view('car', ['data' => Cars::retrieve($id)]);
})
;