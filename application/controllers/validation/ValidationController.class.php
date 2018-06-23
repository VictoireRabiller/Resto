<?php

class ValidationController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    
        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	$orderModel = new OrderModel();
        //formatage de la date pour db
       


        // var_dump("$cart:".$cart);
        // exit;

        $orderModel->createOrder($cart);

        $http->redirectTo('payment');
    
    }

}