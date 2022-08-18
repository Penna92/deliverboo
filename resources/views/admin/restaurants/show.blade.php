@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div id="container-products">
    <div id="container-ristorante">
        <strong>
            <h1 class="text-center my-4">{{$restaurant->name}}</h1>
        </strong>
        @if ($restaurant->image)
        <img class="resturant-image" src="{{asset('storage/' . $restaurant->image)}}" alt="user">
        {{-- <img id="resturant-image" src="{{ asset('storage/' . $restaurant->image)}}" alt="user"> --}}
        @else
        <img class="resturant-image" src="{{asset('media/img/mistery-resturant.png')}}" alt="user">
        @endif
        <h3 class="mt-3">Indirizzo: {{$restaurant->address}}</h3>
        <h4 class="mt-2">Partita IVA: {{$restaurant->vat_number}}</h4>
        <a href="{{route('admin.products.create')}}" class="btn btn_main text-uppercase my-3" type="button">Aggiungi
            piatto</a>
        <form action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method="post" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="boolpress.openModal(event, {{ $restaurant->id }})"
                class="btn btn-danger delete text-uppercase">Elimina ristorante</button>
        </form>
    </div>
    <div id="container-prodotti">
        @foreach ($products as $product)
        <div class="product-card">
            <div class="left-side-card">
                <div class="left-side-top-card">
                    <div class="prod-name-cont">
                        <h1><a href="{{route('admin.products.show', $product->id)}}">{{$product->name}}</a></h1>
                    </div>
                    <p>€ {{number_format($product->price, 2, '.', ',')}}</p>
                </div>
                <div class="left-side-under-card">
                    <form>
                        <a href="{{route('admin.products.edit', $product->id)}}"
                            class="btn btn-warning text-uppercase">Modifica</a>
                    </form>
                    <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="boolpress.openModal(event, {{ $product->id }})"
                            class="btn btn-danger delete text-uppercase">Elimina</button>
                    </form>
                </div>
            </div>
            <div class="right-side-card">
                @if($product->image)
                <img src="{{asset('storage/' . $product->image)}}">
                @else
                <img src="{{asset('media/img/mistery-food.png')}}">
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .product-card {
        min-width: 335px;
        height: 150px;
        width: 45%;
        padding: 0 1%;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.7);
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 1vw 0;

    }

    .prezzo-prodotto::before {
        content: "€ ";
    }

    .left-side-card {
        width: 60%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .left-side-top-card {
        width: 100%;
        height: 60%;
        text-align: center;
    }

    .prod-name-cont {
        white-space: normal;
        max-height: 65%;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .left-side-top-card h1 a {
        font-size: 1.4rem;
        text-overflow: ellipsis;

        color: #005C53;
    }

    .left-side-top-card h1 a:hover {
        color: #DBF227;
        transition: 0.1s;
    }

    .left-side-under-card {
        height: 40%;
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .right-side-card {
        width: 40%
    }

    .product-card img {
        border-radius: 10px;
        width: 100%;
        height: 80%;
        object-fit: cover;
    }

    #container-products {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;
    }

    #container-ristorante {
        /* position: fixed;
        left: 0;
        top: auto; */
        padding: 0 2%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 40%;
    }

    #container-ristorante img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.7);
    }

    #container-prodotti {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-evenly;
        align-content: flex-start;
        width: 60%;
        height: calc(100vh - 66px);
        margin-top: 75px;
        overflow: auto;
    }

    #container-prodotti::-webkit-scrollbar {
        display: none;
    }

    .py-4 {
        padding-bottom: 0 !important;
    }
</style>