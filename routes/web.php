<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\ClientController;

Route::middleware('auth')->group(function() {
    Route::resources([
        'client' => ClientController::class,
        'phone' => PhoneController::class
    ]);
    
    Route::get('/', function () {
        return redirect()->route('client.index');
    })->name('home');
});




Auth::routes();

