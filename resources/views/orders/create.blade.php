@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card container d-flex my-5 align-items-center" id="appendCartData">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header text-white"></div> --}}

                <div class="card-body login-class" id="complete-order-card">
                    <h2 class="text-center text-white mb-5">Completa l'ordine</h2>
                    <form method="POST" action="{{route('orders.store')}}">
                        @csrf

                        {{-- NOME --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-white">{{ __('Nome')
                                }}*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- COGNOME --}}
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right text-white">{{
                                __('Cognome')
                                }}*</label>

                            <div class="col-md-6">
                                <input id="surname" type="text"
                                    class="form-control @error('surname') is-invalid @enderror" name="surname" required
                                    autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- EMAIL --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('Indirizzo
                                E-Mail')
                                }}*</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- NUMERO DI TELEFONO --}}
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right text-white">{{
                                __('Numero di telefono')
                                }}*</label>

                            <div class="col-md-6">
                                <input type="tel" id="phone_number" type="phone_number"
                                    class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                    required autocomplete="phone_number">

                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- INDIRIZZO DI SPEDIZIONE --}}
                        <div class="form-group row">
                            <label for="shipping_address" class="col-md-4 col-form-label text-md-right text-white">{{
                                __('Indirizzo di spedizione')
                                }}*</label>

                            <div class="col-md-6">
                                <input type="text" id="shipping_address" type="shipping_address"
                                    class="form-control @error('shipping_address') is-invalid @enderror"
                                    name="shipping_address" required autocomplete="shipping_address">

                                @error('shipping_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- INDIRIZZO DI FATTURAZIONE --}}
                        <div class="form-group row">
                            <label for="billing_address" class="col-md-4 col-form-label text-md-right text-white">{{
                                __('Indirizzo di fatturazione')
                                }}*</label>

                            <div class="col-md-6">
                                <input type="text" id="billing_address" type="billing_address"
                                    class="form-control @error('billing_address') is-invalid @enderror"
                                    name="billing_address" required autocomplete="billing_address">

                                @error('billing_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- PREZZO TOTALE CHE MI PORTO DAL CARRELLO (INVISIBILE) --}}
                        <div class="invisible" id="total_price_hidden">
                            {{-- <label for="total_price" class="col-md-4 col-form-label text-md-right text-white">Total
                                Price*</label>
                            <input type="text" value="" id="txt" name="total_price" /> --}}
                        </div>



                        {{-- ARRAY DEGLI ID DEI PRODOTTI --}}

                        <div class="invisible" id="pro_id_hidden">
                            {{-- <label for="total_price" class="col-md-4 col-form-label text-md-right text-white">Total
                                Price*</label>
                            <input type="text" value="" id="txt" name="total_price" /> --}}
                        </div>


                        {{-- ARRAY DELLE QUANTITA' DEI PRODOTTI --}}

                        <div class="invisible" id="pro_qty_hidden">
                            {{-- <label for="total_price" class="col-md-4 col-form-label text-md-right text-white">Total
                                Price*</label>
                            <input type="text" value="" id="txt" name="total_price" /> --}}
                        </div>



                        {{-- ARRAY DEL SUBTOTAL DEI PRODOTTI --}}

                        <div class="invisible" id="pro_subtotal_hidden">
                            {{-- <label for="total_price" class="col-md-4 col-form-label text-md-right text-white">Total
                                Price*</label>
                            <input type="text" value="" id="txt" name="total_price" /> --}}
                        </div>



                        {{-- BOTTONE DI SUBMIT --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-submit">
                                    {{ __('Completa il pagamento') }}
                                </button>

                                <span class="fst-italic text-white">(*) Campi obbligatori</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //CHIAMATA API PER PASSARE I PRODOTTI AL BACKEND

    // CHIAMO LA FUNZIONE ANONIMA APPENA RENDERIZZO LA PAGINA PER MOSTRARE IL RIEPIGOLO DELLO SHOPPING CART
    (function() {

        let data = JSON.parse(localStorage.getItem("carts"));
        // console.log(data);
        let total = 0;
        let idList = [];
        let qtyList = [];
        let subtotList = [];
        data.forEach(function(item, index) {
            console.log(item);
        // console.log(parseFloat(item.subtotal));
        // console.log(typeof item.subtotal);
        total += parseFloat(item.subtotal);
        idList.push(item.id);
        qtyList.push(item.quantity);
        subtotList.push(item.subtotal);
        // return total;
        });
        console.log(idList, 'array id');
        console.log(qtyList, 'array quantità');
        console.log(subtotList, 'array subtotal');

        // console.log((total).toFixed(2));
        // console.log(Math.round(total * 100) / 100).toFixed(2);

        //CAMPO FORM PER PASSAGGIO ID DEI PRODOTTI
        document.getElementById("pro_id_hidden").innerHTML =
        `
        <label for="id_list" class="col-md-4 col-form-label text-md-right text-white">
            Lista degli id*
        </label>
            <input type="text" required value="${idList}" id="txt" name="id_list[]" />
        `;

        //CAMPO FORM PER PASSAGGIO QUANTITA' DEI PRODOTTI
        document.getElementById("pro_qty_hidden").innerHTML =
        `
        <label for="qty_list" class="col-md-4 col-form-label text-md-right text-white">
            Lista delle quantità*
        </label>
        <input type="text" required value="${qtyList}" id="txt" name="qty_list[]" />
        `;

        //CAMPO FORM PER PASSAGGIO SUBTOTALE DEI PRODOTTI
        document.getElementById("pro_subtotal_hidden").innerHTML =
        `
        <label for="subtot_list" class="col-md-4 col-form-label text-md-right text-white">
            Lista dei subtotal*
        </label>
        <input type="text" required value="${subtotList}" id="txt" name="subtot_list[]" />
        `;

        //CAMPO FORM PER PASSAGGIO PREZZO TOTALE
        document.getElementById("total_price_hidden").innerHTML = 
        `
        <label for="total_price" class="col-md-4 col-form-label text-md-right text-white">
            Total Price*
        </label>
        <input type="text" value="${(total).toFixed(2)}" id="txt" name="total_price" />
        `;

        //CARD HEADER CON RAPIDO RIEPILOGO ORDINE
        document.getElementById("appendCartData").innerHTML =
        `<div class="card-header text-white d-flex flex-column align-items-center py-3" id="card-header-style">
            <h5>Stai completando il tuo ordine presso
                <h3 class="text-warning">${data[0].restaurant_name}</h3>
            </h5>
            <div class="d-flex gap-3 justify-content-center align-items-center">
                <h6>Prezzo totale :
                <h5>&euro; ${(total).toFixed(2)}</h5>
                </h6>
            </div>
            <button type="submit" class="btn btn-submit btn-warning" onclick="history.back()">
                Torna al carrello
            </button>
        </div>`
        ;

        // console.log(prova);
        return data;
        })(); 
        
</script>
@endsection

<style>
    #appendCartData {
        background-color: transparent !important;
    }

    .invisible {
        height: 0 !important;
    }

    #complete-order-card {
        padding: 2rem !important;
    }
</style>