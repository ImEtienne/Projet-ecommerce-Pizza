@extends('main')
@section('title', 'Pizza - Admin - Accueil')

@section('back')
    <form action="{{URL::previous()}}">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <p>Page d'accueil administrateur.</p>
    <p>Page de gestion</p>
    <div>
        <a class="btn btn-primary" href="{{route('admin.pizza')}}">Gestion des pizzas</a>
        <a class="btn btn-primary" href="#">Gestion des commandes</a>
        <a class="btn btn-primary" href="{{route('admin.user')}}">Gestion des utilisateurs</a>
    </div>
@endsection
