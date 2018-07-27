'use strict';
console.log("order.js chargé")


$('select').on('change', function () {

	var productId = $(this).val();

	console.log('change', productId);

	var url = getRequestUrl() + '/product';

	var params = {
		id: productId
	};

	console.log(params);

	$.get(url, params, function (html) {
		$('.product-info').html(html);
	});
});

$('select').trigger('change');



$('#btn-add').on('click', function () {
	console.log('click');
	
	var productId = $("select").val();
	var quantity = $('#quantity').val();

	console.log('click', quantity);

	var url = getRequestUrl() + '/cart';

	var params = {};
	params.id = productId;
	params.quantity = quantity;

	console.log(params);

	$.post(url, params, function (html) {
		$('.box-cart').html(html);
	});
});

function loadCart() {
	// load cart
	var url = getRequestUrl() + '/cart';

	$.get(url, function (html) {
		$('.box-cart').html(html);
	});	
}

loadCart();


$(document).on("click",".btn-delete", function(){
   //on récupére l'objet document qui est l'objet principal de js pas de guillemet car ce serait une chaine de caractere
    console.log('click');
    
    if (confirm('Voulez-vous vraiment retirer ce produit de votre panier ?')) {
        
        var productId = $(this).attr('data-id');    
		// this représente le bouton sur lequel on a cliqué
        var url = getRequestUrl() + '/cart';

        var params = {};
        params.id = productId;
        params.delete = 1;
        //params.delete peut avoir n'importe quelle valeur.

        console.log(params);

    	$.post(url, params, function (html) {
       		$('.box-cart').html(html);
    	});

	}
});


