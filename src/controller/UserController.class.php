<?php
use libs\system\Controller;
use src\model\UserRepository;
use src\model\ProfilRepository;
use  src\model\AgenceRepository;
use src\model\PersonnelRepository;
class UserController extends Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function connexion(){
        if (isset($_POST['connexion'])){
            extract($_POST);
            $userDb = new UserRepository();
            $user  = $userDb->verifierConnexion($email, $password);
            if($user != null){
                $profilDb = new ProfilRepository();
                $profil= $profilDb->getProfil($user->getId());
                session_start();
                $_SESSION['idAdmin'] = $user->getId();
                $_SESSION['nom'] = $user->getNom();
                $_SESSION['prenom'] = $user->getPrenom();
                $_SESSION['profil'] = $profil->getLibelle();
                return $this->view->load("accueil/index");
            }else{
                return $this->view->load("welcome/index");
            }
        }
    }

    public function insertUser()
    {
            $personnelDb = new PersonnelRepository();
            $userDb = new UserRepository();
            $agenceDb = new AgenceRepository();
            $profilDb = new ProfilRepository();
            $agencesUser = new Agence();
            if(isset($_POST["valider"])){
                extract($_POST);
                //$ag = $personnelDb->getAgence($agence);
                //$ag = $agenceDb->getAgence($agence);

                //var_dump($ag);
                $user = new User();
                $personnel = new Personnel();
                $user->setEmail($email);
                $user->setNom($nom);
                $user->setPrenom($prenom);
                $user->setAdresse($adresse);
                $user->setTel($telephone); 
                $user->setLogin($login);
                $user->setPassword($password);
                $user->setProfil($userDb->getProfil($profil));
                
                $insertUser = $userDb->insert($user);
                // echo $insertUser;
                // die();
                if($insertUser>0)
                {
                    /*

                   $ag = $agenceDb->getAgenceB($agence);
                   var_dump($ag);
                    $personnel->setAgence($agenceDb->getAgenceB($agence));
                    $personnel->setUser($user);
                    $personnel->setSalaire($salaire);
                    //$personnelDb->insert($personnel);
                    echo "ok";
                */
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
                    $data['succes']= "Utilisateur ajouter avec succés";
                    return $this->view->load("accueil/viewAdmin",$data);
                }

                return $this->view->load("accueil/viewAdmin");
            }
            
            // $ville = new Ville();
            // $ville->setNom($nom);
            // $ville->setLatitude($latitude);
            // $ville->setLongitude($longitude);
            // $ville->setPays($villeDb->getPays($idPays));

            
            // $villeDb->insert($ville);

            // return $this->liste();
        }

    public function deconnexion(){
        session_unset();
        $_SESSION = array();
        return $this ->view-> load("welcome/index");
    }

}