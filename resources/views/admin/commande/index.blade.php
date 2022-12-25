@extends('main')

@section('title', 'Gestion des commandes')

@section('back')
    <form action="{{route('admin.home')}}">
        <input type="submit" class="btn btn-info" value="Retour">
    </form>
@endsection

@section('contents')
    <p>Page de gestion des commandes</p>

    <label for="table"><p>Liste des commandes:</p></label>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Numéro</th>
            <th>Utilisateur</th>
            <th><a href="">Date</a></th>
            <th><a href="/">Statut</a></th>
        </tr>
        </thead>
        @foreach ($Commandes as $commande)
            <tr>
                <td><a href='/admin/history/view/{{$commande->id}}'>{{$commande->id}}</a></td>
                <td>{{$commande->user_id}}</td>
                <td>{{$commande->created_at}}</td>
                <td>@switch($commande->statut)
                        @case('envoye')
                            <p>Envoyé<p>
                            @break
                        @case('traitement')
                            <p>En traitement</p>
                        @break
                        @case('pret')
                        <p>Prête</p>
                            @break
                        @case('recupere')
                        <p>Récupéré</p>
                            @break
                        @default
                        <p>Vous n'avez pas de commande</p>
                        @break
                    @endswitch</td>
            </tr>
        @endforeach
    </table>
    {{$commande->links()}}
@endsection
