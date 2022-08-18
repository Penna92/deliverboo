<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Restaurant;
use App\Category;

class ProductController extends Controller
{
    protected $validationRule = [
        'name' => 'required|string|max:100',
        'description' => 'required',
        "visible" => "sometimes|accepted",
        "category_id" => "nullable|exists:categories,id",
        "restaurant_id" => "nullable|exists:restaurants,id",
        // "image" => "nullable||image|mimes:jpeg,bmp,png,svg|max:2048", 
        // "image" => "nullable|image|mimes:jpg,jpeg,bmp,png,svg|max:2048|file", //FUNZIONANTE
        "image" => "nullable|image|max:2048",
        // "image" => "nullable|mimes:jpg,jpeg,bmp,png,svg|max:2048",
        "price" => 'required',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        // $restaurants = Restaurant::where('user_id', $user->id)->get();
        $products = Product::where('restaurant_id', $user)->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $categories = Category::all();
        return view('admin.products.create', compact('categories', 'user'));
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

        $newProduct = new Product();

        $newProduct->name = $data['name'];
        $newProduct->slug = $this->getSlug($newProduct->name);
        $newProduct->description = $data['description'];
        // IMMAGINE
        if (isset($data['image'])) {
            $path_image = Storage::disk('public')->put("uploads", $data['image']); // uploads/nomeimg.jpg
            $newProduct->image = $path_image;
        }
        $newProduct->price = $data['price'];
        $newProduct->visible = isset($data['visible']);
        $newProduct->category_id = $data['category_id'];
        $newProduct->restaurant_id = Auth::user()->id;

        $newProduct->save();

        // METODO SYNC CON CONTROLLO PER GLI ORDERS
        // if (isset($data['orders'])) {
        //     $newProduct->orders()->sync($data['orders']);
        // }

        return redirect()->route('admin.products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $user = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $user)->first();
        $categories = Category::all();
        $products = Product::where('restaurant_id', $user)->get();
        // foreach ($products as $product) {
        if ($restaurant->user_id != $product->restaurant_id) {
            return view('admin.products.error');
        } else {
            return view('admin.products.show', compact('product', 'categories'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $user)->first();

        $product = Product::findOrFail($id);
        $categories = Category::all();
        $products = Product::where('restaurant_id', $user)->get();
        if ($restaurant->user_id !== $product->restaurant_id) {
            return view('admin.products.error');
        } else {
            return view('admin.products.edit', compact('product', 'categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate($this->validationRule);
        $data = $request->all();

        $product->name = $data['name'];
        //controllo sullo slug
        if ($product->name != $data['name']) {
            $product->name = $data['name'];
            $slug = Str::of($product->name)->slug("-");
            if ($slug != $product->slug) {
                $product->slug = $this->getSlug($product->name);
            }
        }
        $product->description = $data['description'];
        // IMMAGINE
        if (isset($data['image'])) {
            // cancello l'immagine
            Storage::delete($product->image);
            // salvo la nuova immagine
            $path_image = Storage::put("uploads", $data['image']);
            $product->image = $path_image;
        }
        $product->price = $data['price'];
        $product->visible = isset($data['visible']);
        $product->category_id = $data['category_id'];
        $product->restaurant_id = Auth::user()->id;

        $product->update();

        // METODO SYNC CON CONTROLLO PER GLI ORDERS
        // if (isset($data['orders'])) {
        //     $product->orders()->sync($data['orders']);
        // }

        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with("message", "Prodotto \"{$product->name}\" rimosso definitivamente!");
    }

    private function getSlug($name)
    {
        $slug = Str::of($name)->slug("-");
        $count = 1;

        //prendi il primo post il cui slug è uguale a $slug
        // se è presente allora genero un nuovo slug aggiungendo -$count
        while (Product::where("slug", $slug)->first()) {
            $slug = Str::of($name)->slug("-") . "-{$count}";
            $count++;
        }
        return $slug;
    }
}
