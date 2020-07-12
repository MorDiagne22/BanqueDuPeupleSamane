<?php

namespace src\model;
use libs\system\Model;

class ProfilRepository extends Model
{
    public function getProfil($id){
        $queryBuilder = $this->db->createQueryBuilder();

        $queryBuilder->select('u')
            ->from(\Profil::class, 'u')
            ->where('u.id= :id')
            ->setParameter('id', $id);
        $query = $queryBuilder->getQuery();
        foreach ($query->getResult() as $profil){
            return $profil;
        }
    }

    public function getAllProfil(){
        return $this->db->getRepository("Profil")->findAll();
    }
}