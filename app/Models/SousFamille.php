<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousFamille extends Model
{
    use HasFactory;
    public function famille(){
        return $this->belongsTo(Famille::class);
    }
    public function produit(){
        return $this->hasMany(Produit::class);
    }
    protected $guarded = ['id'];
}
