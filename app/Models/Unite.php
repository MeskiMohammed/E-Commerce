<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    use HasFactory;
    public function produit(){
        return $this->hasMany(Produit::class);
    }
    protected $guarded=["id"];

}
