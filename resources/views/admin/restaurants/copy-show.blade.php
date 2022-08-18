@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div class="container d-flex align-items-center flex-column ">
    <h1 class="text-center">{{$restaurant->name}}
        {{-- <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" class="btn btn-warning text-uppercase"
            type="button">Modifica
        </a> --}}
    </h1>
    <p class="text-center">{{$restaurant->address}}</p>
    {{-- {{route('admin.products.index')}} --}}
    <h2 class="my-5">Lista dei prodotti disponibili</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome prodotto</th>
                <th scope="col">Nome Ristorante</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data di creazione</th>
                <th scope="col">Modifica prodotto</th>
                <th scope="col">Elimina prodotto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td><a href="{{route('admin.products.show', $product->id)}}">{{$product->id}}</a></td>
                <td><a href="{{route('admin.products.show', $product->id)}}">{{$product->name}}</a></td>
                <td>{{$restaurant->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td><a href="{{route('admin.products.edit', $product->id)}}" class="btn btn-warning text-uppercase">Modifica</a></td>
                <td>
                    <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="boolpress.openModal(event, {{ $product->id }})"
                            class="btn btn-danger delete text-uppercase">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('admin.products.create')}}" class="btn btn_main text-uppercase my-3" type="button">
        Aggiungi piatto
    </a>
</div>
@endsection