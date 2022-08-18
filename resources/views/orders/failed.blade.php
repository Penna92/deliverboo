@extends('layouts.admin')
@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="card text-white">
        <h2 class="text-center my-4"><i class="fa-solid fa-triangle-exclamation"> </i>Transazione fallita! <i
                class="fa-solid fa-skull-crossbones"></i></h2>
        <a href="/"><button class="btn btn_main cent mt-5">Torna alla home</button></a>
    </div>
</div>
@endsection

<style>
    .card {
        padding: 3rem;
        background-color: #042940 !important;
        border: none !important;
        border-radius: 1rem !important;
    }

    h2 {
        color: red;
    }

    .cent {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }

    .fa-skull-crossbones,
    .fa-triangle-exclamation {
        color: red;
    }
</style>