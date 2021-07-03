<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  MyController extends Controller
{
    public function sendData(){
        $var = ['kane','salif','amadou'];
        return view('Client.index',['client'=>$var]);
    }
}
