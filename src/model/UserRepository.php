<?php

namespace src\model;
use libs\system\Model;

class UserRepository extends Model
{
        public function __construct()
        {
            parent::__construct();
        }

        public function verifierConnexion($email, $password){
            $queryBuilder = $this->db->createQueryBuilder();

            $queryBuilder->select('u')
                ->from(\User::class, 'u')
                ->where('u.email= :email')
                ->andWhere('u.password = :password ')
                ->setParameter('email', $email)
                ->setParameter('password', $password);
            $query = $queryBuilder->getQuery();
            foreach ($query->getResult() as $user){
                return $user;
            }
        }

        public function insert($user)
        {
            $this->db->persist($user);
            $this->db->flush();

            return $user->getId();
        }

        public function getProfil($id)
        {
            return $this->db->getRepository("Profil")->find(array("id"=>$id));
        }

        public function getAllUser()
        {
            return $this->db->getRepository("User")->findAll();
        }

        public function fflush(){
            $this ->db->flush();
        }


}