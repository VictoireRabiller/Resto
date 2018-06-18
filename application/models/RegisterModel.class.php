<?php

class RegisterModel {

	public function saveUser() {

		$db = new Database();

		$sql = "INSERT INTO user
		(id, firstname, lastname, birthday, email, password, address, zipcode, city, phone, created_at, updated_at)
		VALUES (NULL, :firstname, :lastname, :birthday, :email, :password, :address, :zipcode, :city, :phone, NOW(), NOW())";
		
		$user = $db->queryOne($sql);

		return $user;
	}
}
