<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;



Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/offers', [OfferController::class, 'offers'])->name('offers');

//agrupamos las distintas rutas que podemos tener dentro de un mismo controlador, y nos quedamos solo con la ruta y el metodo
Route::controller(RoomController::class)->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/rooms-grid', 'rooms')->name('rooms-grid');
});
