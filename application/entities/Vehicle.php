<?php 
namespace entities;

require 'application/entities/model.php';
require 'application/entities/user.php';

/**
 * @Entity @Table(name="Vehicle")
 **/
class Vehicle
{
    /**
    * @Id
    * @Column(type="guid")
    */
    protected $id;
    
    /** @Column(type="guid") **/
    //protected $modelId;
     
    /**
     * @ManyToOne(targetEntity="Model", inversedBy="vehicles")
     * @JoinColumn(name="modelId", referencedColumnName="id")
     **/
    protected $model;
    
    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $year;
    
    /** @Column(type="string") **/
    protected $description;
       
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="createdBy", referencedColumnName="id")
     **/
    protected $createdBy;
    
    /** @Column(type="datetime") **/
    protected $createdOn;
       
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="lastModifiedBy", referencedColumnName="id")
     **/
    protected $lastModifiedBy;
    
    /** @Column(type="datetime") **/
    protected $lastModifiedOn;
    
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