<?php

namespace App\Http\Controllers;
use App\Models\instituts;
use App\Models\actualites;
use Illuminate\Http\Request;

class InstituitPartner extends Controller
{
    public function LoadDataInstituitPartner(){

     $data = instituts::all();
     $path = "Accueil>Partenaire-Projets";
     return view('projet-fin-etude.SubsMenuProjetPartenaire')
        ->with('contentProjectPartners','projet-fin-etude.firstContentSubsMenu')
        ->with('detailInstituit','data')
        ->with('is_projetParteners',true)
        ->with('is_home',false)
        ->with('is_event',false)
        ->with('is_actu',false)
        ->with('is_research',false)
        ->with('is_realisation',false)
        ->with('path',$path);
    }
     public function LoadDataInstituitPartnerOne($id){
      $table_inst = new instituts();
      $table_actu = new actualites();
      $detailInstituit = $table_inst->where('name',$id)->first();
      $detailActu = $table_actu->where('id_inst',$detailInstituit->id_inst)->get();
      $path = "Accueil>Partenaire-Projets>".$id;
      return view('projet-fin-etude.SubsMenuProjetPartenaire')
        ->with('contentProjectPartners','projet-fin-etude.Partenaires')
        ->with('detailInstituit',$detailInstituit)
        ->with('detailActuali',$detailActu)
        ->with('is_projetParteners',false)
        ->with('is_home',false)
        ->with('is_event',false)
        ->with('is_actu',false)
        ->with('is_research',false)
        ->with('is_realisation',false)
        ->with('path',$path);
    }
    public function getDataJson(){
        // $data = file_get_contents(asset('js/staticData.json'));
        // $menuBar = collect($data);
        return view('projet-fin-etude.index')
        ->with('is_projetParteners',false)
        ->with('is_home',true)
        ->with('is_event',false)
        ->with('is_actu',false)
        ->with('is_research',false)
        ->with('is_realisation',false);
    }
}
