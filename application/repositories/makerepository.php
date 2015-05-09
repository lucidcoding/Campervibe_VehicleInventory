<?php
namespace repositories;

class MakeRepository
{
    public function getAll()
    {
        require "application/config/doctrineconfig.php";
        
        $makes = $entityManager
                ->createQuery("SELECT m FROM :Make m")
                ->getResult();
        
        return $makes;
    }
}