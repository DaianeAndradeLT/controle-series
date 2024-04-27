<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'series'],function (){
    Route::get('/index', [SeriesController::class, 'index'])->name('series.index');
    Route::get('/criar', [SeriesController::class, 'create'])->name('series.create');
    Route::post('/salvar', [SeriesController::class, 'store'])->name('series.store');
});
