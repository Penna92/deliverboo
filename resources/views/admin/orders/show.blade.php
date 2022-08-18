@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div class="container">
    {{-- @dd($order->id) --}}
    <div class="card my-4 gap-3 text-white">
        <div class="card-header">
            <div class="container">
                <h1 class="my-3">Ordine numero: {{$order->id}}</h1>
                <h3>Effettuato da: {{$order->name}} {{$order->surname}}</h3>
                <h4>Contatti:</h4>
                <p><i class="fa-solid fa-envelope"></i> {{$order->email}} - <i class="fa-solid fa-phone"></i>
                    {{$order->phone_number}} </p>
                <p><i class="fa-solid fa-map-pin"></i> {{$order->shipping_address}} -
                    {{\Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i:s')}}
                    @if($order->shipped !== 0)
                    <span class="badge-success d-inline-block p-1 rounded mx-3">Pagato</span>
                    @else
                    <span class="badge-danger d-inline-block p-1 rounded mx-3">Non pagato</span>
                    @endif
                </p>

                <h4>Prodotti:</h4>
                <ol class="back">
                    @foreach($products as $product)
                    <li class="my-3">{{$product->name}}
                        <ul>
                            <li>quantità: {{$product->pivot->quantity}}
                            </li>
                            <li>
                                subtotale: {{number_format($product->pivot->subtotal,2, '.', ',')}}
                                &euro;
                            </li>
                        </ul>
                    </li>
                    @endforeach
                </ol>
                <h5 class="my-5">Totale ordine: {{number_format($order->total_price,2, '.', ',')}} &euro;</h5>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        background-color: #042940 !important;
    }
</style>