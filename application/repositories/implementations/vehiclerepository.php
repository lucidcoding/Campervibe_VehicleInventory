<?php
namespace repositories\implementations;
require 'application/repositories/contracts/ivehiclerepository.php';
use repositories\contracts\iVehicleRepository as iVehicleRepository;

class VehicleRepository implements iVehicleRepository
{
//    public function __construct()
//    {
//   
//    }
    
    public function getAll()
    {
        require_once "bootstrap.php";
        
        $vehicles = $entityManager
                ->createQuery("SELECT v FROM :Vehicle v")
                ->getResult();
        
        return $vehicles;
    }
}