<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $products = Product::all();
        $response = Http::get('https://instilla-sales-tax-problem.s3.eu-central-1.amazonaws.com/sales-tax-problem-test.json');
        $products = $response->json();

        $cart_items = Cart::all();

        return view('welcome', compact('products', 'cart_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addToCart(Request $request)
    {
        // dd($request->all());

        //if product id e' gia' stato salvato...



        $card_id = $request->card_id;

        $new_item = new Cart();
        $new_item->product_id = $card_id;
        $new_item->save();


        //check cart items (for list)
        $data = [
            // 'success' => true,
            // 'message'=> 'Your AJAX processed correctly',
            'cart_items' => Cart::all()
        ];


        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
