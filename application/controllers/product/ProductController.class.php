<?php

class ProductController
{
       public function httpGetMethod(Http $http, array $queryFields)
    {
        $productId = $queryFields['id'];

        $product = ProductModel::getProductById($productId);

        return ['_raw_template' => true, 'product' => $product];
    }


}

    public function httpPostMethod(Http $http, array $formFields)
    {

 

    	
      
        


       	 /* Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}