<?php 
namespace entities;

require 'application/entities/model.php';

/**
 * @Entity @Table(name="Vehicle")
 **/
class Vehicle
{
    /**
    * @Id
    * @Column(type="guid")
    */
    public $id;
    
    /** @Column(type="guid") **/
    //protected $modelId;
     
    /**
     * @ManyToOne(targetEntity="Model", inversedBy="vehicles")
     * @JoinColumn(name="modelId", referencedColumnName="id")
     **/
    public $model;
    
    /** @Column(type="string") **/
    public $name;
    
    /** @Column(type="integer") **/
    public $year;
    
    /** @Column(type="string") **/
    public $description;
       
    /** @Column(type="guid") **/
    public $createdBy;
    
    /** @Column(type="datetime") **/
    public $createdOn;
       
    /** @Column(type="guid") **/
    public $lastModifiedBy;
    
    /** @Column(type="datetime") **/
    public $lastModifiedOn;
    
    public function getId()
    {
        return $this->id;
    }

    public function getModelId()
    {
        return $this->modelId;
    }

    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
    }
    
    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->modelId = $model;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }
    
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }
    
    public function getLastModifiedBy()
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy($lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }
    
    public function getLastModifiedOn()
    {
        return $this->lastModifiedOn;
    }

    public function setLastModifiedOn($lastModifiedOn)
    {
        $this->lastModifiedOn = $lastModifiedOn;
    }
    
    public static function add($name, $model, $year, $description, $createdBy)
    {
        $vehicle = new Vehicle();
        $vehicle->id = str_replace("}", "", str_replace("{", "", \com_create_guid()));
        $vehicle->model = $model;
        $vehicle->name = $name;
        $vehicle->year = $year;
        $vehicle->description = $description;
        $vehicle->createdBy = $createdBy;
        $vehicle->createdOn = new \DateTime();
        //$vehicle->lastModifiedBy;
        $vehicle->lastModifiedOn = new \DateTime();
        return $vehicle;
    }
}
?>