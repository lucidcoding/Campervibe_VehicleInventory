<?php
namespace controllers;

require 'application/viewmodels/vehicle/indexviewmodel.php';
require 'application/viewmodels/vehicle/addviewmodel.php';
require 'application/entities/vehicle.php';
require 'application/repositories/vehiclerepository.php';
require 'application/repositories/makerepository.php';

use repositories\VehicleRepository;
use viewModels\vehicle\IndexViewModel;
use viewModels\vehicle\AddViewModel;

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
    protected $makeRepository;
    
    //public function __construct(iVehicleRepository $vehicleRepository)
    /**
     * @Inject
     * @param repositories\VehicleRepository $vehicleRepository
     * @param repositories\MakeRepository $makeRepository
     */
    public function __construct($vehicleRepository, $makeRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->makeRepository = $makeRepository;
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
            $vehicleViewModel = new IndexViewModel();
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

    public function add()
    {
        $makes = $this->makeRepository->getAll();
        $viewModel = new AddViewModel();
        $viewModel->makes = array();
         
        foreach ($makes as $make)
        {
            $makeOption = new \stdClass();
            $makeOption->text = $make->getName();
            $makeOption->value = $make->getId();
            
            array_push($viewModel->makes, $makeOption);
        }
        
        require 'application/views/_templates/header.php';
        require 'application/views/vehicle/add.php';
        require 'application/views/_templates/footer.php';
    }
    
    public function addPost()
    {
        echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
    }
}
