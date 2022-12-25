@extends('main')

@section('title', 'Votre panier')

@section('back')
    <form action="{{route('user.commande')}}">
        <input type="submit" value="Retour">
    </form>
@endsection

@section('contents')

    @unless (empty($panier))
        <p>Le panier : </p>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Prix</th>
                <th>Mettre à jour</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <?php $total = 0 ?>
            @foreach (collect($panier)->keys()->all() as $panier_pizza)
                <?php $total += $pizzas[$panier_pizza-1]->prix * $panier[$panier_pizza]?>
                <tr>
                    <td>{{$pizzas[$panier_pizza-1]->nom}}</td>
                    <td>{{$pizzas[$panier_pizza-1]->prix}}€</td>
                    <td>

                        <form action="{{route('user.panier.update',['id'=>$panier_pizza])}}" method="POST">
                            @method('put')
                            <input type="number" name="qte" value="{{ $panier[$panier_pizza] }}" placeholder="Quantité" min="1" max="10" required>
                    </td>
                    <td>
                        <p>{{ $pizzas[$panier_pizza-1]->prix * $panier[$panier_pizza]}}€ </p>
                    </td>
                    <td>
                        <input type="submit" value="Mettre à jour">
                        @csrf
                        </form>
                    </td>
                    <td><a class="btn btn-primary" href="{{ route('user.panier.delete', ['id'=>$panier_pizza])}}">Supprimer</a></td>
                </tr>
            @endforeach
        </table>
        <p>Prix total: {{ $total }}€</p><br>
        <a class="btn btn-primary" href="{{route('user.panier.payer')}}">Commander {{ $total }}€</a>
    @endunless
@endsection
