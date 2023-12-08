<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/offers', [OfferController::class, 'index'])->name('offers');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show')->name('contact');
    Route::post('/contact', 'store')->name('contact');
});
Route::controller(RoomController::class)->group(function () {
    Route::get('/', 'show_all_rooms')->name('index');
    Route::get('/rooms-grid', 'show_available_rooms')->name('rooms-grid');
});
Route::controller(BookingController::class)->group(function () {
    Route::get('/room-detail', 'show_related_rooms')->name('room-detail');
    Route::post('/room-detail', 'store')->name('rooms-grid');
});
