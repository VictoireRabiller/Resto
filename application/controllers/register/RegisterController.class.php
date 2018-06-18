<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        // die('hello');
        
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	

        $user = [];

        $user['firstname'] = $_POST['firstname'];
        $user['lastname'] = $_POST['lastname'];
        $user['birthday'] = $_POST['birthday'];
        $user['email'] = $_POST['email'];
        $user['password'] = $_POST['password'];
        $user['address'] = $_POST['address'];
        $user['zipcode'] = $_POST['zipcode'];
        $user['city'] = $_POST['city'];
        $user['phone'] = $_POST['phone'];
        $user['created_at'] = $_POST['created_at'];
        $user['updated_at'] = $_POST['updated_at'];

        


       	 /* Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}