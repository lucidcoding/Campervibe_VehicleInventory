<?php 
namespace entities;
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
    protected $modelId;
    
    /** @Column(type="string") **/
    protected $name;
    
    /** @Column(type="integer") **/
    protected $year;
    
    /** @Column(type="string") **/
    protected $description;
    
    /** @Column(type="guid") **/
    protected $createdBy;
    
    /** @Column(type="datetime") **/
    protected $createdOn;
    
    /** @Column(type="guid") **/
    protected $lastModifiedBy;
    
    /** @Column(type="datetime") **/
    protected $lastModifiedOn;
    
    public function getId()
    {
        return $this->id;
    }

//    public function setId($id)
//    {
//        $this->id = $id;
//    }
    
    public function getModelId()
    {
        return $this->modelId;
    }

    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
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
}
?>