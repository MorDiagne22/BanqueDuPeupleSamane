<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="personnel")
 **/

class Personnel
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string") **/
    private $salaire;
    /**
     * Many utilisateur have one agence. This is the owning side.
     * @ManyToOne(targetEntity="Agence", inversedBy="utilisateurs")
     * @JoinColumn(name="idAgence", referencedColumnName="id")
     */
    private $agence;
    /**
     * @OneToOne(targetEntity=User::class)
     */
    private $user;

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
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * @param mixed $agence
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}
