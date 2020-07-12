<?php
/**
 * Created by PhpStorm.
 * User: SERIGNE MOR DIAGNE
 * Date: 04/03/2020
 * Time: 03:14
 */

namespace src\model;


class TypeOperationRepository
{
    public function getTypeOperById($id){
        return $this->db->getRepository('TypeOperation')->find(array('id' => $id));
    }

    public function getTypeOperById1($id){
        $query = $this->db->createQuery("SELECT c from TypeOperation t where t.id='".$id."'");
        return $query->getResult();
    }
}