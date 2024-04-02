<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idProduit");
            $table->unsignedBigInteger("idCommande");
            $table->integer("Qte");
            $table->double("Prix"); 
            $table->double("Montant"); 
            $table->foreign("idProduit")->references("idProduit")->on('produits');
            $table->foreign("idCommande")->references("idCommande")->on('commandes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
