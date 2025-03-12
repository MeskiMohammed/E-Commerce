<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function etat(){
        return $this->belongsTo(Etat::class);
    }
    public function modeReglement(){
        return $this->belongsTo(ModeReglement::class);
    }
    public function detailsCommandes(){
        return $this->hasMany(DetailsCommande::class);
    }
}
