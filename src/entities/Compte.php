<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="compte")
 **/
class Compte
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string", unique=true) **/
    private $numero;
    /** @Column(type="string") **/
    private $dateCreation;
    /** @Column(type="integer") **/
    private $solde;
    /** @Column(type="integer") **/
    private $montantInitial;
    /** @Column(type="integer") **/
    private $emprunt;
    /** @Column(type="string") **/
    private $etat;
    
    /**
    * Many comptes have one utilisateur. This is the owning side.
    * @ManyToOne(targetEntity="User", inversedBy="comptes")
    * @JoinColumn(name="idGestCompte", referencedColumnName="id")
    */
    private $utilisateur;
    /**
    * Many comptes have one client. This is the owning side.
    * @ManyToOne(targetEntity="Client", inversedBy="comptes")
    * @JoinColumn(name="idClient", referencedColumnName="id")
    */
    private $client;

    /**
     * Many comptes have one typeCompte. This is the owning side.
     * @ManyToOne(targetEntity="TypeCompte", inversedBy="comptes")
     * @JoinColumn(name="idTypeCompte", referencedColumnName="id")
     */
    private $typeComptes;

    /**
     * One compte has many operations. This is the inverse side.
     * @OneToMany(targetEntity="Operation", mappedBy="compte")
     */
    private $operations;

    public function __construct()
    {
        $this->operations = new ArrayCollection();
        
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
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $utilisateur
     */
    public function settClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getTypeComptes()
    {
        return $this->typeComptes;
    }

    /**
     * @param mixed $typeComptes
     */
    public function setTypeComptes($typeComptes)
    {
        $this->typeComptes = $typeComptes;
    }

    /**
     * @return mixed
     */
    public function getMontantInital()
    {
        return $this->montantInitial;
    }

    /**
     * @param mixed $typeComptes
     */
    public function setMontantInital($montantInitial)
    {
        $this->montantInitial = $montantInitial;
    }

    /**
     * @return mixed
     */
    public function getEmprunt()
    {
        return $this->emprunt;
    }

    /**
     * @param mixed $typeComptes
     */
    public function setEmprunt($emprunt)
    {
        $this->emprunt = $emprunt;
    }

    /**
     * @return ArrayCollection
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * @param ArrayCollection $operations
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }


}
?>