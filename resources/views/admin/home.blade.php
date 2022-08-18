@extends('layouts.admin')

@section('content')
<div class="container text-white">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php 
                $c = 0;
            ?>
            @foreach ($restaurants as $restaurant)
            @if ($restaurant->user_id == $user->id)
            <div class="card">
                <div class="card-header text-center text-uppercase font-weight-bold" style="margin-bottom:1rem;">{{
                    __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h2 class="text-center">{{ __('Benvenutə') }} {{ Auth::user()->name }}</h2>
                    <p class="text-center">{{ __('Questa è la tua Dashboard. Usa la navbar per visualizzare il tuo
                        ristorante, accedere al tuo menu e gestire gli ordini ricevuti.') }}</p>
                </div>
            </div>
            @else
            <?php 
                        $c = $c + 1;
                    ?>
            @if ($c == count($restaurants))
            <div class="card">
                <div class="card-header mb-3">
                    <h2 class="text-center">{{ __('Benvenutə') }} {{ Auth::user()->name }}</h2>
                </div>

                <div class="card-body">
                    <h5 class="text-center">Non hai ancora registrato un ristorante.</h5>
                    <a href="{{route('admin.restaurants.create')}}" class="btn btn_main text-uppercase my-3"
                        type="button">Aggiungi Ristorante</a>
                </div>
            </div>
            @endif
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

<style>
    .card-body a {
        position: relative;
        left: 50%;
        transform: translateX(-50%) !important;
    }
</style>