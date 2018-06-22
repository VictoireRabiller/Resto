<?php

class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $products = Cart::getProductsWithQuantity();

        return ['products' => $products];    	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

      
    }

}