<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\actualites;
class CrudEventController extends Controller
{
    public function insertNewEvent(Request $req){
        $eventv= new Evenemts();
        $event->titre = $req->input('titre');
        $event->resumer = $req->input('resumer');
        $event->dte = $req->input('dte');
        $event->save();
    }

    public function getOneEvents(Request $req){
        $verify=-2;
        $dte = $req->input('dte');
        $check = $req->input('check');
        $response = actualites::where('date',$dte)->first();
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
               echo "<button class='btn btn-primary w3-right' onclick='DeleteOneEvents({$response->id_actu},{$verify})'>Supprimer</button>";
            }
            if($check =='event'){
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
               echo "<button class='btn btn-primary w3-right' onclick='UpdateEvent({$response->id_actu})'>Enregistrer</button>
            ";
            }
        echo "</div>";
        echo "<div id='success' class='w3-text-light-green'></div>";

    }
    public function UpdateOneEvents(Request $req){
        $id = $req->input('id');
        $dte = $req->input('dte');
        $titreT = $req->input('titreT');
        $resumerT = $req->input('resumerT');
         actualites::where('id_actu',$id)->update(['titre' => $titreT, 'resumer' => $resumerT,'date' => $dte]);
    }
    public function displayAllEvents(){
        $check=-1;
        $a = -1000;
        $b =-1001;
        $event = actualites::get();
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

    public function DeleteOneEvents(Request $req){
        $id = $req->input('id');
        actualites::where('id_actu',$id)->delete();
    }
}
