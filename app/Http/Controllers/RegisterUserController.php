<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
//            'name' => 'required|string|max:255',
            'login' => 'required|string|max:255|unique:users',
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string',
            'mdp' => 'required|string|confirmed'//|min:8',
        ]);

        $user = new User();
        $user->login = $request->login;
        $user->nom= $request->nom;
        $user->prenom = $request->prenom;
        $user->mdp = Hash::make($request->mdp);
        $user->save();

        session()->flash('etat','l\'Utilisateur a été ajoué avec succès !');

        Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
        return redirect()->route('user.home');
    }
}
