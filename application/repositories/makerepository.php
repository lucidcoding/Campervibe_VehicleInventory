<?php
namespace repositories;

class MakeRepository
{
    public function getAll()
    {
        require_once "application/config/doctrineconfig.php";
        
        $makes = $entityManager
                ->createQuery("SELECT m FROM :Make m")
                ->getResult();
        
        return $makes;
    }
}