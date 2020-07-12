<?php
use libs\system\Controller;
use src\model\ProfilRepository;
use src\model\AgenceRepository;
use src\model\CompteRepository;
use src\model\OperationRepository;
use src\model\UserRepository;
class CompteController extends Controller{
    public function gestionCompte(){
        return $this->view->load("accueil/viewCompte");
    }

    public function gestionOperation(){
        $data['succes'] ="";
        $data['erreur'] ="";
        return $this->view->load("operation/retraitDepot",$data);
    }

    public function transaction(){
        if (isset($_POST['valider'])){
            extract($_POST);
            $cpt = new CompteRepository();
            $opera = new OperationRepository();
            $operation = new Operation();
            $typeOpe = new \src\model\TypeOperationRepository();
            $num = $numero;
            $mtt = $montant;
            $trans = $transaction;
            if($trans == 1){
                $result = $cpt->depot($numero,$montant);
                if($result>0){
                    /*
                    echo 'ok1';
                    $operation->setNumero('OP-001');
                    $operation->setDateoperation(date("d-m-Y"));
                    $operation->setMontant($mtt);
                    $operation->setCompte($cpt->getCompteByNumero1($num));
                    $operation->setTypeOperation($typeOpe->getTypeOperById1($trans));
                    $rs = $opera ->addOperation($operation);
                    if ($rs>0){
                        echo "c'est ok";
                    }
                    */
                    $data['succes'] ="Depot effectuer avec succés";
                    $data['erreur'] ="";
                    return $this->view->load("operation/retraitDepot",$data);

                }
            }elseif ($trans==2) {
                $result = $cpt->retrait($numero,$montant);
                if($result>0){
                    $data['erreur'] ="";
                    $data['succes'] ="Retrait effectuer avec succés";
                    return $this->view->load("operation/retraitDepot",$data);
                }
            }else{
                $data['succes'] ="";
                $data['erreur'] ="Veuillez choisir le type de transaction à faire SVP!!!";
                return $this->view->load("operation/retraitDepot",$data);
            }
        }
    }

    public function transactionDepotAjax(){
            $cpt = new CompteRepository();
            $num = $_POST['numero'];
            $mtt = $_POST['montant'];
          $resultat =  $cpt->depot($num,$mtt);
        echo $resultat;
    }

    public function transactionRetraitAjax(){
            $cpt = new CompteRepository();
           // $opera = new OperationRepository();
            //$operation = new Operation();
            //$typeOpe = new \src\model\TypeOperationRepository();
            $num = $_POST['numero'];
            $mtt = $_POST['montant'];
           $resultat = $cpt->retrait($num,$mtt);
            echo $resultat;
    }
}