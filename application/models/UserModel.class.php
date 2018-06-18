<?php

class UserModel {

    public function getUser() {

        $db = new Database();

        $sql = "SELECT * FROM user";
        $user = $db-> queryOne($sql);

        return $user;
    }
}
