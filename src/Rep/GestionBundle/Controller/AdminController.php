<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Admin;

class AdminController extends Controller {

    public function ajouterAction() {

        $admin = new Admin();
        $admin->setNom("Atemgoua");
        $admin->setPrenom("Brumel");
        $admin->setEmail("juniorubuntu@gmail.com");
        $admin->setMatricule("ECI");
        $admin->setRefDecision("Décret 08/56/2016");
        $admin->setNumTel("242 87 42 57");
        $admin->setCodeSecret("Hello voici mon code secret");
        $this->create($admin);
        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {

        $admin = new Admin();
        $admin = $this->findById($id);
        return $this->render('RepGestionBundle:Default:index.html.twig', array('name' => $admin->getNom())); //('<pre>' . print_r($admin) . '</pre>');
    }

    public function create(Admin $admin) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($admin);
        $em->flush();
    }

    public function update(Admin $admin) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($admin);
        $em->flush();
    }

    public function findById($id) {
        $admin = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->find($id);
        return $repository;
    }

    public function findAll() {
        $em = $this->container->get('doctrine')->getManager();
        $repository = $em->getRepository('RepGestionBundle:Admin');
        $repository->findAll();
        return $repository;
    }

}
