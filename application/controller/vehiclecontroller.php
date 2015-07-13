<?php
namespace controllers;

require 'application/viewmodels/vehicle/indexviewmodel.php';
require 'application/viewmodels/vehicle/addviewmodel.php';
require 'application/entities/vehicle.php';
require 'application/repositories/vehiclerepository.php';
require 'application/repositories/makerepository.php';
require 'application/repositories/modelrepository.php';
require 'application/repositories/userrepository.php';
require 'application/libs/authentication.php';

use repositories\VehicleRepository;
use viewModels\vehicle\IndexViewModel;
use viewModels\vehicle\AddViewModel;
use entities;

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
    protected $modelRepository;
    protected $userRepository;
    
    //public function __construct(iVehicleRepository $vehicleRepository)
    /**
     * @Inject
     * @param repositories\VehicleRepository $vehicleRepository
     * @param repositories\MakeRepository $makeRepository
     * @param repositories\ModelRepository $modelRepository
     * @param repositories\UserRepository $userRepository
     */
    public function __construct(
            $vehicleRepository, 
            $makeRepository,
            $modelRepository,
            $userRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->makeRepository = $makeRepository;
        $this->modelRepository = $modelRepository;
        $this->userRepository = $userRepository;
    }
    
    /**
     * PAGE: restindex
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function restindex()
    {
        // Allow from any origin
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        }
    
        $vehicles = $this->vehicleRepository->getAll();
        echo json_encode($vehicles);
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
        \Authentication::checkCookie();
        $viewModel = new AddViewModel();
        $makes = $this->makeRepository->getAll();
        $models = $this->modelRepository->getAll();
        $viewModel->makes = array();
        $viewModel->models = array();
         
        foreach ($makes as $make)
        {
            $makeOption = new \stdClass();
            $makeOption->text = $make->getName();
            $makeOption->value = $make->getId();
            array_push($viewModel->makes, $makeOption);
        }
        
        foreach ($models as $model)
        {
            $modelOption = new \stdClass();
            $modelOption->text = $model->getName();
            $modelOption->value = $model->getId();
            array_push($viewModel->models, $modelOption);
        }
        
        require 'application/views/_templates/header.php';
        require 'application/views/vehicle/add.php';
        require 'application/views/_templates/footer.php';
    }
    
    public function getModelsSelect()
    {
        $viewModel = new AddViewModel();
        $models = $this->modelRepository->getByMakeId($_GET["makeId"]);
        $viewModel->models = array();
        
        foreach ($models as $model)
        {
            $modelOption = new \stdClass();
            $modelOption->text = $model->getName();
            $modelOption->value = $model->getId();
            array_push($viewModel->models, $modelOption);
        }
        
        require 'application/views/vehicle/modelsselect.php';
    }
    
    public function addPost()
    {
        \Authentication::checkCookie();
        $model = $this->modelRepository->getById($_POST["modelId"]);
        $createdBy = $_COOKIE['auth_cookie'];
        
        $vehicle = entities\Vehicle::add(
            $_POST["name"], $model, $_POST["year"], $_POST["description"], $createdBy);
        
        $this->vehicleRepository->save($vehicle);
        header("Location: /Vehicle/Index");
        die();
    }
    
    public function delete($vehicleId)
    {
        \Authentication::checkCookie();
        $this->vehicleRepository->remove($vehicleId);
        header("Location: /Vehicle/Index");
        die();
    }
}
