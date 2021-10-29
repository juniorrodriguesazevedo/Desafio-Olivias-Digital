<?php

namespace App\Observers;

use App\Models\Client;
use App\Mail\ClientStoreMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ClientObserver
{
     /**
     * Handle the Client "creating" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function creating(Client $client)
    {
        if ($client->image && $client->image->isValid()) {
            
            $imagePath = Storage::putFile('public', $client->image);

            $client['image'] = $imagePath;
        }
    }

    /**
     * Handle the Client "created" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function created(Client $client)
    {
        if ($client->email) {
            Mail::to($client->email)->send(new ClientStoreMail($client));
        }
    }

      /**
     * Handle the Client "updating" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function updating(Client $client)
    { 
        $id = Client::find($client->id);

        if ($client->image && $client->image->isValid()) {
            
            if (Storage::exists($id->image)) {
                Storage::delete($id->image);
            }

            $imagePath = Storage::putFile('public', $client->image);

            $client['image'] = $imagePath;
        }
    }

     /**
     * Handle the Client "deleting" event.
     *
     * @param  \App\Models\Client  $client
     * @return void
     */
    public function deleting(Client $client)
    {
        if ($client->image && Storage::exists($client->image)) {
            Storage::delete($client->image);
        }
    }
}
