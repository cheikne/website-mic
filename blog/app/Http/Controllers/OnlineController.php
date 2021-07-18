<?php

namespace App\Http\Controllers;
use App\Models\user_partenaires;
use App\Models\user_inlines;
use Illuminate\Http\Request;

class OnlineController extends Controller
{
    public function onlineUser(){
        $tableUser = new user_partenaires();
        // $tableonline = new user_inlines();
        // $dataOneline = $tableonline->where('bool',0)->get('id_user');
        $dataUser = $tableUser->join('user_inlines','user_partenaires.id_user','=','user_inlines.id_user')->where('bool',0)->get();
        return view('projet-fin-etude.accesPartenaire.accesPartenaire')
            ->with('dataUser',$dataUser);
    }
}
