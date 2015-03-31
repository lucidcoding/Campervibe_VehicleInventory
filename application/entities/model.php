<?php 
namespace entities;

require 'application/entities/make.php';
/**
 * @Entity @Table(name="Model")
 **/
class Model
{
    /**
    * @Id
    * @Column(type="guid")
    */
    protected $id;
    
    /**
     * @OneToMany(targetEntity="Vehicle", mappedBy="model")
     * @var Vehicle[]
     **/
    protected $vehicles = null;
    
    /**
     * @ManyToOne(targetEntity="Make", inversedBy="models")
     * @JoinColumn(name="makeId", referencedColumnName="id")
     **/
    protected $make;
        
    /** @Column(type="string") **/
    protected $name;
    
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

    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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