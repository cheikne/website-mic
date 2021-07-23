<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\includes;
use App\Models\activite_recentes;
use App\Models\OnlineUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnlineController extends Controller
{  
 // public function __construct(){
 //     $this->middleware('auth');
 //    }
    public function onlineUser(){
        $these1 ='undef';$these2 ='undef';$these3 ='undef';$these4 ='undef';$these5 ='undef';$these6='undef';$these7 ='undef';
        $tableUser = new User();
        $user = Auth::user()->id;
        $id_these = includes::where('id_user',$user)->get('id_these');
        // $dataOneline = $tableonline->where('bool',0)->get('id_user');
        foreach($id_these as $response){
            if($response->id_these==1) $these1 = "Realisation 1 (+)";
            if($response->id_these==2) $these2 = "Realisation 2 (+)";
            if($response->id_these==3) $these3 = "Realisation 3 (+)";
            if($response->id_these==4) $these4 = "Realisation 4 (+)";
            if($response->id_these==5) $these5 = "Realisation 5 (+)";
            if($response->id_these==6) $these6 = "Realisation 6 (+)";
            if($response->id_these==7) $these7 = "Realisation 7 (+)";
        }
        if($these1 == 'undef') $these1 = "Realisation 1 (-)";
        if($these2 == 'undef') $these2 = "Realisation 2 (-)";
        if($these3 == 'undef') $these3 = "Realisation 3 (-)";
        if($these4 == 'undef') $these4 = "Realisation 4 (-)";
        if($these5 == 'undef') $these5 = "Realisation 5 (-)";
        if($these6 == 'undef') $these6 = "Realisation 6 (-)";
        if($these7 == 'undef') $these7 = "Realisation 7 (-)";
        $dataUser = $tableUser->join('online_users','users.id','=','online_users.id_user')->where('bool',1)->get();
        return view('projet-fin-etude.accesPartenaire.accesPartenaire')
            ->with('dataUser',$dataUser)
            ->with('these1',$these1)
            ->with('these2',$these2)
            ->with('these3',$these3)
            ->with('these4',$these4)
            ->with('these5',$these5)
            ->with('these6',$these6)
            ->with('these7',$these7);
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
