@extends('main')

@section('title', 'Créer User')

@section('back')
    <form action="{{route('admin.user')}}">
        <input type="submit" value="Retour">
    </form>
@endsection

@section('contents')
        <p>Formulaire pour la création du compte Admin</p>

        <form action="{{route('admin.users.createAdmin')}}" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">login</label>
                <input type="text" class="form-control" name="login" id="formGroupExampleInput" placeholder="Login...">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">prénom</label>
                <input type="text" class="form-control" name="prenom" id="formGroupExampleInput2" placeholder="Prénom...">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">MDP</label>
                <input type="password" class="form-control" name="mdp" id="formGroupExampleInput2" placeholder="MDP..">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Confirmation MDP</label>
                <input type="password" class="form-control" name="mdp_confirmation" id="formGroupExampleInput2" placeholder="confirmation MDP..">
            </div>

            <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
            @csrf
        </form>
@endsection
