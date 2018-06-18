<?php
class UserModel
{

	public function __construct()
	{
		session_start();
		
	}
		
    public function createUser($id, $firstName, $lastName, $email)
    {
        $_SESSION['user'] =
        [
            'id'        => $id,
            'FirstName' => $firstName,
            'LastName'  => $lastName,
            'Email'     => $email
        ];
    }
  
    public function getEmail()
    {
        $_SESSION['user']['Email'];
    }
   


    public function getFirstName()
    {
        $_SESSION['user']['FirstName'];
    }
    
      
    public function getLastName()
    {
        $_SESSION['user']['LastName'];
    }

    public function getUserId()
    {
        $_SESSION['user']['id'];
    }
	
}
