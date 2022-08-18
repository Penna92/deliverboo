@extends('layouts.admin')
@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="card" id="success-payment-card">
        <h2 class="text-center my-3">Il tuo ordine è stato processato con successo!</h2>
        <h3 class="text-center my-3"><i class="fa-solid fa-burger"></i> Buon appetito! <i
                class="fa-solid fa-face-smile"></i></h3>
        <a href="/"><button class="btn btn_main cent mt-5">Torna alla home</button></a>
    </div>
</div>
@endsection

<style scoped>
    #success-payment-card {
        padding: 3rem;
        background-color: #042940 !important;
        border: none !important;
        color: white;
        border-radius: 1rem !important;
    }

    .cent {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }
</style>