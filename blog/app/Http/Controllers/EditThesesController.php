<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\theses;
use App\Models\includes;
use App\Models\activite_recentes;
use App\Models\BackgroundColors;
use App\Models\StockerModification;

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
        $couleur = BackgroundColors::where('id',2)->first();
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
        $couleur = BackgroundColors::where('id',3)->first();
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
        $couleur = BackgroundColors::where('id',4)->first();
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
        $couleur = BackgroundColors::where('id',5)->first();
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
        $couleur = BackgroundColors::where('id',6)->first();
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
        $couleur = BackgroundColors::where('id',7)->first();
        $id_user = Auth::user()->id;
        $tablesInclude = new includes();
        $data = $tableThese->where('id_these',7)->first();
        $lien = $tablesInclude->where('id_these',7)->get('id_user');
        return view('projet-fin-etude.accesPartenaire.editThese')
        ->with('response',$data)
        ->with('lien',$lien)
        ->with('couleur',$couleur);
    }


    public function AfficherViewTheseModifiee($id){
        $data = StockerModification::where('id_activite',$id)->first();
        $couleur = BackgroundColors::where('id_activite',$data->id_activite)->first();
        return view('projet-fin-etude.accesPartenaire.TheseModifieeByUser')
                ->with('response',$data)
                ->with('couleur',$couleur);
    }

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
    public  function definirCouleure($res,$obj,$val_a,$probl,$id_activite,$name_T)
    {
        $insert = new BackgroundColors();
        $insert->clor_pro = $probl;
        $insert->clor_res = $res;
        $insert->clor_va = $val_a;
        $insert->clor_pro = $probl;
        $insert->clor_obj = $obj;
        $insert->clor_nameT = $name_T;
        $insert->id_these = 1;
        $insert->id_activite = $id_activite;
        $insert->save();
    }
    public function StoreTheseModifiee($titre,$resul,$prob,$val_a,$obj,$id_color,$id_activite,$date,$id_these){
        $tableStockModif = new StockerModification();
        $id_user = Auth::user()->id;
       $res = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
        $tableStockModif->titre_these =$titre;
        $tableStockModif->resultats =$resul;
        $tableStockModif->problematique =$prob;
        $tableStockModif->objectif =$obj;
        $tableStockModif->valeur_ajoute =$val_a;
        $tableStockModif->id_color =$id_color;
        $tableStockModif->id_activite =$res->id_activite;
        $tableStockModif->save();
        $url = '/Accueil/Acces-Partenaire/These-Modifiée/'.$res->id_activite;
        activite_recentes::where('id_activite',$res->id_activite)->update(['url'=> $user]);
    }

    public function updateThese(Request $req){
        $colorb = 'lightyellow';
        $colorlight = 'lightgrey';
        $attribut = $req->input('attribut');
        $text = $req->input('text');
        $id_user = $req->input('id_user');
        $id_these = $req->input('id');
        $date = $req->input('date');
        // $tableStockModif = new StockerModification();
        $TtableThese =theses::where('id_these',$id_these)->first();
        $checkExistAlready = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
         //Insertions des modifications de users dans la table activitee recente
        if(empty($checkExistAlready)){
            $tableActivit = new activite_recentes();
            $tableActivit->titre = 'Realisation'.$req->input('id');
            $tableActivit->heure =  $req->input('new_heure');
            $tableActivit->id_user = $req->input('id_user');
            $tableActivit->id_these = $id_these;
            $tableActivit->bool = 1;
            $tableActivit->date = $date;
            $tableActivit->url = 'fisrtvalue';
            $tableActivit->save();
        }
        if($attribut=='resultats'){
         theses::where('id_these',$req->input('id'))->update(['resultats' => $text]);
            if(empty($checkExistAlready)){
                $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
               self::definirCouleure($colorb,$colorlight,$colorlight,$colorlight,$id_act->id_activite,$colorlight);
                $color = BackgroundColors::where('id_activite',$id_act->id_activite)->first();
             self::StoreTheseModifiee($TtableThese->titre_these,$text,$TtableThese->problematique,
            $TtableThese->valeur_ajoute,$TtableThese->objectif,$color->id,$id_act->id_activite,$date,$id_these);
            }
            else{
                 $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
                BackgroundColors::where('id_activite',$id_act->id_activite)->update(['clor_res' => $colorb]);
                StockerModification::where('id_activite',$checkExistAlready->id_activite)->update(['resultats'=> $text]);
            }
        }
        else if($attribut=='objectif'){
            theses::where('id_these',$req->input('id'))->update(['objectif' => $text]);
            if(empty($checkExistAlready)){
                 $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
                self::definirCouleure($colorlight,$colorb,$colorlight,$colorlight,$id_act->id_activite,$colorlight);
                  $color = BackgroundColors::where('id_activite',$id_act->id_activite)->first();
                self::StoreTheseModifiee($TtableThese->titre_these,$text,$TtableThese->problematique,
            $TtableThese->valeur_ajoute,$text,$color->id,$id_act->id_activite,$date,$id_these);
            }else{
                 $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
                BackgroundColors::where('id_activite',$id_act->id_activite)->update(['clor_obj' => $colorb]);
                StockerModification::where('id_activite',$checkExistAlready->id_activite)->update(['objectif' => $text]);
            }
          // BackgroundColors::ere('id',$id_these)->update(['clor_obj'=>  $color]);
        }
        else if($attribut=='valeur_ajoutee'){
         theses::where('id_these',$req->input('id'))->update(['valeur_ajoute' => $text]);
         if(empty($checkExistAlready)){
             $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
          self::definirCouleure($colorlight,$colorlight,$colorb,$colorlight,$id_act->id_activite,$colorlight);
              $color = BackgroundColors::where('id_activite',$id_act->id_activite)->first();
          self::StoreTheseModifiee($TtableThese->titre_these,$text,$TtableThese->problematique,
            $text,$TtableThese->objectif,$color->id,$id_act->id_activite,$date,$id_these);
         }else{
                 $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
                BackgroundColors::where('id_activite',$id_act->id_activite)->update(['clor_va' => $colorb]);
                StockerModification::where('id_activite',$checkExistAlready->id_activite)->update(['valeur_ajoute' => $text]);
            }
          // BackgroundColors::ere('id',$id_these)->update(['clor_va'=>  $color]);
        }
        else if($attribut=='Problematique'){
          theses::where('id_these',$req->input('id'))->update(['problematique' => $text]);
          if(empty($checkExistAlready)){
             $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
            self::definirCouleure($colorlight,$colorlight,$colorlight,$colorb,$id_act->id_activite,$colorlight);
              $color = BackgroundColors::where('id_activite',$id_act->id_activite)->first();
            self::StoreTheseModifiee($TtableThese->titre_these,$text,$text,
            $TtableThese->valeur_ajoute,$TtableThese->objectif,$color->id,$id_act->id_activite,$date,$id_these);
          }else{
                 $id_act = activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->first();
                BackgroundColors::where('id_activite',$id_act->id_activite)->update(['clor_pro' => $colorb]);
                StockerModification::where('id_activite',$checkExistAlready->id_activite)->update(['problematique' => $text]);
            }
          // BackgroundColors::ere('id',$id_these)->update(['clor_pro'=>  $color]);
        }
       // else{
       //      // $ancien_heure = $req->input('ancien_heure');
       //      activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('date',$date)->update(['heure' => $new_heure,'delai' => $delai]);
       //      return "update";
       //  }
        return $req->input('attribut');
    }
    public function DeleteTheseInTableActivite(Request $req){
        $color = 'lightgrey';
        // $id_user = $req->input('id_user');
        // $id_these = $req->input('id_these');
        $heure = $req->input('heure');
        $alldata = activite_recentes::get();
        if(count($alldata)!=0){
            foreach($alldata as $value){
                echo "heure courante ".$heure."<br>";
                echo "heure deali ".$value->delai."<br>";
                if($heure == $value->delai){
                    activite_recentes::where('id_user',$value->id_user)->where('id_these',$value->id_these)->where('heure',$value->heure)->delete();
                     BackgroundColors::where('id',$value->id_these)->update(['clor_res' => $color,'clor_obj' => $color,'clor_va' => $color,'clor_pro' => $color]);
                }
            }
        }

    }
    public function UpdateTheseInTableActivite(Request $req){
        $id_user = $req->input('id');
        $ancien_heure = $req->input('ancien_heure');
        $new_heure = $req->input('new_heure');
        activite_recentes::where('id_user',$id_user)->where('id_these',$id_these)->where('heure',$ancien_heure)->update(['heure' => $new_heure]);
        return $ancien_heure;

    }
}
