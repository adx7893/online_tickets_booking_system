<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\TestController;

Route::get('/test-controller', [TestController::class, 'index']);
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/tickets/{ticketId}/book', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
