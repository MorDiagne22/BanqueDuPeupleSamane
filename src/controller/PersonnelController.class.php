<?php
use libs\system\Controller;
use src\model\ProfilRepository;
use src\model\AgenceRepository;
use src\model\CompteRepository;
use src\model\OperationRepository;
use src\model\UserRepository;
class PersonnelController extends Controller{

    public function gestionPersonnel(){
        $profilDb = new ProfilRepository();
        $agenceDb = new AgenceRepository();
        $userDb = new UserRepository();
        session_start();
        if($_SESSION['profil'] == "admin"){
            $profils = $profilDb->getAllProfil();
            $data["listeProfil"] = $profils;
            $agences = $agenceDb->getAllAgence();
            $data["listeAgence"] = $agences;
            // foreach($data["listeAgence"] as $Agence)
            // {
            //     echo $Agence->getNom();
            // }
            // var_dump($agences);
            // die();
            $users = $userDb->getAllUser();
            //var_dump($users);die();
            $data['users']=$users;
            $data['succes']="";
            return $this->view->load("accueil/viewAdmin",$data);
        }else{
            return $this->view->load("accueil/index");
        }
    }

  public function insert(){
      if (isset($_POST['valider'])){
          extract($_POST);
          //var_dump($_POST);
          $perso = new Personnel();
          //$perso->s

      }
  }

}