<?php

use App\Http\Controllers\controdesthese;
use App\Models\recherche_scientifiques;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contact', function () {
//     return "Je suis salif";
// });
// Route::get('/Client','App\Http\Controllers\Clientcontroller@sendData');
Route::get('/Accueil', function () {
    return view('projet-fin-etude.index');
});
// Route::get('/', function () {
//     return view('projet-fin-etude.accueil');
// });
// $page2="projet-fin-etude.SubsMenuProjrtPartenaire";
// Route::get('/header', function () {
//     return view('/projet-fin-etude.header');
// });
// Route::get('/footer', function () {
//     return view('projet-fin-etude.footer');
// });
Route::get('/Accueil/Partenaire-Projet', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartner');
Route::get('/Accueil/Partenaire-Projet/{id}', 
    'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');
// Route::get('/Accueil/Partenaire-Projet/UCA', 
//     'App\Http\Controllers\InstituitPartner@LoadDataInstituitPartnerOne');

Route::get('/Accueil/Actualites',function(){
    return view('projet-fin-etude.actualites');
});
Route::get('Accueil/Evenements',function(){
    return view('projet-fin-etude.evenements');
});
Route::get('Accueil/Realisation',[controdesthese::class,"index"]);
Route::get('Accueil/Recherche_scientifique','App\Http\Controllers\recherchescientifique@index');