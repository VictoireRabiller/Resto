'use strict';
console.log("order.js chargé")
/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////


$("#productSelected").on('change',function(){

	var id = $('option:selected').val();
	
	console.log(id);
	
	var url = getRequestUrl() + '/product';
	
	var params = {
		id:id
	}
	
	$produitDescription= $.get('ProductView.phtml');

});





/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////
