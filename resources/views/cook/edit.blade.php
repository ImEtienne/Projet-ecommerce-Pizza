@extends('main')

@section('title', 'Modification du mot de passe')

@section('back')
    <form action="{{route('cook.home')}}">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <p>Modifier le mot de passe: </p>
    <form method="POST" >
        @method('put')
        Ancien mot de passe: <input type="password" name="mdp_old" placeholder="Mot de passe" required><br>
        Nouveau mot de passe: <input type="password" name="mdp" placeholder="Mot de passe" required><br>
        taper à nouveau : <input type="password" name="mdp_confirmation" placeholder="Confirmer le mot de passe" required><br>
        <input type="submit" value="Confirmer">
        @csrf
    </form>
@endsection
