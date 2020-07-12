<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="region")
 **/
class Region
{
    /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
   
    /** @Column(type="decimal") **/
    private $latitude;
    /** @Column(type="decimal") **/
    private $longitude;
    /**
     * One region has many agence. This is the inverse side.
     * @OneToMany(targetEntity="Agence", mappedBy="regions")
     */
    private $agence;

    public function __construct()
    {
        $this->agence = new ArrayCollection();
       
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
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return ArrayCollection
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * @param ArrayCollection $agence
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;
    }



}
?>