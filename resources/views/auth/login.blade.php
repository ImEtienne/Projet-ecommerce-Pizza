@extends('main')

@section('title', 'Pizza - Connexion')

@section('back')
    <form action="/">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <form method="post">
        <label>Connexion : </label><br>
        Login: <input type="text" name="login" value="{{old('login')}}">
        MDP: <input type="password" name="mdp">
        <input type="submit" value="Envoyer">
        @csrf
    </form>
@endsection
