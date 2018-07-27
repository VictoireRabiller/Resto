<?php

class BookingController
{
    public function httpGetMethod(Http $http)
    {
        $user = new UserSession();
        if($user->isConnected() == false)
        {
            // pour etre connecté au moment résa 
            $http->redirectTo('login');
        }
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $user = new UserSession();
        
        if($user->isConnected() == false)
        {
            // pour etre connecté au moment résa 
            $http->redirectTo('login');
        }

        // Récupération du compte client 
        $user_id = $user->getUser();

        $bookingModel = new BookingModel();
        $bookingModel->create
        (
            $user_id,
            $formFields['bookingYear'].'-'.
            $formFields['bookingMonth'].'-'.
            $formFields['bookingDay'],
            $formFields['bookingHour'].':'.
            $formFields['bookingMinute'],
            $formFields['seat_number']
        );

        $http->redirectTo('');
    }
}