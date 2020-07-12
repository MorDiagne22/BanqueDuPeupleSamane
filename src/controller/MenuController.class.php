<?php

use libs\system\Controller;
    class MenuController extends Controller{

        public function accueil(){
            return $this->view->load("accueil/index");
        }

    }