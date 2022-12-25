@extends('main')

@section('title', 'Home-page : Le panier')

@section('back')
    <form action="{{route('user.home')}}">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <p>Liste des pizzas </p>
    <a style="margin:10px;" class="btn btn-outline-primary" href="{{route('user.panier')}}">Voir panier</a>
    @unless (empty($pizzas))
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Ajouter au panier</th>
                </tr>
            </thead>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{$pizza->nom}}</td>
                    <td>{{$pizza->description}}</td>
                    <td>{{$pizza->prix}}€</td>
                    <td><a class="btn btn-primary" href="{{route('user.add', ['id'=> $pizza->id])}}">Ajouter</a></td>
                </tr>
            @endforeach
        </table>
        {{$pizzas -> links()}}
    @endunless
@endsection
