<?php


use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;
 /**   
    *@Entity @Table(name="users")
**/
class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /**   @Column(type="string") **/
    private $nom;
    /**   @Column(type="string") **/
    private $prenom;
     /**   @Column(type="string") **/
    private $email;
     /**   @Column(type="string") **/
    private $password;

    /**
     * Many Users have Many Roles.
     * @ManyToMany(targetEntity="Roles", inversedBy="users")
     * @JoinTable(name="users_roles")
     */
    private $roles;
    /**
     * One role has many user. This is the inverse side.
     * @OneToMany(targetEntity="Lieu", mappedBy="user")
     */
    private $lieux;

    public function __construct()
    {
        $this->lieux = new ArrayCollection();
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

    public function getPrenom()
    {
        return $this->prenom;
    
    }
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;
    
    }

    public function getEmail()
    {
        return $this->email;
    
    }
    public function setEmail($email)
    {
        $this->id= $email;
    
    }

    public function getPassword()
    {
        return $this->password;
    
    }
    public function setPassword($password)
    {
        $this->password= $password;
    
    }
    public function getUser()
    {
        return $this->user;
    
    }
    public function setUser($user)
    {
        $this->user= $user;
    
    }

    public function getRoles()
    {
        return $this->roles;
    
    }
    public function setRoles($roles)
    {
        $this->roles= $roles;
    
    }

    public function getLieuxx()
    {
        return $this->lieux;
    
    }
    public function setLieux($lieux)
    {
        $this->lieux= $lieux;
    
    }

}
?>