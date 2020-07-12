<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="agence")
 **/
class Agence
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO")**/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /**
    * One agence has many utilisateurs. This is the inverse side.
    * @OneToMany(targetEntity="Personnel", mappedBy="agence")
    */
    private $utilisateurs;

    /**
    * Many agence have one region. This is the owning side.
    * @ManyToOne(targetEntity="Region", inversedBy="agence")
    * @JoinColumn(name="idRegion", referencedColumnName="id")
    */
    private $regions;    

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return ArrayCollection
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param ArrayCollection $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return mixed
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @param mixed $regions
     */
    public function setRegions($regions)
    {
        $this->regions = $regions;
    }


}
?>