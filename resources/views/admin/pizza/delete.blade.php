@extends('main')

@section('title', 'Page confirmation - Suppression')

@section('back')
    <form action="{{route('admin.home')}}">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <p>Voulez-vous supprimer {{$pizzas->nom}} ?</p>

    <form action='{{route('admin.pizza.delete',['id'=>$pizzas->id])}}' method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom..." value="{{old('nom',$pizzas->nom)}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="description..." value="{{old('description',$pizzas->description)}}">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="formGroupExampleInput2" placeholder="prix.." value="{{old('prix',$pizzas->prix)}}">
        </div>

        <input class="btn btn-primary" type="submit" name="Supprimer" value="Confirmer">
        @csrf
    </form>
@endsection
