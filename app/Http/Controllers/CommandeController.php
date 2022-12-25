<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\CommandePizza;
use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    public function show(){
        $pizzas = Pizza::paginate(15);
        return view('user.commande_pizza.home', ['pizzas' => $pizzas]);
    }

    public function showPanier(Request $request){
        if(!$request->session()->has('panier')){
            $request -> session() -> flash('etat', 'Votre panier est vide!');

            return view('user.panier');
        } else {
            $panier = $request->session()->get('panier');
            $pizzas = DB::table('pizzas') -> get();

            return view('user.commande_pizza.panier', ['pizzas' => $pizzas, 'panier' => $panier]);
        }
    }

    public function add(Request $request){
        if(!$request->session()->has('panier')){
            $panier = [];
            $request->session()->put('panier', $panier);
        } else {
            $panier = $request->session()->get('panier');
        }

        if(isset($panier[$request->id])){
            $panier[$request->id]++;
        } else {
            $panier[$request->id] = 1;
        }

        $request->session()->put('panier', $panier);
        $request -> session() -> flash('etat', 'Ajouté dans le panier !');

        return redirect()->route('user.commande');
    }

    public function update(Request $request){
        $validated = $request -> validate([
            'qte' => 'required|numeric'
        ]);

        $panier = $request->session()->get('panier');

        $panier[$request->id] = $validated['qte'];

        $request->session()->put('panier', $panier);
        $request -> session() -> flash('etat', 'Quantité modifié');

        return redirect()->route('user.panier');
    }

    public function delete(Request $request){
        $panier = $request->session()->get('panier');

        unset($panier[$request->id]);

        if(!$panier){
            $request->session()->forget('panier');
        } else {
            $request->session()->put('panier', $panier);
            $request -> session() -> flash('etat', 'Supprimé du panier!');
        }

        return redirect()->route('user.panier');
    }

    public function pay(Request $request){
        $p = new Commande();
        $p->user_id = Auth::id();
        $p->save();

        $panier = $request->session()->get('panier');
        foreach (collect($request->session()->get('panier'))->keys()->all() as $pizza_id) {
            $p_pizza = new CommandePizza();
            $p_pizza->commande_id = $p->id;
            $p_pizza->pizza_id = $pizza_id;
            $p_pizza->qte = $panier[$pizza_id];
            $p_pizza->save();
        }
        $request->session()->forget('panier');
        $request -> session() -> flash('etat', 'Votre commande est fait ! Numéro de commande: ' . strval($p->id));

        return redirect()->route('user.commande');
    }
}
