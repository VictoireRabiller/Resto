<?php

class ProcessLoginController
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
    	

            $email = $_POST['email'];

            $password = $_POST['password'];
            // echo $email;
            // exit;

            $user = getUserByEmail($email);



            // $sql = "SELECT * 
            //     FROM user 
            //     WHERE email LIKE '$email'";
            // // echo $sql;
            // // exit;
            // $bdd = new PDO('mysql:host=localhost;dbname=banana_store','root','troiswa');
            // $bdd->exec('SET NAMES UTF8');

            // $statement = $bdd->prepare($sql);
            // $statement->execute();
            // $user = $statement->fetch();


            if ($user == null) {
                header('Location: login.php?error=1');
                exit;


            } else {
                
                if ($password == $user['password']) {

                    $_SESSION['iduser'] = $user['id'];

                    header('Location: HomeController.class.php');
                    exit;

                } else {

                    header('Location: ProcessLoginController.class.php?error=2');
                    exit;

                }

            }


        /*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}