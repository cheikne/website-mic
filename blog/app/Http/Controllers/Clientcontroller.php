<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\projet_fin_etudes;
class Clientcontroller extends Controller
{
    public function sendData(){
        // $var = User::all();
        $var = projet_fin_etues::table('users')->find(3);
        // $var = ['kane','salif','amadou','semlalia'];
        return view('Client.index',['client'=>$var]);
    }
}
