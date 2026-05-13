<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class,'show'])->name('events.show');
Route::get('/checkout', [EventController::class,'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/events', [DashboardController::class,'indexEvent'])->name('events.index');
    Route::get('/transactions', [DashboardController::class,'indexTransaction'])->name('transactions.index');
    Route::get('events', [AdminEventController::class, 'index'])->name('events.index');
    Route::get('events/create', [AdminEventController::class, 'create'])->name('events.create');
    Route::post('events/store', [AdminEventController::class, 'store'])->name('events.store');
    Route::delete('events/destroy/{event}', [AdminEventController::class, 'destroy'])->name('events.destroy');
    Route::get('events/edit/{event}', [AdminEventController::class, 'edit'])->name('events.edit');
    Route::put('events/update/{event}', [AdminEventController::class, 'update'])->name('events.update');
    // dan seterusnya...
});
