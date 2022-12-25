@extends('main')

@section('title', 'Changement du mot de passe')

@section('back')
    <form action="{{route('admin.user')}}">
        <input type="submit" value="Retour">
    </form>
@endsection

@section('contents')
        <p>Modification du mot de passe : </p>
    <form action="{{route('admin.users.edit', ['id'=>$users->id])}}" method="POST">
        Ancien mot de passe : <input type="password" name="mdp_old" placeholder="Mot de passe" required>
        Nouveau mot de passe: <input type="password" name="mdp" placeholder="Mot de passe" required>
        Confirmer: <input type="password" name="mdp_confirmation" placeholder="Confirmer mot de passe" required>
        <input type="submit" value="Confirmer">
        @csrf
    </form>
@endsection
