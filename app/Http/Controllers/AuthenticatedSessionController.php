<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticatedSessionController extends Controller
{
    public function showForm(){
        return view('auth.login');
    }

    // login action
    public function login(Request $request){

        $request->validate([
            'login' => 'required|string',
            'mdp' => 'required|string'
            ]);


        $credentials = ['login' => $request->input('login'), 'password' => $request->input('mdp')];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $request->session()->flash('etat','Connexion réussie');

            $type = User::where('login', $request->login)->value('type');

            if($type == 'admin') {
                return redirect()->intended('/admin');
            } else if ($type == 'cook'){
                return redirect()->intended('/cook');
            }
            return redirect()->intended('/user');
        }

        return back()->withErrors([
            'login' => 'Les informations de connexion sont incorrectes.',
        ]);
    }

    // logout action
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function passwd(Request $request){
        $request -> validate([
            'mdp_old' => 'required|string',
            'mdp' => 'required|string|confirmed'
        ]);

        $user = Auth::user();
        if(Hash::check($request->mdp_old, $user->mdp)){
            $user->fill(['mdp' => Hash::make($request->mdp)]) -> save();

            $request->session()->flash('etat','Mot de passe changé');
        } else {
            $request->session()->flash('etat','Mot de passe erroné, veuillez recommencer');
        }
        return redirect()->route('user.home');
    }
    public function Editpasswd(Request $request){
        $request -> validate([
            'mdp_old' => 'required|string',
            'mdp' => 'required|string|confirmed'
        ]);

        $user = Auth::user();
        if(Hash::check($request->mdp_old, $user->mdp)){
            $user->fill(['mdp' => Hash::make($request->mdp)]) -> save();

            $request->session()->flash('etat','Mot de passe changé');
        } else {
            $request->session()->flash('etat','Mot de passe erroné, veuillez recommencer');
        }
        return redirect()->route('cook.home');
    }
}
