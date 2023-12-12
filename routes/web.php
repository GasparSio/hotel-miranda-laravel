<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/roomservice', [OrderController::class, 'show'])->middleware(['auth', 'verified'])->name('roomservice');

Route::controller(OrderController::class)->group(function () {
    Route::get('/roomservice/your-orders', 'index')->middleware(['auth', 'verified'])->name('your-orders');
    Route::post('/roomservice/your-orders', 'store')->middleware(['auth', 'verified'])->name('your-orders');
    Route::delete('/roomservice/your-orders', 'destroy')->middleware(['auth', 'verified'])->name('your-orders');
    Route::put('/roomservice/your-orders', 'update')->middleware(['auth', 'verified'])->name('your-orders');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
    Route::get('/room-detail', 'show_related_rooms')->name('room-detail');
});
Route::controller(BookingController::class)->group(function () {
    Route::post('/room-detail', 'store')->name('rooms-grid');
});


require __DIR__ . '/auth.php';
