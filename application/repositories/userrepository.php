<?php
namespace repositories;

class UserRepository
{
    public function getById($userId)
    {
        require "application/config/doctrineconfig.php";
        
        $model = $entityManager
                ->find(":User", $userId);

        return $model;
    }
}