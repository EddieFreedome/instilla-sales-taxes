<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function Laravel\Prompts\error;
use function Laravel\Prompts\warning;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vat = 10;
        $import_duty = 5;

        
        // return 'start';
        // $endpoint = 'https://instilla-sales-tax-problem.s3.eu-central-1.amazonaws.com/sales-tax-problem-test.json';

        // try {

        //     $curl = curl_init();

        //     curl_setopt_array($curl, array(
        //     CURLOPT_URL => $endpoint,
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     ));

        //     $response = curl_exec($curl);

        //     curl_close($curl);

        //     $response = json_decode($response, true);
        //     // $token = "Authorization: Bearer ".$dec_response->data->token;

            
        // } catch (\Throwable $th) {
        //     // Login record
        //     // return redirect()->back()->withErrors("Ops, qualcosa e' andato storto' ");
        //     return 'UUU';

        // }
        
        
        // $this->response['response'] = json_decode($output);
        $response = Http::get('https://instilla-sales-tax-problem.s3.eu-central-1.amazonaws.com/sales-tax-problem-test.json');
        // dd($response);
        // $response =[
        //     array(
        //         "name"=> "The Lord of the Rings",
        //         "price"=> "50.50",
        //         "category"=> "books",
        //         "image"=> "",
        //     ),
        //     array(
        //         "name"=> "Game of Thrones",
        //         "price"=> "25.00",
        //         "category"=> "books",
        //         "image"=> ""
        //     ),
        //     array(
        //         "name"=> "Chocolate bar",
        //         "price"=> "9.99",
        //         "category"=> "food",
        //         "image"=> ""
        //     ),
        //     array(
        //         "name"=> "Box of chocolates",
        //         "price"=> "14.99",
        //         "category"=> "food",
        //         "image"=> ""
        //     ),
        //     array(
        //         "name"=> "Headache pills",
        //         "price"=> "15.00",
        //         "category"=> "medical-products",
        //         "image"=> ""
        //     ),
        //     array(
        //         "name"=> "Music CD",
        //         "price"=> "10.00",
        //         "category"=> "other",
        //         "image"=> ""
        //     ),
        //     array(
        //         "name"=> "Bottle of perfume",
        //         "price"=> "50.50",
        //         "category"=> "other",
        //         "image"=> ""
        //     )
        //     ];

        // dd($response);
        // $products = $response;
        $products = $response->json();
        // dd($products[0]);

        //push dentro singolo product per aggiungere product_id = index (di array response)
        for ($i=0; $i < count($products); $i++) { 
            $products[$i]['id'] = $i+1;    
        }
        
        // dalla response, seleziona i prodotti che compaiono solo nel carrello a db (dove l'indice della response = product_id cart; 
        $cart_items = Cart::all()->toArray();
        

        //1.  Se il prodotto e' gia' salvato nel Cart, 
        //query del prodotto tramite product_id per recuperare il prezzo
        
        //2. Fare le logiche per calcolare la tassa e aggiungere il campo
        //tassa al $cart_items per restituirlo alla view


        // dd($cart_items);

            // array creation as colletion of products in cart (built as array)
            for ($i=0; $i < count($cart_items); $i++) { 
                
                foreach ($products as $product) {

                    if ( $product['id'] === $cart_items[$i]['product_id'] ) {
                        
                        $cart_items[$i]['name'] = $product['name'];
                        $cart_items[$i]['price'] = $product['price'];
                        $cart_items[$i]['category'] = $product['category'];


                        $price = $cart_items[$i]['price'];

                        switch ($cart_items[$i]['category']) {
                            case 'books':
                            case 'food':
                            case 'medical-products':
                                
                                if($cart_items[$i]['imported'] === 1){
                            
                                    $tax = round(($price*$import_duty/100), 2);
                                    $cart_items[$i]['tax'] = $this->rndfn($tax);
    
                                } else {
                                    $cart_items[$i]['tax'] = 0.00;
                                }
                                
                                break;
                            
                            default:

                                if($cart_items[$i]['imported'] === 1){
                                
                                    $tax = round(($price*($vat + $import_duty)/100), 2);
                                    $cart_items[$i]['tax'] = $this->rndfn($tax);
                                
                                } else {

                                    $tax = round(($price*$vat/100), 2);
                                    $cart_items[$i]['tax'] = $this->rndfn($tax);
                                }
                                
                                break;
                        }

                    };
                };
            };

            if ($cart_items === []) {
                $cart_items = null;
            }

        // dd($products, $cart_items);


        return view('welcome', compact('products', 'cart_items', 'vat', 'import_duty'));
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
        if ($request->ajax()) {
            
            // dd('Woah, welcome!');
            $vat = 10;
            $import_duty = 5;

            $response = Http::get('https://instilla-sales-tax-problem.s3.eu-central-1.amazonaws.com/sales-tax-problem-test.json');
            $products = $response->json();
            // dd( $request->all() );
            $imported = $request['imported'];
            $card_id = $request['cardId'];

            // pushing id inside product element
            for ($i=0; $i < count($products); $i++) { 
                $products[$i]['id'] = $i+1;    
            };
            
            // dd($products);

            $new_item = new Cart();
            $new_item->product_id = $card_id;
            $new_item->imported = $imported;
            // dd($new_item);
            $new_item->save();



            // Assembly of selected item, adding import and id from the request
            for ($i=0; $i < count($products); $i++) { 

                if ( strval($products[$i]['id']) === $card_id ) {
                    
                    // dd('here');  
                    $new_item->name = $products[$i]['name'];
                    $new_item->price = $products[$i]['price'];
                    $new_item->category = $products[$i]['category'];
                    $new_item->imported = $imported;
    
                    $price = $new_item->price;

                    // tax calculator --> function soon
                    switch ($new_item->category) {
                        case 'books':
                        case 'food':
                        case 'medical-products':
                            
                            if($new_item->imported === '1'){
                                $tax = round(($price*$import_duty/100), 2);
                                $new_item->tax = $this->rndfn($tax);
                                $new_item->tax = number_format((float)$new_item->tax, 2, '.', '');
                            } else {
                                $new_item->tax = '0.00';
                            }
                            
                            break;
                        
                        default:
    
                            if($new_item->imported === '1'){
                            
                                $tax = round(($price*($vat + $import_duty)/100), 2);
                                $new_item->tax = strval($this->rndfn($tax));
                                $new_item->tax = number_format((float)$new_item->tax, 2, '.', '');
                                
                            } else {
    
                                $tax = round(($price*$vat/100), 2);
                                $new_item->tax = strval($this->rndfn($tax));
                                $new_item->tax = number_format((float)$new_item->tax, 2, '.', '');

                            }
                            
                            break;
                    };
                    
                    if ($imported === '1') {
                        $new_item->imported = "Yes";
                    } else {
                        $new_item->imported = "No";
                    };
                };
            }
   
            
            $data = [
                'cart_items' => Cart::all(),
                'products' => $products,
                'saved_item' => $new_item,
            ];
            
            return response()->json($data);
        };
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


    // CUSTOM FUNCTIONS

    // Funzione per approssimare...
    public function rndfn($x){
        return round($x * 2, 1)/2;
    }

    // public function getTaxes($x , $vat, $import_duty){
    //     switch ($x['category']) {
    //         case 'books':
    //         case 'food':
    //         case 'medical-products':
                
    //             if($x['imported'] === 1){
            
    //                 $tax = round(($x['price']*$import_duty/100), 2);
    //                 $x['tax'] = $this->rndfn($tax);

    //                 return $saved_item['tax'] = $x['tax'];

    //             } else {
    //                 $x['tax'] = 0.00;
    //                 return $saved_item['tax'] = $x['tax'];

    //             }
                
    //             break;
            
    //         default:

    //             if($x['imported'] === 1){
                
    //                 $tax = round(($x['price']*($vat + $import_duty)/100), 2);
    //                 $x['tax'] = $this->rndfn($tax);

    //                 return $saved_item['tax'] = $x['tax'];
                    
    //             } else {

    //                 $tax = round(($x['price']*$vat/100), 2);
    //                 $saved_item['tax'] = $this->rndfn($tax);
                    
    //                 return $saved_item['tax'] = $x['tax'];
    //             }
                
    //             break;
    //     }
    // }
}
