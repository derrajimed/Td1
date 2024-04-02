<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\commande ; 

class produit extends Model
{
    use HasFactory;
    protected $fillable = [
        "idProduit",
        "Qte"
     ];

     public function commandes() {
        return $this->belongsToMany(commande::class,"_command_produit", "idProduit","idCommande");
     }
}
