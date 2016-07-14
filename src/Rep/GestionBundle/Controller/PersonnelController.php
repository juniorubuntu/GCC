<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Personnel;

class PersonnelController extends Controller {

    public function ajouterAction() {

        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $personnel = $this->findById($id);
        return new Response('<pre>' . $personnel . '</pre>');
    }

    public function listAllAction() {
        $allPersonnel = $this->findAll();
        $reponse = "";
        foreach ($allPersonnel as $personnel) {
            $reponse = $reponse . '<br/>' . $personnel;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $personnel = $this->findById($id);
        if (NULL != $personnel) {
            $personnel->setNom("Le nouveau nom");
            $new = $this->update($personnel);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Personnel non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $personnel = $this->findById($id);
        if (NULL != $personnel) {
            $this->delete($personnel);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Personnel non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Personnel $personnel) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($personnel);
        $em->flush();
    }

    public function update(Personnel $personnel) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($personnel);
        $em->flush();
        return $personnel;
    }

    public function findById($id) {
        $personnel = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->find($id);
        return $personnel;
    }

    public function findAll() {
        $personnel = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();
        return $personnel;
    }

    public function delete(Personnel $personnel) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($personnel);
        $em->flush();
    }
}
