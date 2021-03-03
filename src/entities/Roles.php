<?php
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;

/**   
   *@Entity @Table(name="roles")
**/

class Roles
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
     /**   @Column(type="string") **/
    private $nom;
    /**
     * Many Roles have Many Users.
     * @ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    

    public function __construct()
    {
        $this->roles = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    
    }
    public function setId($id)
    {
        $this->id= $id;
    
    }

    public function getNom()
    {
        return $this->nom;
    
    }
    public function setNom($nom)
    {
        $this->nom= $nom;
    
    }

    public function getUsers()
    {
        return $this->users;
    
    }
    public function setUsers($users)
    {
        $this->users= $users;
    
    }

}
?>