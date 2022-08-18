@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div class="container table-container">
    <h1>Lista degli ordini ricevuti</h1>
    <div id="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Prezzo totale</th>
                    <th scope="col">Indirizzo di fatturazione</th>
                    <th scope="col">Indirizzo di spedizione</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filteredOrders as $order)
                <tr>
                    <td><a href="{{route('admin.orders.show', $order->id)}}">{{$order->id}}</a></td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->surname}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone_number}}</td>
                    <td>{{number_format($order->total_price,2, '.', ',')}} &euro;</td>
                    <td>{{$order->billing_address}}</td>
                    <td>{{$order->shipping_address}}</td>
                    @if($order->shipped == 1)
                    <td><span class="badge-success d-inline-block p-1 rounded mx-3">Pagato</span></td>
                    @else
                    <td><span class="badge-danger d-inline-block p-1 rounded mx-3">Non pagato</span></td>
                    @endif
                    <td>{{$order->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    .table-container {
        padding: 50px 0;
    }

    #table-container {
        background-color: white;
        padding: 20px;
        border-radius: 20px
    }

    tr>td:not(:nth-child(1)),
    tr>th:not(:nth-child(1)) {
        text-align: center
    }
</style>