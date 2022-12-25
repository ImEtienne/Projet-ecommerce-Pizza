@extends('main')

@section('title', 'supprimer un utilisateur')

@section('back')
    <form action="{{route('admin.user')}}">
        <input type="submit" value="Retour">
    </form>
@endsection

@section('contents')
    <p>Suppression d'un utilisateur : </p>

    <form action="{{route('admin.user.delete',['id'=>$users->id])}}" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="nom..." value="{{old('login',$users->login)}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom..." value="{{old('nom',$users->nom)}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">prenom</label>
            <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="description..." value="{{old('prenom',$users->prenom)}}">
        </div>

        <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
    @csrf
    </form>
@endsection
