<?php

class PaymentController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $orderProductList = OrderModel::getOrderById($order_id);

        // order line

    	return ['orderProductList ' => $orderProductList ];  	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

      
    }

}