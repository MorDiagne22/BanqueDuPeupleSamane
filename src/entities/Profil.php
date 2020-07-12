<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="profil")
 **/
class Profil
{
        /** @Id @Column(type="integer") @GeneratedValue(strategy="AUTO") **/
        private $id;
        /** @Column(type="string") **/
        private $libelle;
        /**
     * One profil has many utilisateurs. This is the inverse side.
     * @OneToMany(targetEntity="User", mappedBy="profil")
     */
        private $utilisateurs;
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
     * @return mixed
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param mixed $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

}
?>