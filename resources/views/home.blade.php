@extends('main')

@section('title', 'Page d\'accueil')

@section('redirect')
    @auth
        @switch($type)
            @case('admin')
                <meta http-equiv="refresh" content="0; URL=http://localhost/admin" />
            @break
            @case('cook')
                <meta http-equiv="refresh" content="0; URL=http://localhost/cook" />
            @break
            @case('user')
                <meta http-equiv="refresh" content="0; URL=http://localhost/user" />
            @break
            @default
                <meta http-equiv="refresh" content="0; URL=http://localhost/home" />
            @break
        @endswitch
    @endauth
@endsection

@section('contents')
    <h1 style="font-size: 20px; font-weight:bold;">E-Commerce PIZZA</h1>
    @guest()
        <p>Bienvenue à la pizzaria ! </p>
        <a class="btn btn-outline-primary" href="{{route('login')}}">Connexion</a>
        <a class="btn btn-outline-primary" href="{{route('register')}}">S'inscrire</a>
    @endguest
@endsection

