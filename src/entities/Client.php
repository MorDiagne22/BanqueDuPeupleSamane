<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="client")
 **/

class Client
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO")**/
    private $id;
    /** @Column(type="string") **/
    private $profession;
    /**
     * Many utilisateur have one employeur. This is the owning side.
     * @ManyToOne(targetEntity="Employeur", inversedBy="clients")
     * @JoinColumn(name="idEmployeur", referencedColumnName="id")
     */
    private $employeur;
    /**
    * One client has many comptes. This is the inverse side.
    * @OneToMany(targetEntity="Compte", mappedBy="client")
    */
    private $comptes;
    /**
     * @OneToOne(targetEntity=User::class)
     */
    private $user;

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
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getEmployeur()
    {
        return $this->employeur;
    }

    /**
     * @param mixed $employeur
     */
    public function setEmployeur($employeur)
    {
        $this->employeur = $employeur;
    }

    /**
     * @return mixed
     */
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * @param mixed $comptes
     */
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
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