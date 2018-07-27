<?php

class RegisterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        // die('hello');
        
    	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {

 

    	
         // var_dump($formFields);   

        $userModel = new UserModel();
        //formatage de la date pour db
        $timestamp = mktime(0, 0, 0, $formFields['month'], $formFields['day'], $formFields['year']);

        $formFields['birthdate'] = date('Y-m-d', $timestamp);
        //j'efface mes variables month day et year du formfields
        unset($formFields['month']);
        unset($formFields['day']);
        unset($formFields['year']);


        // var_dump($formFields);
        // exit;

        $userModel->createUser($formFields);

        $http->redirectTo('login');

        

    }
}