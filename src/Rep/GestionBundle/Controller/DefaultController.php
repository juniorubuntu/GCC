<?php

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RepGestionBundle:Default:index.html.twig', array('name' => $name));
    }
}
