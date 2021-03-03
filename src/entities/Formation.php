<?php
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Annotation as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\GeneratedValue;

/**   
    *@Entity @Table(name="formations")
**/

class Formation
{  

    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $date;
    /**   @Column(type="string") **/
    private $duree;

    /**
     * Many formations have one Lieu. This is the owning side.
     * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @JoinColumn(name="lieu_id", referencedColumnName="id")
     */
    private $lieu;

    public function __construct()
    {
        
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

    public function getDate()
    {
        return $this->date;
    
    }
    public function setDate($date)
    {
        $this->date= $date;
    
    }

    public function getDuree()
    {
        return $this->duree;
    
    }
    public function setDuree($duree)
    {
        $this->id= $duree;
    
    }

    public function getLieu()
    {
        return $this->lieu;
    
    }
    public function setLieu($lieu)
    {
        $this->lieu= $lieu;
    
    }

}
