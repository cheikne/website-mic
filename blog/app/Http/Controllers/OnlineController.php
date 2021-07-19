<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\online_users;
use Illuminate\Http\Request;

class OnlineController extends Controller
{  
 // public function __construct(){
 //     $this->middleware('auth');
 //    }
    public function onlineUser(){
        $tableUser = new User();
        // $tableonline = new online_users();
        // $dataOneline = $tableonline->where('bool',0)->get('id_user');
        $dataUser = $tableUser->join('online_users','users.id','=','online_users.id_user')->where('bool',1)->get();
        return view('projet-fin-etude.accesPartenaire.accesPartenaire')
            ->with('dataUser',$dataUser);
    }
}
