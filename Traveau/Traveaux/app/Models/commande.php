<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\produit;



class commande extends Model
{
    use HasFactory;
    protected $fillable = [
       "idCommande",
       "Qte"
    ];
    public function produits(){
        return $this->belongsToMany(produit::class,"_command_produit", "idProduit","idCommande");
    }
}
