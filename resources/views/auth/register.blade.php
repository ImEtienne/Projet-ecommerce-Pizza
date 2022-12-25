@extends('main')
@section('title', 'S\'inscrire sur la page')

@section('back')
    <form action="/">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <p>S'inscrire</p>
    <form method="post">
        Login: <input type="text" name="login" value="{{old('login')}}" placeholder="Login" required>
        Nom : <input type="text" name="nom" value="{{old("nom")}}" placeholder="Nom" required>
        Prénom : <input type="text" name="prenom" value="{{old("prenom")}}" placeholder="Prénom" required>
        MDP: <input type="password" name="mdp">
        Confirmation MDP: : <input type="password" name="mdp_confirmation">
        <input type="submit" value="S'inscrire">
        @csrf
    </form>
@endsection
