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

        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $admin = $this->findById($id);
        return new Response('<pre>' . $admin . '</pre>');
    }

    public function listAllAction() {
        $allAdmin = $this->findAll();
        $reponse = "";
        foreach ($allAdmin as $admin) {
            $reponse = $reponse . '<br/>' . $admin;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $admin = $this->findById($id);
        if (NULL != $admin) {
            $admin->setNom("Le nouveau nom");
            $new = $this->update($admin);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Admin non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $admin = $this->findById($id);
        if (NULL != $admin) {
            $this->delete($admin);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Admin non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Admin $admin) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($admin);
        $em->flush();
    }

    public function update(Admin $admin) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($admin);
        $em->flush();
        return $admin;
    }

    public function findById($id) {
        $admin = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Admin')
                ->find($id);
        return $admin;
    }

    public function findAll() {
        $admin = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Admin')
                ->findAll();
        return $admin;
    }

    public function delete(Admin $admin) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($admin);
        $em->flush();
    }

}
