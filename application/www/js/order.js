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