<?php

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ClientCollection;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\ClientController;

Route::resources([
    'client' => ClientController::class,
    'phone' => PhoneController::class
]);

Route::get('/', function () {
    return redirect()->route('client.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
