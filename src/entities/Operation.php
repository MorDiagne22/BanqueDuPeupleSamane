<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="operation")
 **/
class Operation
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string", unique=true) **/
    private $numero;
    /** @Column(type="string") **/
    private $dateoperation;
    /** @Column(type="integer") **/
    private $montant;

     /**
     * Many operations have one compte. This is the owning side.
     * @ManyToOne(targetEntity="Compte", inversedBy="operations")
     * @JoinColumn(name="idCompte", referencedColumnName="id")
     */
    private $compte;

    /**
     * Many operations have one typeOperation. This is the owning side.
     * @ManyToOne(targetEntity="TypeOperation", inversedBy="operations")
     * @JoinColumn(name="idTypeOperation", referencedColumnName="id")
     */
    private $typeOperation;
    public function __construct()
    {

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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getDateoperation()
    {
        return $this->dateoperation;
    }

    /**
     * @param mixed $dateoperation
     */
    public function setDateoperation($dateoperation)
    {
        $this->dateoperation = $dateoperation;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * @param mixed $compte
     */
    public function setCompte($compte)
    {
        $this->compte = $compte;
    }

    /**
     * @return mixed
     */
    public function getTypeOperation()
    {
        return $this->typeOperation;
    }

    /**
     * @param mixed $compte
     */
    public function setTypeOperation($typeOperation)
    {
        $this->typeOperation = $typeOperation;
    }
}
?>