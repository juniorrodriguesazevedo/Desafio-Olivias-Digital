<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ClientCollection;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PhoneController;

Route::resources([
    'client' => ClientController::class,
    'phone' => PhoneController::class
]);

Route::get('/', function () {
    return redirect()->route('client.index');
});