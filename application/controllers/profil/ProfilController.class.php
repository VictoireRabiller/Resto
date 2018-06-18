<?php

class ProfilController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $profilModel = new ProfilModel();

        $profil = $profilModel->getUser();
        // $tools = new Tools();
        // $tools->pre($productList);
        // ou
        // Tools::pre($productList);
        // exit;

        return ['profil' => $profil];
        
        
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}