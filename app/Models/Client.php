<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
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
