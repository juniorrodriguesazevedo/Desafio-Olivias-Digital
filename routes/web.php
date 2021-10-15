<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Resources\ClientCollection;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('client.index');
});

Route::get('/api/client', function() {
    return new ClientCollection(Client::all());
});

Route::resource('client', ClientController::class);