// import { inArray, each } from "jquery";
// import { intersection } from "lodash";


$(function (e){
    e.preventDefault
    let textTag = $('.textTag');

    textTag.each(function (index, element) {
        
       console.log(element, index); 

       let el = $(element).text();
       console.log($(element).text()); //correct in retrieving text 

        if (el.length > 12) {
            // console.log(true);
            $($(element).parent()).addClass("mr-10");
            // console.log(element)
        }

    });


    // let a = 1;
    // console.log(a);


    // let addCartBtn = $('.cart-btn');
    
    
});


window.addEventListener('load', function () {


    let cart = window.cart;


    function calculateTax(params) {
        
    }
    //onclick generateReceipt
    
    // console.log(cart);
    // function addToCart() {
        
    // }


})

// $('.cart-btn').click(function (e) {
//     e.preventDefault();
//     // let date = $(this).attr("date");
//     // let name = $(this).attr('name');
//     // console.log('ok');
//     console.log($(this));
//     let route = "{{ route('add.cart') }}";
//     let cardId = $(this).attr("cardId")
//     console.log(cardId);
//     $.ajax({
//         type: "post",
//         url: route,
//         data: "Ciao",
//         dataType: "dataType",
//         success: function (response) {
//             console.log('ok');
//         }
//     });
// }); 
  