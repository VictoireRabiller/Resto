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




	// public static function getOrderById($id) {

	// 	$db = new Database();

	// 	$sql = "
	// 			SELECT `order`.id, `order`.user_id, `order`.created_at, `order`.status, order_line.product_id, order_line.order_id, order_line.priceHT,order_line.tax, order_line.quantity
	// 			FROM `order` 
	// 			JOIN order_line ON `order`.id = order_line.order_id 
	// 			WHERE  `order`.id LIKE ?";
	// 	$params = [];
	// 	$params[] = $id;

	// 	return $db->queryOne($sql, $params);
	// }

	public static function getOrderById($id) {

		$db = new Database();

		$sql = "
				SELECT *
				FROM `order` 
				WHERE  id = ?";
		
		$params = [];
		$params[] = $id;

 

		$order = $db->queryOne($sql, $params);

		$order['orderLines'] = OrderModel::getOrderLinesByOrderId($id);

		return $order;
	}

	public static function getOrderLinesByOrderId($orderId) {

		$db = new Database();

		$sql = "
				SELECT *
				FROM `order_line` 
				JOIN product ON product.id = order_line.product_id
				WHERE  order_id = ?";

		$params = [];
		$params[] = $orderId;

		$orderLines = $db->query($sql, $params);

		return $orderLines;
	}


	public static function updateStatus($orderId) {

		$db = new Database();

		$sql = "UPDATE `order` SET status ='paid' WHERE`id` = ?" ;

		$data = [];

		$data[] = $orderId;

		$db->executeSql($sql, $data);




	}



}