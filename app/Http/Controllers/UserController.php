<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::where('type', '<>', 'admin')->get();
        return view('admin.users.index', ['users'=>$user]);
    }

    public function editForm($id){
        $p = User::find($id);
        return view('admin.users.edit', ['users' => $p]);
    }

    public function edit(Request $request){
        $request -> validate([
            'mdp_old' => 'required|string',
            'mdp' => 'required|string|confirmed'
        ]);

        $user = Auth::user();

        if(Hash::check($request->mdp_old, $user->mdp)){
            $user->fill(['mdp' => Hash::make($request->mdp)])->save();
           $request->session()->flash('etat', 'Mot de passe changé');
           return redirect()->route('admin.users.index');
        }
        $request->session()->flash('etat','votre mot de passe n\'est pas correct, Veuillez réessayer');

        /*if(Auth::User()->type == 'admin'){
            return redirect()->route('admin.home');
        }
        else if(Auth::User()->type == 'cook'){
            return redirect()->route('cook.home');
        }*/

        return redirect()->route('admin.users.edit');

    }

    public function deleteForm($id){
        $p = User::find($id);
        return view('admin.users.deleteUser', ['users'=>$p]);
    }
    public function delete(Request $request, $id){
        $supprimer = User::find($id);
        $supprimer->delete($id);
        $request->session()->flash('etat', 'l\'utilisateur a été supprimé avec succès');
        return redirect()->route('admin.user');
    }

    public function createForm(){
        return view('admin.users.createPizzaiolo');
    }

    public function createPizzaiolo(Request $request){
        $request->validate([
            'login' => 'required|string|max:255|unique:users',
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'mdp' => 'required|string|confirmed' #|min:6 Plus de char pour plus de sécrutié
        ]);

        $user = new User();
        $user->login = $request->login;
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->mdp = Hash::make($request->mdp);
        $user->type = 'cook';
        $user->save();

        $request-> session()->flash('etat','Pizzaiolo enregistré');
        return redirect()->route('admin.user');

    }

    public function createFormAdmin(){
        return view('admin.users.createAdmin');
    }

    public function createAdmin(Request $request){
        $request->validate([
            'login' => 'required|string|max:255|unique:users',
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'mdp' => 'required|string|confirmed' #|min:6 Plus de char pour plus de sécrutié
        ]);

        $user = new User();
        $user->login = $request->login;
        $user->prenom = $request->prenom;
        $user->nom = $request->nom;
        $user->mdp = Hash::make($request->mdp);
        $user->type = 'admin';
        $user->save();

        $request-> session()->flash('etat','Admin enregistré');

        return redirect()->route('admin.user');

    }
}
