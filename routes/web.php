<?php

use Illuminate\Support\Facades\Route;

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
Route::get("/be-layout",function (){
    return view("be.layout");
});
require_once __DIR__ . '/be.php';
require_once __DIR__ . '/fe.php';
require __DIR__.'/auth.php';

