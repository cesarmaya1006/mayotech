<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Intranet\IntranetPagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/', [IntranetPagesController::class, 'dashboard'])->name('dashboard');
});
