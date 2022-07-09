<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/esport', function () {
    return view('esport');
});
Route::get('/esport', [App\Http\Controllers\EsController::class, 'index']);

Route::get('/korea', function () {
    return view('korea');
});
Route::get('/korea', [App\Http\Controllers\KoController::class, 'index']);

Route::get('/united', function () {
    return view('united');
});
Route::get('/united', [App\Http\Controllers\UnController::class, 'index']);