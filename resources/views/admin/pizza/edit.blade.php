@extends('main')

@section('title', 'Modification de la pizza')

@section('back')
    <form action="{{route('admin.home')}}">
            <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <form action='{{route('admin.pizza.edit',['id'=>$pizzas->id])}}' method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom..." value="{{old('nom', $pizzas->nom)}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">description</label>
            <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="description..." value="{{old('description',$pizzas->description)}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="formGroupExampleInput2" placeholder="prix.." value="{{old('prix',$pizzas->prix)}}">
        </div>
        <input class="btn btn-primary" type="submit" value="Modifier">
        @csrf
    </form>
@endsection
