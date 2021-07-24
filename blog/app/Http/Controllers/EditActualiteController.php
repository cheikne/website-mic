<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\actualites;
use App\Models\instituts;
use Illuminate\Support\Facades\Auth;

class EditActualiteController extends Controller
{
    public function insertNewActu(Request $req){
        $name= Auth::user()->institut ;
        $id_inst=instituts::where('name',$name)->first('id_inst');
        $actu= new actualites();
        $actu->titre = $req->input('titre');
        $actu->resumer = $req->input('resumer');
        $actu->dte = $req->input('dte');
        $actu->id_inst= $id_inst->id_inst;
        $actu->save();
    }
    public function getOneActu(Request $req){
        $dte = $req->input('dte');
        $response = actualites::where('date',$dte)->first();
        echo "<div class='w3-content'>";
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

                </div>
               <button class='btn btn-primary w3-right' onclick='UpdateActu({$response->id_actu})'>Enregistrer</button>
            ";
        echo "</div>";

    }
    public function UpdateOneActu(Request $req){
        $id = $req->input('id');
        $dte = $req->input('dte');
        $titreT = $req->input('titreT');
        $resumerT = $req->input('resumerT');
        $actu = actualites::where('id_actu',$id)->update(['titre' => $titreT, 'resumer' => $resumerT,'date' => $dte]);
    }
    public function displayAllActu(){
        $name= Auth::user()->institut ;
        $id_inst=instituts::where('name',$name)->first('id_inst');
        $actu = actualites::where('id_inst',$id_inst->id_inst)->get();
        echo "<div class='w3-content'>";
        foreach($event as $response){
            echo "
                <div class='w3-row w3-margin' id='{$response->id_actu}'>
                    <div class='w3-third'>
                      <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
                    </div>
                    <div class='w3-twothird w3-container' id='{$b}'>
                      <h2 class='w3-text-blue'>{$response->date}</h2>
                      <h2>{$response->titre}</h2>
                      <p>{$response->resumer}</p>
                    </div>
                    <div class='w3-twothird w3-container' style='display:none;' id='{$a}'>
                    <input type='date' id='dteT' value='{$response->date}'>&nbsp;&nbsp;<label>Date</label>
                    <p>Titre</p>
                      <textarea  class='form-control' rows='4' id='titreT'>{$response->titre}</textarea ><br>
                      <p>Resumer</p>
                      <textarea  class='form-control' rows='14' id='resumerT'>{$response->resumer}</textarea>
                        <button class='btn btn-primary w3-right' onclick='UpdateEvent({$response->id_actu})'>Modifier</button>
                    </div>
                    <div class='w3-right' id='a{$response->id_actu}'>
                        <button class='btn btn-primary' id='a{$response->id_actu}' onclick='DisplayChampedit(this.id,{$a},{$b})'>Modifier</button>
                        <button class='btn btn-primary' onclick='DeleteOneEvents({$response->id_actu},{$check})'>Supprimer</button>
                    </div>
                </div>
            ";
            $a++;
            $b--;
        }
        echo "</div>";
    } 
}
