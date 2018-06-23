<?php

class OrderModel {

	public function createOrder(array $cart,$user_id) {

    	Tools::pre($_SESSION);


		$db = new Database();

		$sql = "
			INSERT INTO `order`
			(id, user_id, created_at, status) 
			VALUES (null, :user_id, NOW(), :status)";
				


		$db->executeSql($sql, $order);


}
