<?php
use Illuminate\Support\Facades\Route;

Route::get('/Accueil','App\Http\Controllers\InstituitPartner@getDataJson');

Route::get('/Accueil/Partenaire-Projet', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartner');
Route::get('/Accueil/Partenaire-Projet/{id}', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');
// Route::get('/Accueil/Partenaire-Projet/UCA', 
//     'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');
Route::get('Accueil/Realisation','App\Http\Controllers\controdesthese@LoadDataRealisation');
Route::get('Accueil/Recherche-Scientifique','App\Http\Controllers\recherchescientifiques@LoadAllDataResearch');

Route::get('/Accueil/Actualites','App\Http\Controllers\InstituitPartner@getActualites');
Route::get('Accueil/Evenements','App\Http\Controllers\InstituitPartner@getActualites2');

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
Route::view('/Accueil/Acces-Partenaire/Chat-Conversation','projet-fin-etude.accesPartenaire.chatConversation');
Route::get('/Accueil/Acces-Partenaire/{id}','App\Http\Controllers\EditThesesController@AffichierTheseModifie');
Route::get('{path}/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
// Route::get('/Accueil/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
// Route::get('/Accueil/Partenaire-Projet/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
Route::get('modificationThese','App\Http\Controllers\EditThesesController@modificationThese');
Route::get('recherchedestheses','App\Http\Controllers\These@recherchedestheses');
Route::view('/Accueil/Realisation/These','projet-fin-etude.These');
?>