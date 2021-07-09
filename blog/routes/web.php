<?php
use Illuminate\Support\Facades\Route;


Route::get('/Accueil','App\Http\Controllers\InstituitPartner@getDataJson');

Route::get('/Accueil/Partenaire-Projet', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartner');
Route::get('/Accueil/Partenaire-Projet/{id}', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');
// Route::get('/Accueil/Partenaire-Projet/UCA', 
//     'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');
Route::get('Accueil/Realisation',[controdesthese::class,'LoadDataRealisation']);
Route::get('Accueil/Recherche_scientifique','App\Http\Controllers\recherchescientifiques@LoadAllDataResearch');

Route::get('/Accueil/Actualites',function(){
    return view('projet-fin-etude.actualites')
        ->with('is_projetParteners',false)
        ->with('is_home',false)
        ->with('is_event',false)
        ->with('is_actu',true)
        ->with('is_research',false)
        ->with('is_realisation',false)
        ->with('path','Accueil>Actualites');
});
Route::get('Accueil/Evenements',function(){
    return view('projet-fin-etude.evenements')
      ->with('is_projetParteners',false)
        ->with('is_home',false)
        ->with('is_event',true)
        ->with('is_actu',false)
        ->with('is_research',false)
        ->with('is_realisation',false)
        ->with('path','Accueil>Evenements');
});

Route::get('/Accueil/Contact',function(){
    return view('/projet-fin-etude.contact')
        ->with('is_projetParteners',false)
        ->with('is_home',false)
        ->with('is_event',false)
        ->with('is_actu',false)
        ->with('is_research',false)
        ->with('is_realisation',false)
        ->with('path','Accueil>Contact');
});

//Acces partenaire
Route::get('Accueil/Acces-Partenaire',function(){
    return view('projet-fin-etude.accesPartenaire.accesPartenaire');
});
?>