<?php

class SuccessController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
       
      
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $orderId = $formFields["orderId"]; //revient à faire un $_POST 
        $order = OrderModel::getOrderById($orderId);
        $order = OrderModel::updateStatus($orderId);

    }

}