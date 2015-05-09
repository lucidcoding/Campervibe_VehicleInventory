<?php
namespace repositories;

class ModelRepository
{
    public function getAll()
    {
        require "application/config/doctrineconfig.php";
        
        $models = $entityManager
                ->createQuery("SELECT m FROM :Model m")
                ->getResult();
        
        return $models;
    }
    
    public function getByMakeId($makeId)
    {
        require "application/config/doctrineconfig.php";
        
        $query = $entityManager
                ->createQuery("SELECT m FROM :Model m WHERE m.make = :makeId");
        
        $query->setParameters(array(
            'makeId' => $makeId
        ));
        
        $models = $query->getResult();
        return $models;
    }
    
    public function getById($modelId)
    {
        require "application/config/doctrineconfig.php";
        
        $model = $entityManager
                ->find(":Model", $modelId);

        return $model;
    }
}