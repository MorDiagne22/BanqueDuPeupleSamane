<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="typeCompte")
 **/
class TypeCompte
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    
    /**
     * One typeCompte has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="typeComptes")
     */
    private $comptes;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
        
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }


    /**
     * @return ArrayCollection
     */
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * @param ArrayCollection $comptes
     */
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }


}
?>