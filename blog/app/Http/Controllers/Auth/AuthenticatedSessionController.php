<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\includes;
use App\Models\OnlineUser;
use App\Models\user_deconnecter;
use \Carbon\Carbon;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {  
        $request->authenticate();

        $request->session()->regenerate();

        $table_user = new User();
        $table_userOnline =new OnlineUser();
        $tablethese = new includes();
        $user = $table_user->where('email',$request->email)->first();
        // echo "djdjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj".$request->email;
        $table_userOnline->where('id_user',$user->id)->update(['bool' => 1]);
        $id_these = $tablethese->where('id_user',$user->id)->first();
        $heure = Carbon :: now ();
        user_deconnecter::where('id_user',$user->id)->update(['bool' => 0,'heure' => $heure]);

        // return view('projet-fin-etude.accesPartenaire.ac');
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
