@extends('layouts.admin')
@include('partials/popupdelete')
@section('content')
<div class="container">
    {{-- <a href="{{route('admin.restaurants.create')}}" class="btn btn-primary text-uppercase my-3"
        type="button">Aggiungi
        un ristorante</a> --}}
    @foreach ($restaurants as $restaurant)
    @if($restaurant->user_id == $user)
    <div class="container d-flex my-5">
        <div class="container">
            <div class="card container d-flex align-items-center flex-column py-3" id="restaurant-index-card">
                <h1 class="text-center text-white mb-3">{{$restaurant->name}}</h1>
                @if ($restaurant->image)
                <img class="resturant-image" src="{{asset('storage/' . $restaurant->image)}}" alt="user">
                @else
                <img class="resturant-image" src="{{asset('media/img/mistery-resturant.png')}}" alt="user">
                @endif
                {{-- <p class="text-center">{{$user->address}}</p> --}}
                <a href="{{route('admin.restaurants.show', $restaurant->id)}}" class="btn btn_main text-uppercase my-3"
                    type="button">Visualizza</a>
                <form action="{{route('admin.restaurants.destroy', $restaurant->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="boolpress.openModal(event, {{ $restaurant->id }})"
                        class="btn btn-danger delete text-uppercase">Elimina</button>
                </form>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>

@endsection

<style>
    .resturant-image {
        width: 60%;
        border-radius: 20px;
    }

    #restaurant-index-card {
        width: 80% !important;
        background-color: #042940 !important;
        border-radius: 20px;
    }
</style>