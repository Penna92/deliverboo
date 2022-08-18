<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderMail;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
use App\Restaurant;
use App\Product;

class OrderController extends Controller
{
    protected $validationRule = [
        'name' => 'required|string|max:50',
        'surname' => 'required|string|max:50',
        'email' => 'required|string|max:200',
        "phone_number" => "required|string|max:10",
        "billing_address" => "required|string|max:200",
        "shipping_address" => "required|string|max:200",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }


    public function getCartData(Request $request)
    {
        $data = $request->all();
        dump($data);

        // $syncData = array_combine($data['prod_id'], $data['prod_qnty']);
        // $qnty = collect($syncData)
        //     ->map(function ($qnty) {
        //         return ['quantity' => $qnty];
        //     });
        // dd($syncData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->validationRule);
        $data = $request->all();
        // dd($data);


        $id_list = explode(',', $data['id_list'][0]);

        $qty_list = explode(',', $data['qty_list'][0]);

        $subtot_list = explode(',', $data['subtot_list'][0]);

        $syncData = array_merge($id_list, $qty_list, $subtot_list);

        // dump($id_list);
        // dump($qty_list);
        // dump($subtot_list);


        $ids = collect($id_list)
            ->map(function ($ids) {
                return ['product_id' => $ids];
            });

        // dump($ids);


        $qnty = collect($qty_list)
            ->map(function ($qnty) {
                return ['quantity' => $qnty];
            });

        // dump($qnty);



        $subs = collect($subtot_list)
            ->map(function ($subs) {
                return ['subtotal' => $subs];
            });

        // dump($subs);

        $newOrder = new Order();
        $newOrder->name = $data['name'];
        $newOrder->surname = $data['surname'];
        $newOrder->email = $data['email'];
        $newOrder->phone_number = $data['phone_number'];
        $newOrder->total_price = $data['total_price'];
        $newOrder->billing_address = $data['billing_address'];
        $newOrder->shipping_address = $data['shipping_address'];
        $newOrder->shipped = false;

        $newOrder->save();
        // dd($newOrder->id);
        $finalData = [];
        // dd(count($id_list));
        for ($i = 0; $i < count($id_list); $i++) {
            $info = [

                [
                    'order_id' => $newOrder->id,
                    'product_id' => $id_list[$i],
                    'quantity' => $qty_list[$i],
                    'subtotal' => $subtot_list[$i],
                ],

            ];
            array_push($finalData, [
                'order_id' => $newOrder->id,
                'product_id' => $id_list[$i],
                'quantity' => $qty_list[$i],
                'subtotal' => $subtot_list[$i],
            ]);
        }
        // dump($finalData);
        $newOrder->products()->sync($finalData);
        // dd($subtot_list);


        Mail::to( 'hello@example.com' )->send( new OrderMail($newOrder) );
        Mail::to( 'user@email.com' )->send( new UserMail() );


        // $newOrder->products()->sync($qnty);

        return redirect()->route('orders.edit', $newOrder->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        // INIZIALIZZAZIONE BRAINTREE
        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '3928pc3krb84swd8',
            'publicKey' => 'kv8cv2x6j45gmnw9',
            'privateKey' => '3af3bb352ecedf87038faf05f13f6c21'
        ]);

        // PASSAGGIO DEL TOKEN ALLA ROTTA
        $token = $gateway->ClientToken()->generate();
        return view('orders.edit', ['token' => $token, 'order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // PROCESSO DI PAGAMENTO: SE AVVIENE CON SUCCESSO, CAMBIA IL VALORE DI ORDER DA "NON SPEDITO" A "SPEDITO"

        // $data = $request->all();
        //qui inizializzo braintree
        $gateway = new \Braintree\Gateway([
            'environment' => 'sandbox',
            'merchantId' => '3928pc3krb84swd8',
            'publicKey' => 'kv8cv2x6j45gmnw9',
            'privateKey' => '3af3bb352ecedf87038faf05f13f6c21'
        ]);

        //NONCE DAL CLIENTE
        $nonceFromTheClient = $request->payment_method_nonce;

        //RISULTATO DEL PAGAMENTO
        $result = $gateway->transaction()->sale([
            'amount' => $order->total_price,
            'paymentMethodNonce' => $nonceFromTheClient,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        //dd($result);
        if ($result->success) {
            $order->shipped = true;
            $order->update();
            return view('orders.success');
        } else {
            return view('orders.failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
