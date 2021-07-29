<?php

namespace App\Http\Controllers;

use App\Models\theses;
use App\Models\includes;
use App\Models\instituts;
use App\Models\actualites;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\recherche_scientifiques;

class EditRecheController extends Controller
{
     public function vericationdesthesedeUsr()
     {
        $id_theses=array();
      /*$id= Auth::user()->id ;
      $id_these=includes::where('id_user',$id)->get('id_these');
      return view('projet-fin-etude/accesPartenaire/editRecherche')
             ->with('idtheses',$id_these->id_these); */
             if( (Auth::user()->profil)=='admin'){
                $id_these = recherche_scientifiques::get('id_these');     
                 }
              else{
              $id= Auth::user()->id ;
              $id_these=includes::where('id_user',$id)->get('id_these');
              $i=count($id_these);
              for($k=0;$k<($i/2);$k++){
                            $id_theses[$k]=$id_these[$k]->id_these;
                           }                              
            } 
            return view('projet-fin-etude/accesPartenaire/editRecherche')
                  ->with('id_theses',$id_theses);
               
     }
    public function insertNewRech(Request $req){
        $rech= new recherche_scientifiques();
        $rech->lien = $req->input('lien');
        $rech->date = $req->input('dte');
        $rech->resumer = $req->input('resumer');
        $rech->id_these= 1;//$req->input('these');
        $rech->save();
    }
    
    public function getOneRech(Request $req){
        $verify=-2;
        $dte = $req->input('dte');
        $check = $req->input('check');
      //  if( (Auth::user()->profil)=='admin'){
          $response = recherche_scientifiques::where('date',$dte)->first(); 
        //     }
       /* else{
        $id= Auth::user()->id ;
        $champs=includes::where('id_user',$id)->get();
        $response = recherche_scientifiques::where('id_these',$champs->id_these)
                                ->where('date',$dte)
                                ->first(); 
      }*/
   
        if(!$response) return 'aucun_donnee';
        echo "<div class='w3-content' id='hide_actu'>";
            if($check=='delete'){
                echo " 
                <div class='w3-row w3-margin'>
                    <div class='w3-twothird w3-container'>
                        <h2>{$response->date}</h2>
                        <h2>{$response->lien}</h2>
                        <p>>{$response->resumer}</p>
                    </div>
                </div>";
               echo "<button class='btn btn-primary w3-right' onclick='DeleteOneRecherche({$response->id_rech},{$verify})'>Supprimer</button>";
            }
            if($check =='rech'){
                echo " 
                <div class='w3-row w3-margin'>
                    
                    <div class='w3-twothird w3-container'>
                    <input type='date' id='dteT' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
                    <p>Titre</p>
                      <textarea  class='form-control' rows='4' id='lienT'>{$response->lien}</textarea ><br>
                      <p>Resumer</p>
                      <textarea  class='form-control' rows='14' id='resumerT'>{$response->resumer}</textarea>
                    </div>

                </div>";
               echo "<button class='btn btn-primary w3-right' onclick='UpdateRecherche({$response->id_rech},0)'>Enregistrer</button>
            ";
            }
        echo "</div>";
        echo "<div id='success' style='padding:10px;font-size:1.2em;' class='w3-text-light-green'></div>";

    }
    public function UpdateOneRech(Request $req){
        $id = $req->input('id');
        $dte = $req->input('dte');
        $lienT = $req->input('lienT');
        $resumerT = $req->input('resumerT');
         recherche_scientifiques::where('id_rech',$id)->update(['lien' => $lienT, 'resumer' => $resumerT,'date' => $dte]);
    }
    public function displayAllRech(){
        $check=-1;
        $a = -1000;
        $b =-1001;
        $i=0;
        $id_these=0;
        if( (Auth::user()->profil)=='admin'){
          $rech = recherche_scientifiques::all();     
           }
        else{
        $id= Auth::user()->id ;
        $id_these=includes::where('id_user',$id)->get('id_these');
        $i=count($id_these);
        for($k=0;$k<($i/2);$k++){
           $rech = recherche_scientifiques::where('id_these',$id_these[$k]->id_these)
                                        ->get();
                     }                              
      } 
      echo "
      <div class='chat-search-box w3-right' id='contentSearch'>
            <div class='input-group'>
                <input type='Search' class='form-control' id='dte_serachKeyWord' onkeyup='ChercherRechWihtTitre(this.id)' placeholder='Rechercher .....' required>
                <div class='input-group-btn'>
                    <button type='button' class='btn btn-info w3-light-blue' onclick='getOneRechWithKeyWord()'>
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
                    <th>Lien {$i}</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th class='w3-right'>Action</th>
                </tr>
                </thead>";
            foreach($rech as $response){
            $str =  substr($response->resumer,0,100);
            echo "
            <tbody id='myTable'>
                <tr>
                    <td><a herf='asset({$response->lien})'>{$response->lien}</a></td>
                    <td>{$str}............</td>
                    <td>{$response->date}</td>
                    <td>
                    <td> <button class='btn btn-primary' id='a{$response->id_rech}' onclick='DisplayChampedit(this.id,{$a},{$b})'>Modifier</button></td>
                    <td><button class='btn btn-danger' data-toggle='modal' data-target='#myModal{$response->id_rech}'>Supprimer</button></td>
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
                    <input type='date' id='dteT{$response->id_rech}' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
                <p>Titre</p>
                <textarea  class='form-control' rows='4' id='titreT{$response->id_rech}'>{$response->titre}</textarea ><br>              <p>Resumer</p>              <textarea  class='form-control' rows='14' id='resumerT{$response->id_actu}'>{$response->resumer}</textarea>   
            </div>
            </div>
            </form>

            <div class='w3-container w3-border-top w3-padding-16 w3-light-grey'><br><br>
               <button  onclick='UpdateRech({$response->id_rech},{$a})' type='button' class='btn btn-success'>Enregistrer</button>
            </div>
            </div>
            </div>
            ";
            $a++;
            $b--;

            echo "
            <div class='modal' id='myModal{$response->id_rech}'>
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
                    <button type='button' class='btn btn-danger' data-dismiss='modal' onclick='DeleteOneRecherche({$response->id_rech},{$check})'>Supprimer</button>
                </div>
                
            </div>
            </div>
            </div>
            ";
     }

    }

    public function DeleteOneReche(Request $req){
        $id = $req->input('id');
        recherche_scientifiques::where('id_rech',$id)->delete();
    }
    public function Research_WithKeyWord(Request $req){
        $keyword = $req->input('keyword');
        if(empty($keyword)) return;
        $data = recherche_scientifiques::where('titre','LIKE','%'.$keyword.'%')->get();
        // dd($data);
        // if(count($data)==0)
        //     echo "<li class='list-group-item' style='cursor:pointeur'>Aucune reponse venant du sereveur</li>";
        foreach ($data as $value) {
            echo "<li class='list-group-item' id='{$value->id_rech}' onclick='AfficherEventsTrouverAvecKeyword(this.id)' style='cursor:pointeur'>{$value->titre}</li>";
        }
    }

    public function SendEventsTrouverAvecKeyword(Request $req){
        $id = $req->input('id');
        $check = $req->input('check');
        $verify=-2;
        $response = recherche_scientifiques::where('id_rech',$id)->first();

         echo "<div class='w3-content' id='hide_actu'>";
        if($check==2){
                echo " 
                <div class='w3-row w3-margin'>
                    
                    <div class='w3-twothird w3-container'>
                        <h2>{$response->date}</h2>
                        <h2>{$response->titre}</h2>
                        <p>>{$response->resumer}</p>
                    </div>

                </div>";
               echo "<button class='btn btn-primary w3-right' onclick='DeleteOneEvents({$response->id_rech},{$verify})'>Supprimer</button>";
            }

        else{
        echo " 
        <div class='w3-row w3-margin'>
            
            <div class='w3-twothird w3-container'>
            <input type='date' id='dteT' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
            <p>Titre</p>
              <textarea  class='form-control' rows='4' id='titreT'>{$response->titre}</textarea ><br>
              <p>Resumer</p>
              <textarea  class='form-control' rows='14' id='resumerT'>{$response->resumer}</textarea>
            </div>

        </div>";
        echo "<button class='btn btn-primary w3-right' onclick='UpdateEvent({$response->id_rech},0)'>Enregistrer</button>
    ";
        }
        echo "</div>";
        echo "<div id='success' style='padding:10px;font-size:1.2em;' class='w3-text-light-green'></div>";
    }
}
