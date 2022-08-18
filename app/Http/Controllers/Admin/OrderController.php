<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\Restaurant;
use App\Type;
use App\Product;
use Mockery\Undefined;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $user_id = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $user_id)->first();
        $products = Product::where('restaurant_id', $restaurant->user_id)->get();

        //SERIE DI FILTRI PER RICAVARE UN ARRAY CON TUTTI GLI ORDINI RICEVUTI DAL RISTORATORE LOGGATO
        $filteredOrders = [];
        foreach ($products as $product) {
            foreach ($product->orders as $order) {
                $product_id[] = $order->pivot->product_id;
                foreach ($orders as $ord) {
                    if ($ord->id == $order->getOriginal('pivot_order_id')) {
                        // dump($ord);
                        if (!in_array($ord, $filteredOrders)) {
                            array_push($filteredOrders, $ord);
                        }
                    }
                }
            }
        }
        return view('admin.orders.index', compact('orders', 'filteredOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orders = Order::all();
        $user_id = Auth::user()->id;
        $products = Order::find($order->id)->products()->get();
        // $ord_product = Order::find($order->id)->products()->get();
        $user = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $user)->first();
        $allProducts = Product::where('restaurant_id', $user)->get();


        $filteredOrders = [];
        foreach ($products as $product) {
            foreach ($product->orders as $orderius) {
                $product_id[] = $orderius->pivot->product_id;
                foreach ($orders as $ord) {
                    if ($ord->id == $orderius->getOriginal('pivot_order_id')) {
                        // dump($ord);
                        if (!in_array($ord, $filteredOrders)) {
                            array_push($filteredOrders, $ord);
                        }
                    }
                }
            }
        }

        $filteredIds = [];
        // // dd($filteredOrders);
        foreach ($filteredOrders as $getOrdId) {
            // dump($getOrdId->id);
            array_push($filteredIds, $getOrdId->id);
            // array_push($filteredIds, $getOrdId->id)
        }
        // dd($filteredIds);
        if (!in_array($order->id, $filteredIds)) {
            return view('admin.orders.error');
        }

        // dd($orders);
        // if ($order->getOriginal('id') == $order->id) {
        return view('admin.orders.show', compact('products', 'order'));
        // }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
