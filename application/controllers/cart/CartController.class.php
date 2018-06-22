<?php

class CartController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $products = Cart::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];    	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

        if (isset($formFields['delete'])) {

            $productId = $formFields['id'];
            Cart::deleteOneProduct($productId);

        } else {
            $quantity = $formFields['quantity'];
            $productId = $formFields['id'];

            Cart::add($productId, $quantity);            
        }

        
        $products = Cart::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];
    }

}






// {
//     public function httpPostMethod(Http $http, array $queryFields) {
        
//         $quantity= $queryFields['quantity'];
// 		$productId = $queryFields['id'];


// 		// ajouter à la session  le productid et la quantite


// 		//création du panier
// 		if (isset($_SESSION['cart']) == false) {
// 			$_SESSION['cart'] = [];		
// 		}



// 		//création d'un tableau contenant le produit(id) et sa quantité
// 		$row = [];
// 		$row['id'] = $productId;
// 		$row['quantity'] = $quantity;



// 		$_SESSION['cart'][$productId] = $row;
		
 
// 		if (isset($_SESSION['cart'][$productId])){

// 			$_SESSION['cart'][$productId]['quantity']+=$quantity;
		
// 		} else {
// 			$row = [];
// 			$row['id'] = $productId;
// 			$row['quantity'] = $quantity;

// 			$_SESSION['cart'][$productId] = $row;

// 		}

// 		// page panier
// 		$ids = $_SESSION['cart'];


// 		$products = [];

// 		foreach ($ids as $id) {
// 			$product = ProductModel::getProductById($productId);

// 			$products[] = $product;
// 		}


		
// 		// ensuite afficher en html les produits comme dans la page d'accueil


// 		//recuper la liste desp produits dans le panier et l'envoyer à la vue


//         return ['_raw_template' => true];
//         // raw_template permet de ne pas réafficher le layout

//     }


// }

