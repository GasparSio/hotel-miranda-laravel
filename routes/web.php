<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/offers', [OfferController::class, 'offers'])->name('offers');

Route::match(['get', 'post'], '/contact', [ContactController::class, 'postcontact']);

Route::controller(RoomController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/rooms-grid', 'rooms')->name('rooms-grid');
});
Route::controller(BookingController::class)->group(function () {
    Route::get('/room-detail', 'show')->name('room-detail');
    Route::post('/', 'store')->name('rooms-grid');
});
