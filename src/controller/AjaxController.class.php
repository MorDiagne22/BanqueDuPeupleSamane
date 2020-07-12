<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\model\ProfilRepository;
use src\model\AgenceRepository;
class AjaxController extends Controller{

    public function addUser(){


        $user = new User();
        $personnel = new Personnel();
        $personnelDao = new \src\model\PersonnelRepository();
        $userDao  = new UserRepository();
        $agenceDao = new AgenceRepository();

       // $agence = $agenceDao ->getAgenceB($_POST['agenceU']);
        //$agence = $personnelDao->getAgenceA(1);

        $user->setNom($_POST['nomU']);
        $user->setPrenom($_POST['prenomU']);
        $user->setPrenom($_POST['prenomU']);
        $user->setAdresse($_POST['adresseU']);
        $user->setEmail($_POST['emailU']);
        $user->setLogin($_POST['loginU']);
        $user->setPassword($_POST['passwordU']);
        $user->setTel($_POST['telephoneU']);
        $user->setProfil($userDao->getProfil($_POST['profilU']));

        $lastId = $userDao->insert($user);

        if ($lastId >0){

            $personnel->setSalaire($_POST['salaireU']);
            $personnel->setAgence($agenceDao ->getAgenceB($_POST['agenceU']));
            $personnel->setUser($user);

            $resultat = $personnelDao->insert($personnel);

            echo 1;
        }else{
            echo 0;
        }

    }

}