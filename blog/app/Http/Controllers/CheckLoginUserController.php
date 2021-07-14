<?php

namespace App\Http\Controllers;
use App\Models\user_partenaires;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;
 // 'Input' => Illuminate\Support\Facades\Request::class;
class CheckLoginUserController extends Controller
{
   public function CheckLoginUser(Request $request){
    $userTbale = new user_partenaires();
    $user = $request->input('email');
    $pwd = $request->input('pwd');
    $data = $userTbale->where('password',$pwd)->first();
        if($data){
            // echo 'Le nom de user est  :'.$data->name_user;
            // echo 'Le Prenom de user est  :'.$data->prenom_user;
            return 'checked';
        }else{
            echo "User Inconnue";
        }
    }
}
?>