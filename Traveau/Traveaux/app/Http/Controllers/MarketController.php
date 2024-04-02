<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Livraison;


class MarketController extends Controller
{
    public function Affichage(){
        $livr = DB :: select ( "select * from 	livraisons");
        $prd = DB :: select("select * from produits");
        $cmd = DB :: select("select * from commandes");

        
        return view("Market",["liv"=>$livr,"prd"=>$prd,"cmds"=>$cmd]); 
    }
    public function Ajouter(Request $req){
        $idProduit =$req->idProduit ; 
        $idCommande=$req->idCommande ; 
        $Quantité=$req->Quantité ; 
        $Prix = $req->Prix ; 
        $Montant = $req->Montant ;
        
        Livraison::create([
            'idProduit'=>$idProduit , 
            "idCommande"=>$idCommande,
            "Qte"=>$Quantité , 
            "Prix"=>$Prix , 
            "Montant"=>$Montant 
        ]);
        

        return redirect("/");

        
    }

    public function Delete($id){
        DB :: delete("delete from livraisons where id =?",[$id]);

        return redirect("/");

    }
    public function Modifie($id){
      $data=  DB :: select("select * from livraisons where id=? ",[$id]);
        return view("Modifie",['data'=>$data]);

    }

    public function updateC($id){
        // Retrieve the record from the database
        $com = DB::select("SELECT * FROM livraisons WHERE id=?", [$id]);
    
        // Check if any record is found
        if (count($com) > 0) {
            // Extract data from the retrieved record
            $com = $com[0]; // Assuming you want to access the first record if multiple records are found
            $idProduit = $com->idProduit;
            $idCommande = $com->idCommande;
            $Qte = $com->Qte;
            $Prix = $com->Prix;
            $Montant = $com->Montant;
    
            // 
            DB::update("UPDATE livraisons SET idProduit=?, idCommande=?, Qte=?, Prix=?, Montant=? WHERE id=?", [
                $idProduit,
                $idCommande,
                $Qte,
                $Prix,
                $Montant,
                $id
            ]);
    
            return redirect("/");
        } else {
            // Handle the case when no record is found
            return redirect("/")->with('error', 'No record found for the given ID');
        }
    }
    

}
