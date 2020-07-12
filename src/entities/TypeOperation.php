<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="typeOperation")
 **/
class TypeOperation
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    
    /**
     * One typeCompte has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Operation", mappedBy="typeOperation")
     */
    private $operations;

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
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param ArrayCollection $comptes
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }
}
    
?>