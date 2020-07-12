<?php

namespace src\model;
use libs\system\Model;

class AgenceRepository extends Model
{

    public function getAllAgence(){
        return $this->db->createQuery("SELECT a.id, a.nom FROM Agence a")->getResult();
    }

    public function getAgenceA($id){
        $queryBuilder = $this ->db ->createQueryBuilder();
        $queryBuilder->select('a')
            ->from(\Agence::class, 'a')
            ->where('a.id= ?1')
            ->setParameter(1, $id);
        $query = $queryBuilder->getQuery();
        foreach ($query->getResult() as $agence){
            return $agence;
        }
    }

    public function getAgence($id)
    {
        return $this->db->getRepository("Agence")->find(array('id' => $id));
    }

    public function getAgenceB($id){
        $this->db->clear();

        return $this->db->createQuery("SELECT a FROM agence a WHERE a.id='".$id."'")->getSingleResult();
    }

    public function getAgenceC($id){
        return $this ->db->find('Agence',1);
    }
}