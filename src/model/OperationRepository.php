<?php
/**
 * Created by PhpStorm.
 * User: SERIGNE MOR DIAGNE
 * Date: 04/03/2020
 * Time: 03:03
 */

namespace src\model;


class OperationRepository
{
    public function addOperation($operation){
        $this->db->persist($operation);
        $this->db->flush();

        return $operation->getId();
    }
}