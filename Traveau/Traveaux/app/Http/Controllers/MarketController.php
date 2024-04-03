<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Livraison;


class MarketController extends Controller
{
    public function Affichage(){
      $livr =  DB :: table("livraisons")->get();
      $prd =    DB :: table("produits")->get();
       $cmd = Db :: table("commandes")->get(); 

        
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
        $deleted = DB::table('livraisons')->where('id', '=',$id )->delete();
        return redirect("/");

    }
    public function Modifie($id){
        $data= DB::table('livraisons')->where([
            ['id', '=',$id]
        ])->get();
            return view("Modifie",['data'=>$data]);
    
        }
  
        public function Update(Request $req, $id){
           $idProduit = $req->idProduit; 
            $idCommande = $req->idCommande; 
           $Quantité = $req->Quantité; 
           $Prix = $req->Prix; 
          $Montant = $req->Montant;
        
          DB::update("UPDATE livraisons SET idProduit = ?, idCommande = ?, Qte = ?, Prix = ?, Montant = ? WHERE id = ?", [$idProduit, $idCommande, $Quantité, $Prix, $Montant, $id]);
         // $liv = Livraison::find($id);
 
         // $liv->idProduit  = $idProduit;
        //  $liv->idCommande   = $idCommande ;
        //  $liv->Qte  = $Quantité ;
        ///  $liv->Prix  = $Prix ;
         // $liv->Montant  = $Montant ;
       //   $liv->save(); 
         return redirect("/");
        }
        

}
