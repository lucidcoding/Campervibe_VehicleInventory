<?php
namespace controllers;

require 'application/viewmodels/vehicleviewmodel.php';
require 'application/entities/vehicle.php';
require 'application/repositories/vehiclerepository.php';

use repositories\VehicleRepository;

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class VehicleController 
{
    protected $vehicleRepository;
    
    //public function __construct(iVehicleRepository $vehicleRepository)
    /**
     * @Inject
     * @param repositories\VehicleRepository $vehicleRepository
     */
    public function __construct($vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }
    
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        date_default_timezone_set('Europe/London');
        $vehicles = $this->vehicleRepository->getAll();
        
        $viewModel = array();
        
        foreach ($vehicles as $vehicle)
        {
            $vehicleViewModel = new \viewmodels\VehicleViewModel();
            $vehicleViewModel->id = $vehicle->getId();
            $vehicleViewModel->makeName = $vehicle->getModel()->getMake()->getName();
            $vehicleViewModel->modelName = $vehicle->getModel()->getName();
            $vehicleViewModel->year = $vehicle->getYear();
            $vehicleViewModel->name = $vehicle->getName();
            $vehicleViewModel->description = $vehicle->getDescription();
            array_push($viewModel, $vehicleViewModel);
        }
                
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
