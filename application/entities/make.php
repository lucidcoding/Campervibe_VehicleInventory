<?php 
namespace entities;
/**
 * @Entity @Table(name="Make")
 **/
class Make
{
    /**
    * @Id
    * @Column(type="guid")
    */
    protected $id;
    
    /**
     * @OneToMany(targetEntity="Model", mappedBy="make")
     * @var Model[]
     **/
    protected $models = null;
    
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