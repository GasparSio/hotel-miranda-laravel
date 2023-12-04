<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


//el 'index' de dentro de la clase hace alusion al metodo del controlador.
// Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', function () {
    return view('about');
})->name('aboutus');


//agrupamos las distintas rutas que podemos tener dentro de un mismo controlador, y nos quedamos solo con la ruta y el metodo
Route::controller(RoomController::class)->group(function () {

    Route::get('/', 'index')->name('index');
});
