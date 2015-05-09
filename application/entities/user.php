<?php 
namespace entities;

/**
 * @Entity @Table(name="User")
 **/
class User
{
    /**
    * @Id
    * @Column(type="guid")
    */
    protected $id;
    
    /** @Column(type="string") **/
    protected $username;
    
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
?>