<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Restaurant;
use App\Type;
use App\Product;

class RestaurantController extends Controller
{
    protected $validationRule = [
        'name' => 'required|string|max:100',
        'address' => 'required|string|max:255',
        "vat_number" => "numeric|required|digits:11",
        "types" => "required",
        "image" => "nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        $user = Auth::user()->id;
        $restaurant = Restaurant::where('user_id', $user)->first();

        return view('admin.restaurants.index', compact('restaurant', 'restaurants', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $user = Auth::user()->id;
        $restaurants = Restaurant::all();
        $restaurant = Restaurant::where('user_id', $user)->first();
        if (Restaurant::where('user_id', '=', $user)->exists()) {
            return view('admin.restaurants.index', compact('restaurant', 'restaurants', 'user'));
        } else {
            return view('admin.restaurants.create', compact('types'));
        }
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
        $newRestaurant = new Restaurant();

        $newRestaurant->name = $data['name'];
        $newRestaurant->slug = $this->getSlug($newRestaurant->name);
        $newRestaurant->address = $data['address'];
        $newRestaurant->vat_number = $data['vat_number'];
        $newRestaurant->user_id = Auth::user()->id;

        if (isset($data['image'])) {
            $path_image = Storage::put("uploads", $data['image']);
            $newRestaurant->image = $path_image;
        }

        $newRestaurant->save();

        if (isset($data['types'])) {
            $newRestaurant->types()->sync($data['types']);
        }

        return redirect()->route('admin.restaurants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $restaurants = Restaurant::all();
        $user = Auth::user()->id;
        $products = Product::where('restaurant_id', $restaurant->user_id)->get();
        if (Auth::id() !== $restaurant->user_id) {
            return view('admin.restaurants.error');
        }
        return view('admin.restaurants.show', compact('restaurant', 'products'));
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
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        $user = Auth::user();
        $restaurants = Restaurant::all();
        return view('admin.home', compact('user', 'restaurants'));
    }

    private function getSlug($title)
    {
        $slug = Str::of($title)->slug("-");
        $count = 1;

        while (Restaurant::where('slug', $slug)->first()) {
            $slug = Str::of($title)->slug("-") . "-{$count}";
            $count++;
        };

        return $slug;
    }
}
