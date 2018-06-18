<?php

class UserModel {

	public function createUser(array $user) {

    // var_dump($user);

	// if (empty($user['email'])) {
	// 	throw new Exception("Email empty");
	// }

	// if (empty($user['password'])) {
	// 	throw new Exception("password empty");
	// }


	// $user['password'] = crypt($user['password'], 'abc');


	$db = new Database();

	$sql = "
		INSERT INTO user
		(firstname, lastname, birthday, email, password, address, zipcode, city, phone, created_at, updated_at)
		VALUES (:firstname, :lastname, :birthday, :email, :password, :address, :zipcode, :city, :phone, NOW(), NOW())
		";

		$db->executeSql($sql, $user);
	}
}
