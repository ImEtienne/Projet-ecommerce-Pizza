@extends('main')
@section('title', 'Liste des Pizzas')

@section('back')
    <form action="{{route('admin.home')}}">
        <input type="submit" value="Retour">
    </form>
@endsection


@section('contents')
    <p>Liste des Pizzas</p>
    @unless(empty($pizzas))
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>prix</th>
                    <th>Modifier à</th>
                    <th>Supprimer à</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            @foreach( $pizzas as $pizza)
                <tr>
                    <td>{{$pizza->id}}</td>
                    <td>{{$pizza->nom}}</td>
                    <td>{{$pizza->description}}</td>
                    <td>{{$pizza->prix}} € </td>
                    {{--<td>{{$pizza->created_at}}</td>--}}
                    <td>{{$pizza->updated_at}}</td>
                    <td>{{$pizza->deleted_at}}</td>
                    <td><a type="button" class="btn btn-primary" href="{{route('admin.pizza.edit',['id'=>$pizza->id])}}"> Modifier</a></td>
                    <td><a type="button" class="btn btn-danger" href="{{route('admin.pizza.delete',['id'=>$pizza->id])}}"> Supprimer</a></td>
                </tr>
            @endforeach
        </table>
    @endunless
    <a type="buttom" class="btn btn-secondary" href="{{route('admin.pizza.add')}}"> Ajouter</a>
@endsection
