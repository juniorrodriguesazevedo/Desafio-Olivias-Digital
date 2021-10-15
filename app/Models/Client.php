<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'image', 'type_client_id'];

    use HasFactory;

    public function type_clients()
    {
        return $this->hasMany(TypeClient::class);
    }

    public function phones()
    {
        return $this->belongsToMany(Phone::class);
    }

}
