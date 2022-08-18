@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div class="container text-white">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @endif
    <div class="card d-flex flex-column my-3 gap-3">
        <div class="card-header">
            <div class="container text-center">
                <h1>{{$product->name}}</h1>
            </div>
        </div>
        <div class="card-body d-flex flex-column gap-3 px-5">
            <div>
                <small class="mr-3">In magazzino dal: {{$product->created_at}}</small>
                {{-- condizione per stampare il valore corretto a seconda del booleano --}}
                @if($product->visible !== 0)
                <p class="badge-success d-inline-block p-1 rounded">Disponibile</p>
                @else
                <p class="badge-danger d-inline-block p-1 rounded">Non disponibile</p>
                @endif
            </div>
            @if($product->description !== null)
            <div>
                <h2>Descrizione: </h2>
                <p>{!! $product->description !!}</p>
            </div>
            @endif
            @foreach($categories as $category)
            @if($product->category_id == $category->id)
            <h5>Categoria: {{$category->name}}</h5>
            @endif
            @endforeach
            @if($product->category_id == null)
            <h5>Nessuna categoria assegnata</h5>
            @endif
            @if($product->image != null)
            <img src="{{ asset('storage/' . $product->image) }}" class="rounded " alt="{{ $product->title }}">
            @endif
            {{-- @if (count($product->tags)>0)
            <h5>Tags</h5>
            <ul>
                @foreach($product->tags as $item)
                <li>{{$item->name}}</li>
                @endforeach
            </ul>
            @endif --}}
            {{-- <div class="card">
                <ul>
                    <div class="card-header">
                        <h4>Commenti:</h4>
                    </div>
                </ul>
            </div> --}}
            <div class="d-flex align-items-start">
                <a href="{{ route('admin.products.edit', $product->id) }}"
                    class="btn btn-warning mr-2 text-uppercase">Modifica</a>
                <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="boolpress.openModal(event, {{ $product->id }})"
                        class="btn btn-danger delete text-uppercase">Elimina</button>
                </form>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    @endsection

    <style>
        .card {
            background-color: transparent !important;
        }
    </style>