<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as NewsAdminController;
use App\Http\Controllers\CategoryController;
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


Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::resource('news', NewsAdminController::class);
    });
});


Route::prefix('')->group(function () {
    Route::get('/index', [NewsController::class, 'index'])->name('index');

    Route::get('/news', [NewsController::class, 'news'])->name('news');

    Route::get('/news/{id}/show', [NewsController::class, 'show'])->where('id', '\d+')->name('news.show');

    Route::get('/news/category', [CategoryController::class, 'index'])->name('news.category');

    Route::get('/news/category/{id}/show', [NewsController::class, 'showCategory'])->where('id', '\d+')->name('news.showCategory');

    Route::resource('contacts', ContactController::class);

    Route::resource('feedback', FeedbackController::class);
});