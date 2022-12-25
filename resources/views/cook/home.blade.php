@extends('main')
@section('title', 'Page D\'Accueil pizzaiolo')

@section('back')
        <form action="{{URL::previous()}}">
            <input type="submit" value="Accueil">
        </form>
@endsection

@section('contents')
    <a class="btn btn-outline-primary" href="{{route('cook.edit.passwd')}}"> Modifier le mot de passe</a>
    <p>Préparation en cours</p>
@endsection
