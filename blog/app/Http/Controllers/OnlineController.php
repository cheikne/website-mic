<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\OnlineUser;
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

    public function AllUserOnline(){
        $data =  OnlineUser::where('bool',1)->get();
        // $user = User::where('id',$data->id_user)->first();
        foreach($data as $response){
            $user = User::where('id',$response->id_user)->first();
            echo "
                 <li class='person' data-chat='person1' id='personeEnLigne'>
                    <div class='user'>
                        <img src='https://www.bootdey.com/img/Content/avatar/avatar3.png' alt='Retail Admin'>
                        <span class='status online'></span>
                    </div>
                    <p class='name-time'>
                        <span class='name'>{$user->name}</span>
                    </p>
                </li>

            ";
        }
    }
}
