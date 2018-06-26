<?php

class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	$orderId = $queryFields["id"]; //revient à faire un $_GET
        $order = OrderModel::getOrderById($orderId);
       
        // Tools::pre($order);
        // exit;




     //    $order = OrderModel::updateStatus($orderId);
    	return ['orderLines'=> $order['orderLines'], 'order'=>$order];  	//vue
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

      
    }

}