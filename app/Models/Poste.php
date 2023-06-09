<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;

    public function clients()
    {
        return $this->belongsToMany(client::class, 'poste_client');
    }
}
