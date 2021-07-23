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
               <button class='btn btn-primary w3-right' onclick='UpdateEvent({$response->id_actu})'>Enregistrer</button>
            ";
        echo "</div>";

    }
    public function UpdateOneEvents(Request $req){
        $id = $req->input('id');
        $dte = $req->input('dte');
        $titreT = $req->input('titreT');
        $resumerT = $req->input('resumerT');
        $actu = actualites::where('id_actu',$id)->update(['titre' => $titreT, 'resumer' => $resumerT,'date' => $dte]);
    }
    public function displayAllEvents(){
        $actu = actualites::get();
        echo "<div class='w3-content'>";
        foreach($actu as $response){
            echo "
                <div class='w3-row w3-margin'>
                    <div class='w3-third'>
                      <img src='{$response->urlImg}' style='width:100%;min-height:400px'>
                    </div>
                    <div class='w3-twothird w3-container'>
                      <h2 class='w3-text-blue'>{$response->date}</h2>
                      <h2>{$response->titre}</h2>
                      <p>{$response->resumer}</p>
                    </div>
                    <button class='btn btn-primary w3-right' onclick='DeleteOneEvents({$response->id_actu})'>Supprimer</button>
                    <button class='btn btn-primary w3-right' onclick='UpdateEvent({$response->id_actu})'>Modifier</button>
                </div>
            ";
        }
        echo "</div>";
    } 
}
