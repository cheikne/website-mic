<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/////////////////////////////////////////////////////////////////////
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
Route::get('Accueil/Acces-Partenaire','\App\Http\Controllers\OnlineController@onlineUser')->middleware(['auth'])->name('dashboard');
Route::view('/Accueil/Acces-Partenaire/Chat-Conversation','projet-fin-etude.accesPartenaire.chatConversation');
Route::get('/Accueil/Acces-Partenaire/These1','App\Http\Controllers\EditThesesController@AffichierThese1Modifie');
Route::get('/Accueil/Acces-Partenaire/These2','App\Http\Controllers\EditThesesController@AffichierThese2Modifie');
Route::get('/Accueil/Acces-Partenaire/These3','App\Http\Controllers\EditThesesController@AffichierThese3Modifie');
Route::get('/Accueil/Acces-Partenaire/These4','App\Http\Controllers\EditThesesController@AffichierThese4Modifie');
Route::get('/Accueil/Acces-Partenaire/These5','App\Http\Controllers\EditThesesController@AffichierThese5Modifie');
Route::get('/Accueil/Acces-Partenaire/These6','App\Http\Controllers\EditThesesController@AffichierThese6Modifie');
Route::get('/Accueil/Acces-Partenaire/These7','App\Http\Controllers\EditThesesController@AffichierThese7Modifie');
Route::get('/Actualite/edit','App\Http\Controllers\UpdateSupInserActualite@modifieSupInsert');
Route::view('/Accueil/Acces-Partenaire/Actualites','projet-fin-etude.accesPartenaire.editActualites');
Route::view('/Accueil/Acces-Partenaire/Evenements','projet-fin-etude.accesPartenaire.editEvents');
// Route::get('/Accueil/Acces-Partenaire/{id}','App\Http\Controllers\EditThesesController@getIdthese');

Route::get('/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
Route::get('/{path}/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
// Route::get('/Accueil/Partenaire-Projet/CheckLoginUser','App\Http\Controllers\CheckLoginUserController@CheckLoginUser');
Route::get('/Accueil/Acces-Partenaire/These-Modifiée/{id}','App\Http\Controllers\EditThesesController@AfficherViewTheseModifiee');

Route::get('/Accueil/updateTableLog','App\Http\Controllers\updateTableLogController@updateTableLog');
Route::get('/Accueil/AllUserOnline','App\Http\Controllers\OnlineController@AllUserOnline');
Route::get('/Accueil/UserLogoutRecent','App\Http\Controllers\UserLogoutController@UserLogoutRecent');
Route::get('/Accueil/Acces-Partenaire/updateThese','App\Http\Controllers\EditThesesController@updateThese');
Route::get('/Accueil/Acces-Partenaire/getActiviteRecente','App\Http\Controllers\activiteController@getActiviteRecente');
Route::get('/Accueil/Acces-Partenaire/DeleteTheseInTableActivite','App\Http\Controllers\EditThesesController@DeleteTheseInTableActivite');
Route::get('/Accueil/Acces-Partenaire/UpdateTheseInTableActivite','App\Http\Controllers\EditThesesController@UpdateTheseInTableActivite');
Route::get('/Accueil/Acces-Partenaire/insertNewEvent','App\Http\Controllers\CrudEventController@insertNewEvent');
Route::get('/Accueil/Acces-Partenaire/getOneEvents','App\Http\Controllers\CrudEventController@getOneEvents');
Route::get('/Accueil/Acces-Partenaire/UpdateOneEvents','App\Http\Controllers\CrudEventController@UpdateOneEvents');
Route::get('/Accueil/Acces-Partenaire/displayAllEvents','App\Http\Controllers\CrudEventController@displayAllEvents');
Route::get('/Accueil/Acces-Partenaire/DeleteOneEvents','App\Http\Controllers\CrudEventController@DeleteOneEvents');
Route::get('/Accueil/Acces-Partenaire/Research_WithKeyWord','App\Http\Controllers\CrudEventController@Research_WithKeyWord');
Route::get('/Accueil/Acces-Partenaire/Research_WithKeyWord','App\Http\Controllers\CrudEventController@Research_WithKeyWord');
Route::get('/Accueil/Acces-Partenaire/SendEventsTrouverAvecKeyword','App\Http\Controllers\CrudEventController@SendEventsTrouverAvecKeyword');


////////////////////////////////////Partie Actalite////////////////////
Route::get('/Accueil/Acces-Partenaire/DeleteOneActu','App\Http\Controllers\EditActualiteController@DeleteOneActu');
Route::post('/Accueil/Acces-Partenaire/Actualites','App\Http\Controllers\EditActualiteController@insertNewActu');
Route::get('/Accueil/Acces-Partenaire/getOneActu','App\Http\Controllers\EditActualiteController@getOneActu');
Route::get('/Accueil/Acces-Partenaire/UpdateOneActu','App\Http\Controllers\EditActualiteController@UpdateOneActu');
Route::get('/Accueil/Acces-Partenaire/displayAllActu','App\Http\Controllers\EditActualiteController@displayAllActu');
////////////////////////////////////Fin Actalite////////////////////
////////////////////////////////////Partie Recherche Scientfique////////////////////
Route::get('/Accueil/Acces-Partenaire/DeleteOneReche','App\Http\Controllers\EditRecheController@DeleteOneReche');
Route::get('/Accueil/Acces-Partenaire/insertNewRech','App\Http\Controllers\EditRecheController@insertNewRech');
Route::get('/Accueil/Acces-Partenaire/getOneRech','App\Http\Controllers\EditRecheController@getOneRech');
Route::get('/Accueil/Acces-Partenaire/UpdateOneRech','App\Http\Controllers\EditRecheController@UpdateOneRech');
Route::get('/Accueil/Acces-Partenaire/displayAllRech','App\Http\Controllers\EditRecheController@displayAllRech');
Route::get('/Accueil/Acces-Partenaire/Recherche','App\Http\Controllers\EditRecheController@vericationdesthesedeUsr');
// Route::view('/Accueil/Acces-Partenaire/Recherche','projet-fin-etude.accesPartenaire.editRecherche');
// Route::post('/Accueil/Acces-Partenaire/insertNewActu','App\Http\Controllers\EditActualiteController@insertNewActu')->('addimage');
////////////////////////////////////Fin de la Recherche Scientfique////////////////////


Route::get('recherchedestheses','App\Http\Controllers\These@recherchedestheses');
Route::view('/Accueil/Realisation/These','projet-fin-etude.these');
///////////////////////////////////////////////////////////////////
// Route::get('/Accueil/Acces-Partenaire', function () {
//     return view('projet-fin-etude.accesPartenaire.accesPartenaire');
// })->middleware(['auth'])->name('accesPartenaire');

// Route::get('dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
// // Route::get('Accueil/Acces-Partenaire','\App\Http\Controllers\OnlineController@onlineUser');
require __DIR__.'/auth.php';
