<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = ['nom_culture', 'description_culture'];

    public function conseils()
{
    return $this->belongsToMany(Conseil::class);
}


public function etapes()
{
    return $this->belongsToMany(Etape::class);
}

    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_culture');
    }

    public function dispositifs()
    {
        return $this->belongsToMany(Dispositif::class);
    }

    public function taches()
    {
        return $this->belongsToMany(Tache::class);
    }


}
