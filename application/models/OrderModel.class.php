<?php

class OrderModel {

	public function createBasket(array $basket) {

    	// var_dump($user);

		$db = new Database();

		$sql = "
			INSERT INTO `order`
			(id, user_id, created_at, status) 
			VALUES (null, :user_id, NOW(), :status)";
				


		$db->executeSql($sql, $user);



}
