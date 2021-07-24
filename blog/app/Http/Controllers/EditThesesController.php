<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\theses;
use App\Models\includes;
use App\Models\activite_recentes;
use App\Models\BackgroundColors;

class EditThesesController extends Controller
{
    public function AffichierThese1Modifie(){
        $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',1)->first();
        $lien = $tablesInclude->where('id_these',1)->get('id_user');

        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
    }
    public function AffichierThese2Modifie(){
        $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',2)->first();
        $lien = $tablesInclude->where('id_these',2)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
    }
    public function AffichierThese3Modifie(){
         $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',3)->first();
        $lien = $tablesInclude->where('id_these',3)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
    }
    public function AffichierThese4Modifie(){
         $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',4)->first();
        $lien = $tablesInclude->where('id_these',4)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
    }
    public function AffichierThese5Modifie(){
         $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',5)->first();
        $lien = $tablesInclude->where('id_these',5)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
         ->with('couleur',$couleur);
    }
    public function AffichierThese6Modifie(){
         $tableThese = new theses();
        $id_user = Auth::user()->id;
        $couleur = BackgroundColors::where('id',1)->first();
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',6)->first();
        $lien = $tablesInclude->where('id_these',6)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
         ->with('couleur',$couleur);
    }
    public function AffichierThese7Modifie(){
         $tableThese = new theses();
        $couleur = BackgroundColors::where('id',1)->first();
        $id_user = Auth::user()->id;
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',7)->first();
        $lien = $tablesInclude->where('id_these',7)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
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

    public function updateThese(Request $req){
        $color = '#E0FFFF';
        $attribut = $req->input('attribut');
        $text = $req->input('text');
        if($attribut=='resultats'){
         theses::where('id_these',$req->input('id'))->update(['resultats' => $text]);
         BackgroundColors::where('id',1)->update(['clor_res' => $color]);
        }
        else if($attribut=='objectif'){
         theses::where('id_these',$req->input('id'))->update(['objectif' => $text]);
          BackgroundColors::where('id',1)->update(['clor_obj'=>  $color]);
        }
        else if($attribut=='valeur_ajoutee'){
         theses::where('id_these',$req->input('id'))->update(['valeur_ajoute' => $text]);
          BackgroundColors::where('id',1)->update(['clor_va'=>  $color]);
        }
        else if($attribut=='Problematique'){
         theses::where('id_these',$req->input('id'))->update(['problematique' => $text]);
          BackgroundColors::where('id',1)->update(['clor_pro'=>  $color]);
        }
        //Insertions des modifications de users dans la table activitee recente
        if($req->input('is_insert') =='oui'){
            $tableActivit = new activite_recentes();
            $tableActivit->titre = 'Realisation'.$req->input('id');
            $tableActivit->heure =  $req->input('heure');
            $tableActivit->id_user = $req->input('id_user');
            $tableActivit->bool = 1;
            $tableActivit->url = '/Accueil/Acces-Partenaire/These'.$req->input('id');
            $tableActivit->save();
        }
        return $req->input('attribut');
    }
    public function DeleteTheseInTableActivite(Request $req){
        $color = 'lightgrey';
        $id_user = $req->input('id');
        $heure = $req->input('heure');
        activite_recentes::where('id_user',$id_user)->where('heure',$heure)->delete();
        BackgroundColors::where('id',1)->update(['clor_res' => $color,'clor_obj' => $color,'clor_va' => $color,'clor_pro' => $color]);

    }
    public function UpdateTheseInTableActivite(Request $req){
        $id_user = $req->input('id');
        $ancien_heure = $req->input('ancien_heure');
        $new_heure = $req->input('new_heure');
        activite_recentes::where('id_user',$id_user)->where('heure',$ancien_heure)->update(['heure' => $new_heure]);
        return $ancien_heure;

    }
}
