<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_deconnecter;
use App\Models\OnlineUser;
use App\Models\includes;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'profil' => 'required|string|max:255',
            'institut' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'profil' => $request->profil,
            'institut' => $request->institut,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        //Enregistrement de new user dans la table OnlineUser
        $tableUser =new User();
        $new_user = $tableUser->where('email',$request->email)->first();
        $online_user = new OnlineUser();
            $online_user->heure = '12:00';
            $online_user->bool = 1;
            $online_user->id_user = $new_user->id;
        $online_user->save();

        //Enregistrement de new user dans la table UserDeconnecter
        $tableLogout = new user_deconnecter();
        $tableLogout->heure = '12:00';
        $tableLogout->bool = 0;
        $tableLogout->id_user = $new_user->id;
        $tableLogout->save();

        //Enregistrer user dna sla table include
        if(!empty($request->these)){
            $data = explode(',',$request->these);
            for($i=0;$i<count($data);$i++){
                $tablesInclude = new includes();
                $tablesInclude->id_user =  $new_user->id;
                $tablesInclude->id_these =  $data[$i];
                $tablesInclude->save();
            }
        }
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
