<?php
namespace src\model;
use libs\system\Model;

Class PersonnelRepository extends Model
{
        public function insert($personnel)
        {
            $this->db->persist($personnel);
            $this->db->flush();

            return $personnel->getId();
        }

        public function getAgence($id)
        {
            return $this->db->getRepository("Agence")->find(array('id' => $id));
        }

        public function getAgenceA($id){
            $queryBuilder = $this ->db ->createQueryBuilder();
            $queryBuilder->select('a')
                ->from(\Agence::class, 'a')
                ->where('a.id= :id')
                ->setParameter('id', $id);

            $query = $queryBuilder->getQuery();
            foreach ($query->getOneOrNullResult() as $client){
                return $client;
            }

        }

}
?>