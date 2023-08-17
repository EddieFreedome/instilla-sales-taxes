<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        
        
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>

        

    </head>

    
    <body class="antialiased relative">


        <nav class='min-h-nav sticky top-0 w-full bg-white p-6 rounded-bl-48 rounded-br-48  mb-10 sm:mb-1 shadow-md shadow-gray-500/10 z-50 '>

            <div class="container mx-auto flex items-center justify-between">

                <a href='/sto' class='flex-center'>
                    <img
                        src='images/instilla-logo-color.svg'
                        alt='logo'
                        class='object-contain md:h-12 '
                    />
                </a>

                <a class="text-instilla font-bold" href="/">
                    SALES TAXES PROBLEM
                </a>
                
            </div>
        </nav>

        
        <main class="">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <section class="container mx-auto mb-28">
                
                <h1 class="md:text-5xl font-bold md:mt-5 md:mb-28">Products catalogue</h1>
    
                <div class="card-container grid grid-cols-4 gap-9 ">
    
                    @for($i = 0; $i < count($products); $i++)
                        
                        <div class="card" productId="{{ $i }}">
                            
                            
                            <div class="img-container relative h-52 bg-white ">
                                <img class="shadow-sm shadow-black/30 h-full w-full object-contain" src="{{ $products[$i]['image'] }}" alt="">

                                <div class="bg-black custom-rad p-2  text-white text-xs flex items-center justify-center absolute bottom-2 left-2">
                                    <i class="fa fa-tag mr-2" aria-hidden="true"></i>
                                    <p class="text-white"> {{ strtoupper($products[$i]['category']) }} </p>
     
                                </div>
                            </div>
        



                            <h3 class="card-title md:text-2xl font-bold ">
                                {{ $products[$i]['name'] }}
                            </h3>
        
                            <p class="price">
                                {{ '$ '.$products[$i]['price'] }}
                            </p>
        
                            <div class="flex">
                                <input class="" type="checkbox" name="import-duty" id="import-duty" value="1">
                                <label class="pl-1" for="import-duty">Apply import duty</label>
                            </div>
                            <a cardId="{{ $i }}" class="md:mt-5 cart-btn inline-block text-center w-full cursor-pointer" >ADD TO CART</a>
        
                        </div>

                    @endfor
        
                </div>
    
            </section>



            {{-- Selected Products --}}

            <section class="container mx-auto mb-24">

                <h1 class="md:text-5xl font-bold md:mt-5 md:mb-5">Selected Products</h1>


                {{-- CUSTOM TABLE --}}
                <div class="custom-table custom-rad md:px-10 md:py-6 grid bg-white md:mb-10 w-full md:mt-10 shadow-md shadow-gray-500/10">

                    {{-- table head --}}
                    <div class="thead grid grid-cols-12 ">   

                        <div class="col-span-6">PRODUCT</div>
                        <div class="col-span-1 text-start">IMPORTED</div>
                        <div class="col-span-2 text-end">PRICE</div>
                        <div class="col-span-2 text-end">TAX</div>
                        <div class="col-span-1"></div>

                    </div>


                    {{-- table body --}}
                    {{-- @dd($cart_items) --}}
                    {{-- rendere dinamico --}}

                    @foreach($cart_items as $item)
                        
                        <div class="tbody">
                            
                            <div class="body-row grid grid-cols-12">

                                <div class="col-span-6 md:py-6">
                                    <p class="name">{{ $item['name'] }}</p>
                                </div>
                                
                                {{-- Imported --}}
                                <div class="col-span-1 text-start md:py-6">
                                    @if($item['imported'] === 1)
                                        <p class="imported">Yes</p>
                                    @else
                                        <p class="imported">No</p>
                                    @endif
                                </div>    
                                
        
                                <div class="col-span-2 text-end md:py-6">
                                    <p class="price"> {{ '$ '.$item['price'] }} </p>
                                </div>

                                <div class="col-span-2 text-end md:py-6">
                                    <p class="tax"> {{ '$ '.$item['tax'] }} </p>
                                </div>
                                
                                    
        
                                <div class="col-span-1 text-end md:py-6">
                                    
                                    <a href="">
                                        <i class="col-span-1 fa fa-trash h-3 ml-2" aria-hidden="true"></i>
                                    </a>
        
                                </div>

                            </div>
                            
                        </div>
                    @endforeach



                </div>

                <div class="text-end w-full">
    
                    <a href="" class="cart-btn w-1/4 inline-block text-center ml-9"> GENERATE RECEIPT </a>
                </div>



                {{-- OLD HTML TABLE --}}
                {{-- <table class="bg-white md:mb-10 w-full shadow-gray-500/40  ">
                    <thead class="text-start">
                            <th class="text-start">
                                <h4>PRODUCT</h4> 
                            </th>
                            <th class="text-start">
                                <h4>IMPORTED</h4> 
                            </th>
                            <th class="">
                                <h4>PRICE</h4> 
                            </th>
                            <th class="">
                                <h4>TAX</h4> 
                            </th>

                    </thead>
                    
                    
                    <tbody>
                        
                        <tr>
                            <td>Bottle of perfume</td>
                            <td>No</td>
                            <td>$ 19.99</td>
                            <td>$ 0.08</td>
                        </tr>

                        <tr>
                            <td>Bottle of perfume</td>
                            <td>No</td>
                            <td>$ 19.99</td>
                            <td>$ 0.08</td>
                        </tr>

                        <tr>
                            <td>Headache pills</td>
                            <td>No</td>
                            <td>$ 19.99</td>
                            <td>$ 0.08</td>
                        </tr>

                        <tr>
                            <td>Headache pills</td>
                            <td>No</td>
                            <td>$ 19.99</td>
                            <td>$ 0.08</td>
                        </tr>

                        <tr>
                            <td>Headache pills</td>
                            <td>No</td>
                            <td>$ 19.99</td>
                            <td>$ 0.08</td>
                        </tr>
                    </tbody>

                </table> --}}



                <div class="md:mt-10 grid grid-cols-12">
                    <div class="col-span-5"></div>
                    
                    <div class="col-span-7 bg-white pl-10 py-10 custom-rad shadow-md shadow-gray-500/10">
                        
                        <div class="grid grid-cols-7 px-10 ">

                            <div class="col-span-3 text-start text-3xl font-bold">
                                Receipt
                            </div>

                            <div class="col-span-2 flex flex-col text-start">
                                <h1 class="text-2xl font-bold">
                                    Total amount
                                </h1>
                                <p>Including taxes</p>
                            </div>

                            <div class="col-span-2 text-end ">
                                <h1 class="text-2xl font-bold  ">
                                    $ 158.75
                                </h1>
                                <p>
                                    $ 12.78
                                </p>
                            </div>





                        </div>
                    
                    </div>

                </div>

            </section>














        </main>

    </body>

    <script>

        // $(document).ready( function(){
         
            // $('cart-btn').on("click", function (e) {
            //     e.preventDefault();
                
            //     console.log('this');
            //     // $.ajax({
            //     //     type: "post",
            //     //     url: "/addToCart",
            //     //     data: "Ciao",
            //     //     dataType: "dataType",
            //     //     success: function (response) {
            //     //         console.log('ok');
            //     //     }
            //     // });
            // }); 
                
            
        // });
                    
            


        // });
        $( document ).ready(function() {

            console.log( "ready!" );
            let cart
            
            $('.cart-btn').click(function (e) {
                e.preventDefault();
    
                let route = "{{ route('add.cart') }}";
                let cartItems = {!! json_encode($cart_items) !!}
                let cardId = Number($(this).attr("cardId"))
                console.log(cardId);
                
                //popola un array js virtuale con i prodotti gia' esistenti
                let arrId = [];
                for (let i = 0; i < cartItems.length; i++) {
                    // console.log(cartItems[i].product_id);
                    
                    arrId.push(cartItems[i].product_id) ;
                    
                }
                
                console.log(arrId);
                // console.log(arrId.includes(cardId));
    
                if (arrId.includes(cardId)) {
                    //fai un cazz
                    console.log("ci sta gia' dentro");
                    
                } else {
    
                    console.log('ci va dentro');
    
    
    
    
                    $.ajax({
                        type: "put",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),   
                        },
                        url: route,
                        data: {
                            "card_id":cardId   
                        },
                        dataType: "json",
                        success: function (response) {
                            // response = $.parseJSON(response);
                            console.log(response);


                            //stavi scrivendo il success : per ogni elemento nel carrello (all'index)
                            //crea un elemento sul blade nella lista;

                            //ogni volta che si aggiunge un elemento, al success, si inietta html sul
                            //front che aggiunge una riga alla tabella; si seleziona da cart l'elemento col product id e
                            //con i dati si popola il dettaglio del front
                            cart = response.newProduct
                            console.log(cart);
                            
                            // let r = $(`<div class="body-row grid grid-cols-12"><div class="col-span-6 md:py-6"><p class="title"> testtttttt </p>
                            //         </div>
                            //         <div class="col-span-1 text-start md:py-6">
                            //             <p class="imported">Yes</p>
                            //         </div>
                            //         <div class="col-span-2 text-end md:py-6">
                            //             <p class="price">$ 19.99</p>
                            //         </div>
                            //         <div class="col-span-2 text-end md:py-6">
                            //             <p class="tax">$ 0.05</p>
                            //         </div>
                            //         <div class="col-span-1 text-end md:py-6">
                                        
                            //             <a href="">
                            //                 <i class="col-span-1 fa fa-trash h-3 ml-2" aria-hidden="true"></i>
                            //             </a>

                            //         </div>
                            //     </div>


                            // `);
                            // .$(.'body-row').append(content);
                            
                            

                            let row = {

                                'container': `<div class="body-row grid grid-cols-12">`,
                                'title': `<div class="col-span-6 md:py-6"><p class="title"> ${cart.title} </p></div>`,
                                'imported': `<div class="col-span-1 text-start md:py-6"><p class="imported">${cart.imported}</p></div>`,
                                'price': `<div class="col-span-2 text-end md:py-6"><p class="price"> ${cart.price} </p></div>`,
                                'tax': `<div class="col-span-2 text-end md:py-6"><p class="tax">${cart.tax}</p></div>`,
                                'end': '</div>'


                            };
                            //div di row da chiiusere alla fine
                            // let container = `<div class="body-row grid grid-cols-12">`;
                            // let title = `<div class="col-span-6 md:py-6"><p class="title"> ${cart.title} </p></div>`;
                            // let imported = `<div class="col-span-1 text-start md:py-6"><p class="imported">Yes</p></div>`;
                            // let price = `<div class="col-span-2 text-end md:py-6"><p class="price">$ 19.99</p></div>`;
                            // let tax = `<div class="col-span-2 text-end md:py-6"><p class="tax">$ 0.05</p></div>`;
                            
                            let bodyTable = $('.tbody');

                            // $.each(row, function (i, valueOfElement) { 
                            //     bodyTable.append(row.i);
                                 
                            // });
                            
                            
                            
                            console.log(row);
                            
                            
                            
                            
                            
                            
                            // return cart
                            // if (response.success) {
                            //     console.log('arriva');
                            //     alert(response.responseText);
                            // } else {
                            //     // DoSomethingElse()
                            //     alert('errore');
                            // }       
                            
                        },
                        error: function (response) {
                            alert("error!");  // 
                        }
                    });
                }
    
                // console.log(cartItems[0].product_id);
            });

            
        });

    </script>
    
</html>
