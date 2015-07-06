<?php
namespace controllers;

require 'vendor/auth0/auth0-php/src/Auth0.php';

use Auth0\SDK\Auth0;

/*

https://login.windows.net/paultdhotmail.onmicrosoft.com?client_id=2d708142-face-4379-bc2d-7ff4bcfe9be2&redirect_uri=YOUR_APP_CALLBACK&connection=paultdhotmail.onmicrosoft.com
 * 
 */

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class HomeController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        /*
        $auth0 = new Auth0(array(
            'domain'        => 'https://login.windows.net/paultdhotmail.onmicrosoft.com',
            'client_id'     => '2d708142-face-4379-bc2d-7ff4bcfe9be2',
            'client_secret' => 'hPRIcGRAyl/FPKe/5RBje7lYiav3hRbSefMiY1rlyKk=',
            'redirect_uri'  => 'http://localhost/CampervibeVehicleInventory/'
        ));
        
        $email = $auth0->getUserInfo()["email"];
        
        echo "email: $email";
               
         * 
         */
        
        // debug message to show where you are, just for the demo
        //echo "Message from Controller: You are in the controller home, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleOne()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller home, using the method exampleOne()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleTwo()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_two.php';
        require 'application/views/_templates/footer.php';
    }
}
