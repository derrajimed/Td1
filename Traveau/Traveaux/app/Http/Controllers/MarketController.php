<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Livraison;


class MarketController extends Controller
{
    public function Affichage(){
        $livr = DB :: select ( "select * from 	livraisons");
        
        return view("Market",["liv"=>$livr]); 
    }
}
