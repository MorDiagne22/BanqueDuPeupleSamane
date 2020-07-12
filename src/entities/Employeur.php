<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="employeur")
 **/

class Employeur
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO")**/
    private $id;
    /** @Column(type="string") **/
    private $raisonSocial;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(type="string") **/
    private $nomEmployeur;
    /** @Column(type="string") **/
    private $numeroIdentification;
    /**
     * One employeur has many utilisateurs. This is the inverse side.
     * @OneToMany(targetEntity="Client", mappedBy="employeur")
     */
    private $clients;
    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
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
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * @param mixed $raisonSocial
     */
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getNomEmployeur()
    {
        return $this->nomEmployeur;
    }

    /**
     * @param mixed $nomEmployeur
     */
    public function setNomEmployeur($nomEmployeur)
    {
        $this->nomEmployeur = $nomEmployeur;
    }

    /**
     * @return mixed
     */
    public function getNumeroIdentification()
    {
        return $this->numeroIdentification;
    }

    /**
     * @param mixed $numeroIdentification
     */
    public function setNumeroIdentification($numeroIdentification)
    {
        $this->numeroIdentification = $numeroIdentification;
    }

    /**
     * @return ArrayCollection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param ArrayCollection $utilisateurs
     */
    public function setClients($clients)
    {
        $this->clients = $clients;
    }

}