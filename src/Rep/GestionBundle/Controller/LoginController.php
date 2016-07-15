<?php

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller {

    public function indexAction() {
        return $this->render('RepGestionBundle:Rep:login.html.twig');
    }

}
