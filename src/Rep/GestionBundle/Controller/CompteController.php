<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Compte;

class CompteController extends Controller {

    public function ajouterAction() {

        $this->create($compte);


        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $compte = $this->findById($id);
        return new Response('<pre>' . $compte . '</pre>');
    }

    public function listAllAction() {
        $allCompte = $this->findAll();
        $reponse = "";
        foreach ($allCompte as $compte) {
            $reponse = $reponse . '<br/>' . $compte;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $compte = $this->findById($id);
        if (NULL != $compte) {
            $persCont = $this->getDoctrine()->getRepository('RepGestionBundle:Personnel');
            $personnel = $persCont->find(2);
            $compte->setPersonnel($personnel);
            $new = $this->update($compte);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Compte non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $compte = $this->findById($id);
        if (NULL != $compte) {
            $this->delete($compte);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Compte non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Compte $compte) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($compte);
        $em->flush();
    }

    public function update(Compte $compte) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($compte);
        $em->flush();
        return $compte;
    }

    public function findById($id) {
        $compte = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Compte')
                ->find($id);
        return $compte;
    }

    public function findAll() {
        $compte = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Compte')
                ->findAll();
        return $compte;
    }

    public function delete(Compte $compte) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($compte);
        $em->flush();
    }

}
