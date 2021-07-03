<?php

namespace App\Http\Controllers;
use App\Models\Instituit;
use Illuminate\Http\Request;

class InstituitPartner extends Controller
{
    public function LoadDataInstituitPartner(){

     $data = Instituit::all();
     return view('projet-fin-etude.header',
        ['cheminPage'=>'projet-fin-etude.SubsMenuProjetPartenaire',],
        ['detailInstituit'=>$data]);   
    }
     public function LoadDataInstituitPartnerOne($id){
      $table = new Instituit();
     $detailInstituit = $table->where('name',$id)->first();
     return view('projet-fin-etude.Partenaires',
        ['cheminPage'=>'projet-fin-etude.SubsMenuProjetPartenaire',],compact('detailInstituit'));   
    }
}
