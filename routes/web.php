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


Route::get('/welcome/{arg}', static function(string $arg): string {
    return "Hello {$arg}!";
});


Route::get('/info', static function(): string {
    return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur risus sed accumsan facilisis. Aliquam.";
});

Route::get('/news/{id}', static function(string $id): string {
    return "Новость под номером {$id}";
});