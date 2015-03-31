<?php
namespace repositories;

class VehicleRepository
{
    public function getAll()
    {
        require_once "application/config/doctrineconfig.php";
        
        $vehicles = $entityManager
                ->createQuery("SELECT v FROM :Vehicle v")
                ->getResult();
        
        return $vehicles;
    }
}