@extends('main')

@section('title', 'Pizza - Utilisateur')

@section('back')
    <form action="/">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <div>
        <a class="btn btn-primary" href="{{route('admin.pizza')}}">Créer un compte</a>
        <a class="btn btn-primary" href="{{route('admin.commande')}}">Modifier le mot de passe</a>
    </div>
@endsection

