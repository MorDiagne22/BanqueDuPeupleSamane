<?php
/**
 * Created by PhpStorm.
 * User: SERIGNE MOR DIAGNE
 * Date: 04/03/2020
 * Time: 02:14
 */

namespace src\model;


use libs\system\Model;

class CompteRepository extends Model
{
    public function depot($numero, $montant){
    $query = $this->db->createQuery("update Compte c set c.solde= c.solde + '".$montant."' where c.numero='".$numero."'");
        $resultat = $query->execute();
        if($resultat>0){
            return 1;
        }else{
            return null;
        }
    }

    public function retrait($numero, $montant){
    $query = $this->db->createQuery("update Compte c set c.solde= c.solde - '".$montant."' where c.numero='".$numero."'");
    $resultat = $query->execute();
    if($resultat>0){
        return 1;
    }else{
        return null;
    }
    }

    public function getCompteByNumero($numero){
        return $this->db->getRepository('Compte')->find(array('numero' => $numero));
    }

    public function getCompteByNumero1($numero){
        $query = $this->db->createQuery("SELECT c from Compte c where c.numero='".$numero."'");
        return $query->getResult();
    }
}