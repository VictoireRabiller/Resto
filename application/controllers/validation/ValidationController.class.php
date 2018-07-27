<?php

class ValidationController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	$userSession = new UserSession();

        if ( ! $userSession->isConnected()) {

            $http->redirectTo('login');
        }
        
        $products = Cart::getProductsWithQuantity();
        
        $orderId = OrderModel::createOrder($_SESSION["user_id"], $products);
        // var_dump($products);
        // exit;

        
        Cart::reset();

        $http->redirectTo('payment?id='.$orderId);
    
    }

}