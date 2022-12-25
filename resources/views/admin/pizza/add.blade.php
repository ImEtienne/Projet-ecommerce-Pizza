@extends('main')

@section('title', 'Ajouter une pizza')

@section('back')
    <form action="{{route('admin.pizza')}}">
        <input type="submit" value="Accueil">
    </form>
@endsection

@section('contents')
    <form action="{{route('admin.pizza.add')}}" method="POST">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="formGroupExampleInput" placeholder="nom...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="Description...">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Prix</label>
            <input type="number" class="form-control" name="prix" id="formGroupExampleInput2" placeholder="Prix..">
        </div>

        <input class="btn btn-primary" type="submit" name="ajouter" value="Ajouter">
        @csrf
    </form>
@endsection
