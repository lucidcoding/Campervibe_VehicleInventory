<?php
namespace repositories;

class VehicleRepository
{
    public function getAll()
    {
        require "application/config/doctrineconfig.php";
        
        $vehicles = $entityManager
                ->createQuery("SELECT v FROM :Vehicle v")
                ->getResult();
        
        return $vehicles;
    }
    
    public function save($entity)
    {
        require "application/config/doctrineconfig.php";
        $entityManager->merge($entity);
        $entityManager->flush();
    }
}