@extends('main')

@section('title', 'Gestion des utilisateur')

@section('back')
    <form action="{{route('admin.home')}}">
        <input type="submit" class="btn btn-info" value="Retour">
    </form>
@endsection

@section('contents')
    <p>Page Administrateur</p>
    <p>Gestion des Utilisateurs</p>
    <p>Liste des utilisateurs</p>
        <p>
            <a class="btn btn-outline-primary" href="{{route('admin.users.createAdmin')}}"> Ajouter Admin</a>
            <a class="btn btn-outline-primary" href="{{route('admin.users.createPizzaiolo')}}"> Ajouter Pizzaiolo</a>
        </p><br>
    @unless(empty($users))
        <table class="table">
            <thead class="table-dark">
                 <tr>
                    <th>id</th>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Type</th>
                    <th>Modifier mot de passe</th>
                    <th>Supprimer(Admin or User)</th>
                </tr>
            </thead>
            @forelse($users as $user)
                <tr>
                    <td>{{$user ->id}}</td>
                    <td>{{$user ->Login}}</td>
                    <td>{{$user ->nom}}</td>
                    <td>{{$user ->prenom}}</td>
                    <td>{{$user ->Type}}</td>
                    <td><a type="button" class="btn btn-primary" href="{{route('admin.users.edit',['id'=>$user->id])}}">Modifier</a></td>
                    <td><a type="button" class="btn btn-danger" href="{{route('admin.user.delete',['id'=>$user->id])}}">Supprimer</a></td>
                </tr>
            @empty
                <p> Aucnun utilisateur trouvé ! </p>
            @endforelse
        </table>
    @endunless
@endsection
