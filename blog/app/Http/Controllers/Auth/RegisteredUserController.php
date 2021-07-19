<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\OnlineUser;
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

        $tableUser =new User();
        $new_user = $tableUser->where('email',$request->email)->first();
        $online_user = new OnlineUser();
            $online_user->heure = '12:00';
            $online_user->bool = 1;
            $online_user->id_user = $new_user->id;
        $online_user->save();

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
