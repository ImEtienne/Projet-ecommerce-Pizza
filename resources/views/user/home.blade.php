@extends('main')

@section('title', 'Pizza - Utilisateur')

@section('contents')
    <p>Bienvenue à la page d'utilisateur</p>
        <a class="btn btn-primary" href="{{route('user.commande')}}">commandes</a>
        <a class="btn btn-primary" href="{{route('register')}}">Créer compte</a>
        <a class="btn btn-primary" href="{{route('user.compte.modif')}}">Changer mot de passe</a>
@endsection
