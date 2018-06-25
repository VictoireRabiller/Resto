<?php

class OrderModel {

	static function createOrder($user_id, $products) {

    	// Tools::pre($_SESSION);

		if (empty($products)) {
			throw new Exception("Products empty");
		}


		$db = new Database();
       
		$sql = "
			INSERT INTO `order`
			(user_id, created_at, status) 
			VALUES ( ?, NOW(), 'pending')";
				


		$orderId = $db->executeSql($sql, [$user_id]);

		self::createOrder_line($orderId, $products);

		return $orderId;
	}
	

	static function createOrder_line($orderId, $products) {


		$db = new Database();
       
   
		
		foreach ($products as $product) {

			$sql = "
				INSERT INTO order_line
				(product_id, order_id, priceHT, tax, quantity)
				VALUES (:product_id, :order_id, :priceHT, :tax, :quantity)
			";

			$data = [];
			$data['product_id'] = $product['id'];
			$data['order_id'] = $orderId;
			$data['priceHT'] = $product['priceHT'];
			$data['tax'] = $product['tax'];
			$data['quantity'] = $product['quantity'];

			$db->executeSql($sql, $data);

		}

	}




	public static function getOrderById($id) {

		$db = new Database();
************************************
		$sql = "SELECT * FROM `order` WHERE id = ?
		JOIN ....";
*******************************
		$params = [$id];

		return $db->queryOne($sql, $params);
	}

}