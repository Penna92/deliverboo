@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card my-5" id="card-create-restaraunt">
        <h1 class="text-center my-3">Aggiungi il tuo ristorante</h1>
        <form method="POST" action="{{route('admin.restaurants.store')}}" enctype="multipart/form-data" class="my-5">
            @csrf
            {{-- NAME --}}
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome *</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            {{-- ADDRESS --}}
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">Indirizzo *</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            {{-- IVA --}}
            <div class="form-group row">
                <label for="vat_number" class="col-md-4 col-form-label text-md-right">Partita IVA *</label>
                <div class="col-md-6">
                    <input id="vat_number" type="text" class="form-control @error('vat_number') is-invalid @enderror"
                        name="vat_number" value="{{ old('vat_number') }}" required autocomplete="vat_number" autofocus>
                    @error('vat_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            {{-- IMAGE --}}
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Aggiungi immagine</label>
                <div class="col-md-6">
                    <input id="image" type="file" class="form-control" name="image" value="{{ old('image') }}">
                </div>
            </div>
            {{-- CHECKBOX --}}
            <div class="form-group text-center">
                <span>Seleziona almeno una tipologia di ristorante *</span>
            </div>
            <div class="container"> 
                <div class="row form-group d-flex justify-content-center align-items-center form-check-inline">
                    @foreach ($types as $type)
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-center text-white">
                        <div class="d-flex justify-content-start form-check-inline">
                            <label for="types[]" class="col-form-label mx-3">{{$type->name}}</label>
                            <input id="type" type="checkbox" name="types[]"
                                    class="form-check-input @error('types[]') is-invalid @enderror" value="{{$type->id}}">
                        </div>
                    </div>
                    @endforeach
                    @error('types[]')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="submit-button d-flex justify-content-center align-items-center gap-3">
                <button type="submit" class="btn btn_main">Crea</button>
                <span class="fst-italic">(*) Campi obbligatori</span>
            </div>
        </form>
    </div>
</div>
@endsection

<style scoped>
    main .container {
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: center;
    }

    #card-create-restaraunt {
        background-color: #042940 !important;
        color: white;
    }

    .badge {
        background-color: #005c53 !important;
        padding: 10px 3px !important;
        max-width: fit-content;
    }

    .badge>.label {
        width: 50%;
    }

    .form-check-inline {
        margin-right: 0 !important;
        margin-left: 0 !important;
    }
</style>