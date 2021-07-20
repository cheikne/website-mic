<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\theses;
use App\Models\includes;

class EditThesesController extends Controller
{
    public function AffichierTheseModifie($these){
        $tableThese = new theses();
        $id_user = Auth::user()->id;
        $tablesInclude = new includes();
        if($these=='These1'){
            $data = $tableThese->where('id_these',1)->first();
            $lien = $tablesInclude->where('id_these',1)->get('id_user');
        }
        else if($these=='These2'){
            $data = $tableThese->where('id_these',2)->first();
            $lien = $tablesInclude->where('id_these',2)->get('id_user');
        }
        else if($these=='These3'){
            $data = $tableThese->where('id_these',3)->first();
            $lien = $tablesInclude->where('id_these',3)->get('id_user');
        }
        else if($these=='These4'){
            $data = $tableThese->where('id_these',4)->first();
            $lien = $tablesInclude->where('id_these',4)->get('id_user');
        }
        if($lien and Auth::user()->profil=='admin'){
            $lien = 'admin';
        }
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien);
    }

    // public function getIdthese($id){
    //     if($id=='These1')
    //         $data = 1;
    //     else if($id=='These2')
    //         $data =2;
    //     else if($id=='These3')
    //         $data = 3;
    //     else if($id=='These4')
    //         $data = 4;
    //     return view('projet-fin-etude.accesPartenaire.editThese',['data'=> $data]);
    // }

    public function modificationThese(Request $req){
        // $tableThese = new theses();
        $tableThese = new theses();
        // $edit = $req->input('edit');
        $id = $req->input('id');
        // $data = $tableThese->where('id_these',1)->first();
        $response = $tableThese->where('id_these',$id)->first();
        // if(!$data)
        //     echo "Aucune reponse";
        // else{
        // if($edit =='valeur_ajoute')
        //     return $data->valeur_ajoute;
        // else if($edit =='Problematique')
        //     return $data->Problematique;
        // else if($edit =='objectif')
        //     return $data->objectif;
        // else if($edit =='resultats')
        //     return $data->resultats;
        // echo "<script>alert('hdhdhd')</script>";
    }
}
