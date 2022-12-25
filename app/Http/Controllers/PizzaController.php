<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizza = Pizza::all();
        return view ('admin.pizza.index', ['pizzas' => $pizza]);
    }
    public function addForm(){
        return view('admin.pizza.add');
    }
    public function add(Request $request){
        $validated=$request->validate([
            'nom'=>'required|alpha|max:50',
            'description'=>'required|string|max:50',
            'prix'=>'required|numeric'
        ]);
        $pizza = new Pizza();
        $pizza->nom=$validated['nom'];
        $pizza->description=$validated['description'];
        $pizza->prix=$validated['prix'];
        $pizza->save();
        $request->session()->flash('etat', 'l\'ajout a été effectué avec succès');
        return redirect()->route('admin.pizza');
    }
    //Les fonctions pour la modification

    public function editForm($id){
        $edit = Pizza::find($id);
        return view('admin.pizza.edit', ['pizzas'=> $edit]);
    }

    public function edit(Request $request, $id){
        $validated=$request->validate([
            'nom'=>'required|alpha|max:50',
            'description'=>'required|string|max:265',
            'prix'=>'required|numeric'
        ]);
        $pizza = Pizza::find($id);
        $pizza->nom=$validated['nom'];
        $pizza->description=$validated['description'];
        $pizza->prix=$validated['prix'];
        $pizza->save();
        $request->session()->flash('etat', 'la modification a été effectuée avec succès');
        //return view('mod_form',['nom' => $user]);
        return redirect()->route('admin.pizza',['pizzas' => $pizza]);
    }

    public function deleteForm($id){
        $p = Pizza::find($id);
        return view('admin.pizza.delete', ['pizzas'=>$p]);
    }
    public function delete(Request $request, $id){
        $supprimer = Pizza::findOrFail($id);
        $supprimer->delete($id);
        $request->session()->flash('etat', 'la suppression a été effectuée avec succès');
        return redirect()->route('admin.pizza');
    }
}
