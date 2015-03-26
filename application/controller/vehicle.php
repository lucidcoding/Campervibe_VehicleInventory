<?php

require 'application/viewmodels/vehicleviewmodel.php';

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Vehicle extends Controller 
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller vehicle, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        date_default_timezone_set('Europe/London');

        $vehicle_model = $this->loadModel('VehicleModel');
        $vehicles = $vehicle_model->getAllBookings();
        $viewModel = array();
        
        foreach ($vehicles as $vehicle)
        {
            $vehicleViewModel = new VehicleViewModel();
            $vehicleViewModel->id = $vehicle->id;
            $vehicleViewModel->year = $vehicle->year;
            $vehicleViewModel->name = $vehicle->name;
            $vehicleViewModel->description = $vehicle->description;
            array_push($viewModel, $vehicleViewModel);
        }
        
        $entity_count = count($vehicles);
        $viewmodel_count = count($viewModel);
        echo "counts: $entity_count, $viewmodel_count";
        
        require 'application/views/_templates/header.php';
        require 'application/views/vehicle/index.php';
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
        echo 'acascsa Message from Controller: You are in the controller home, using the method exampleOne()';
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
