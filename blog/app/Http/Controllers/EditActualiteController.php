<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\actualites;
use App\Models\instituts;
use Illuminate\Support\Facades\Auth;
use Highlight\Highlighter;

class EditActualiteController extends Controller
{
    public function insertNewActu(Request $req)
    {
      
        $name= Auth::user()->institut ;
        $id_inst=instituts::where('name',$name)->first('id_inst');
        $actu= new actualites();
        $actu->titre = $req->input('titre');
        $actu->resumer = $req->input('resumer');
        $actu->date = $req->input('dte');
        $actu->id_inst= $id_inst->id_inst;
       // $actu->image=$req->input('image');
     if($req->hasfile('image')){
          $file=$req->file('image');
          //$file=$req->image;
          $extension=$file->getClientOriginalExtension();
          $filname=time().'.'.$extension;
          $file->move('uploads/actu/',$filname);
          $actu->image=$filname;
        }
        else{
          return $req;
          $actu->image='';
        }  
       $actu->save();
      return view('projet-fin-etude.accesPartenaire.editActualites')->with('actu',$actu);
    }
    
    public function getOneActu(Request $req){
      $verify=-2;
      $dte = $req->input('dte');
      $check = $req->input('check');
     // if( (Auth::user()->profil)=='admin'){
        $response = actualites::where('date',$dte)->first();     
     /*  }
      else{
      $name= Auth::user()->institut ;
      $id_inst=instituts::where('name',$name)->first('id_inst');
      $response = actualites::where('id_inst',$id_inst->id_inst)
                              ->where('date',$dte)
                              ->first(); 
      }
    */
     
      if(!$response) return 'aucun_donnee';
      echo "<div class='w3-content' id='hide_actu'>";
          if($check=='delete'){
              echo " 
              <div class='w3-row w3-margin'>
                  <div class='w3-third'>
                    <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
                  </div>
                  <div class='w3-twothird w3-container'>
                      <h2>{$response->date}</h2>
                      <h2>{$response->titre}</h2>
                      <p>>{$response->resumer}</p>
                  </div>

              </div>";
             echo "<button class='btn btn-primary w3-right' onclick='DeleteOneActualite({$response->id_actu},{$verify})'>Supprimer</button>";
          }
          if($check =='actu'){
              echo " 
              <div class='w3-row w3-margin'>
                  <div class='w3-third'>
                    <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
                    <br><button>add new image</button>
                  </div>
                  <div class='w3-twothird w3-container'>
                  <input type='date' id='dteT' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
                  <p>Titre</p>
                    <textarea  class='form-control' rows='4' id='titreT'>{$response->titre}</textarea ><br>
                    <p>Resumer</p>
                    <textarea  class='form-control' rows='14' id='resumerT'>{$response->resumer}</textarea>
                  </div>

              </div>";
             echo "<button class='btn btn-primary w3-right' onclick='UpdateActualite({$response->id_actu},0)'>Enregistrer</button>
          ";
          }
      echo "</div>";
      echo "<div id='success' style='padding:10px;font-size:1.2em;' class='w3-text-light-green'></div>";
    }
    public function UpdateOneActu(Request $req){
        
        $id = $req->input('id');
        $dte = $req->input('dte');
        $titreT = $req->input('titreT');
        $resumerT = $req->input('resumerT');
         actualites::where('id_actu',$id)->update(['titre' => $titreT, 'resumer' => $resumerT,'date' => $dte]);
    }
    public function displayAllActu(){
        $check=-1;
        $a = -1000;
        $b =-1001;
        if( (Auth::user()->profil)=='admin'){
          $actu=actualites::all();
        }
        else{
        $name= Auth::user()->institut ;
        $id_inst=instituts::where('name',$name)->first('id_inst');
        $actu = actualites::where('id_inst',$id_inst->id_inst)->get();
      }
      echo "
       <div class='chat-search-box w3-right' id='contentSearch'>
        <label>Entrer la date de l'actualité</label>
        <div class='input-group'>
            <input type='Search' class='form-control' id='dte_serachKeyWord' onkeyup='ChercherActuWihtTitre(this.id)' placeholder='Rechercher .....' required>
            <div class='input-group-btn'>
                <button type='button' class='btn btn-info w3-light-blue' onclick='getOneActuWithKeyWord()'>
                    <i class='fa fa-search'></i>
                </button>
            </div>
            <ul class='list-group' id ='resKeyword'></ul><br><br><br>
        </div>
        </div><br><br><br><br><br>
        <div id='resultat'></div>
        ";
        echo " <table class='table table-dark table-hover'>
            <thead>
              <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Date</th>
                <th class='w3-right'>Action</th>
              </tr>
            </thead>";
 foreach($actu as $response){
 $str =  substr($response->resumer,0,100);
 echo "
     <tbody id='myTable'>
       <tr>
         <td>{$response->titre}</td>
         <td>{$str}............</td>
         <td>{$response->date}</td>
         <td>
         <td> <button class='btn btn-primary' id='a{$response->id_actu}' onclick='DisplayChampedit(this.id,{$a},{$b})'>Modifier</button></td>
         <td><button class='btn btn-danger' data-toggle='modal' data-target='#myModal{$response->id_actu}'>Supprimer</button></td>
         </td>
       </tr>
     </tbody>  
     ";
 
 echo "
     <div id='{$a}' class='w3-modal'>
     <div class='w3-modal-content w3-card-4 w3-animate-zoom' style='max-width:700px;'>
   
       <div class='w3-center'><br>
         <span onclick='closeModal({$a})' class='w3-button w3-xlarge w3-transparent w3-display-topright' title='Close Modal'>×</span>
       </div>

       <form class='w3-container' >
         <div class='w3-section'>
              <div class='container'>
                  <input type='date' id='dteT{$response->id_actu}' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
            <p>Titre</p>
              <textarea  class='form-control' rows='4' id='titreT{$response->id_actu}'>{$response->titre}</textarea ><br>              <p>Resumer</p>              <textarea  class='form-control' rows='14' id='resumerT{$response->id_actu}'>{$response->resumer}</textarea>   
     </div>
         </div>
       </form>

       <div class='w3-container w3-border-top w3-padding-16 w3-light-grey'><br><br>
         <button  onclick='UpdateActualite({$response->id_actu},{$a})' type='button' class='btn btn-success'>Enregistrer</button>
       </div>
     </div>
   </div>
 ";
     $a++;
     $b--;


    
     echo "
     <div class='modal' id='myModal{$response->id_actu}'>
         <div class='modal-dialog'>
           <div class='modal-content'>
           
             <!-- Modal Header -->
             <div class='modal-header'>
               <h4 class='modal-title'>Etesvous sur de vouloir supprimer ?</h4>
               <button type='button' class='close' data-dismiss='modal'>&times;</button>
             </div>
             
             <!-- Modal body -->
             <div class='modal-body'>
             Si vous le supprimer il sera supprimé pour toujours !!
             </div>
             
             <!-- Modal footer -->
             <div class='modal-footer'>
               <button type='button' class='btn btn-primary' data-dismiss='modal'>Annuler</button>
                <button type='button' class='btn btn-danger' data-dismiss='modal' onclick='DeleteOneEvents({$response->id_actu},{$check})'>Supprimer</button>
             </div>
             
           </div>
         </div>
       </div>
     ";
     }
 } 
    public function DeleteOneActu(Request $req){
      $id = $req->input('id');
      actualites::where('id_actu',$id)->delete();
  }

public function Research_WithKeyWord(Request $req){
  $keyword = $req->input('keyword');
  if(empty($keyword)) return;
  $data = actualites::where('titre','LIKE','%'.$keyword.'%')->get();
  // dd($data);
  // if(count($data)==0)
  //     echo "<li class='list-group-item' style='cursor:pointeur'>Aucune reponse venant du sereveur</li>";
  foreach ($data as $value) {
      echo "<li class='list-group-item' id='{$value->id_actu}' onclick='AfficherActuTrouverAvecKeyword(this.id)' style='cursor:pointeur'>{$value->titre}</li>";
  }
}

public function SendActuTrouverAvecKeyword(Request $req){
  $id = $req->input('id');
  $check = $req->input('check');
  $verify=-2;
  $response = actualites::where('id_actu',$id)->first();

   echo "<div class='w3-content' id='hide_actu'>";
  if($check==2){
          echo " 
          <div class='w3-row w3-margin'>
              <div class='w3-third'>
                <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
              </div>
              <div class='w3-twothird w3-container'>
                  <h2>{$response->date}</h2>
                  <h2>{$response->titre}</h2>
                  <p>>{$response->resumer}</p>
              </div>

          </div>";
         echo "<button class='btn btn-primary w3-right' onclick='DeleteOneActualite({$response->id_actu},{$verify})'>Supprimer</button>";
      }

  else{
  echo " 
  <div class='w3-row w3-margin'>
      <div class='w3-third'>
        <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
        <br><button>add new image</button>
      </div>
      <div class='w3-twothird w3-container'>
      <input type='date' id='dteT' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
      <p>Titre</p>
        <textarea  class='form-control' rows='4' id='titreT'>{$response->titre}</textarea ><br>
        <p>Resumer</p>
        <textarea  class='form-control' rows='14' id='resumerT'>{$response->resumer}</textarea>
      </div>

  </div>";
  echo "<button class='btn btn-primary w3-right' onclick='UpdateActualite({$response->id_actu},0)'>Enregistrer</button>
";
  }
  echo "</div>";
  echo "<div id='success' style='padding:10px;font-size:1.2em;' class='w3-text-light-green'></div>";
}
}

