<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ClientCollection;
use App\Http\Controllers\Admin\ClientController;

Route::resource('client', ClientController::class);

Route::get('/api/client', function() {
    return new ClientCollection(Client::all());
});

Route::get('/', function () {
    return redirect()->route('client.index');
});