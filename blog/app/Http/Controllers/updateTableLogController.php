<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OnlineUser;
use App\Models\user_deconnecter;

class updateTableLogController extends Controller
{
    public function updateTableLog(Request $req){
        $tableOnline = new OnlineUser();
        $tablelogout = new user_deconnecter();
        $id_user = $req->input('id');
        $time = $req->input('heure');
       $tablelogout->where('id_user',$id_user)->update(['bool' => 1,'heure' => $time]);
       $tableOnline->where('id_user',$id_user)->update(['bool' => 0,'heure' => $time]);
       return response()->json($req);
    }
}
