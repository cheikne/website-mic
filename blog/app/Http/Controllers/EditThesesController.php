<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\theses;

class EditThesesController extends Controller
{
    public function AffichierTheseModifie($these){
        $tableThese = new theses();
        if($these=='These1')
            $data = $tableThese->where('id_these',1)->first();
        else if($these=='These2')
            $data = $tableThese->where('id_these',2)->first();
        else if($these=='These3')
            $data = $tableThese->where('id_these',3)->first();
        else if($these=='These4')
            $data = $tableThese->where('id_these',4)->first();
        return view('projet-fin-etude.accesPartenaire.editThese',['response'=>$data]);
    }
    public function modificationThese(Request $req){
        $tableThese = new theses();
        $edit = $req->input('edit');
        $id = $req->input('id');
        $data = $tableThese->where('id_these',1)->first();
        if(!$data)
            echo "Aucune reponse";
        else{
        if($edit =='valeur_ajoute')
            return $data->valeur_ajoute;
        else if($edit =='Problematique')
            return $data->Problematique;
        else if($edit =='objectif')
            return $data->objectif;
        else if($edit =='resultats')
            return $data->resultats;
    }
    }
}
