<?php

namespace App\Http\Controllers;
use App\Models\instituts;
use App\Models\actualites;
use Illuminate\Http\Request;

class InstituitPartner extends Controller
{
    public function LoadDataInstituitPartner(){

     $data = instituts::all();
     return view('projet-fin-etude.SubsMenuProjetPartenaire',
        ['cheminPage'=>'projet-fin-etude.SubsMenuProjetPartenaire',],
        ['detailInstituit'=>$data]);   
    }
     public function LoadDataInstituitPartnerOne($id){
      $table_inst = new instituts();
      $table_actu = new actualites();
      $detailInstituit = $table_inst->where('name',$id)->first();
      $detailActu = $table_actu->where('id_inst',$detailInstituit->id_inst)->get();
     // return view('projet-fin-etude.Partenaires',
     //    ['cheminPage'=>'projet-fin-etude.SubsMenuProjetPartenaire',],
     //    compact('detailInstituit'),['detailActuali'=>$detailActu]);  
      return view('projet-fin-etude.Partenaires')
        ->with('cheminPage','projet-fin-etude.SubsMenuProjetPartenaire')
        ->with('detailInstituit',$detailInstituit)
        ->with('detailActuali',$detailActu);   
    }
}
