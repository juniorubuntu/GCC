<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Poste;

class PosteController extends Controller {

    function __construct() {
        
    }

    public function ajouterAction() {

        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $poste = $this->findById($id);
        return new Response('<pre>' . $poste . '</pre>');
    }

    public function listAllAction() {
        $allPoste = $this->findAll();
        $reponse = "";
        foreach ($allPoste as $poste) {
            $reponse = $reponse . '<br/>' . $poste;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $poste = $this->findById($id);
        if (NULL != $poste) {
            $catCont = $this->getDoctrine()->getRepository('RepGestionBundle:Categorie');
            $categorie = $catCont->find(2);
            $poste->setCategorie($categorie);
            $new = $this->update($poste);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Poste non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $poste = $this->findById($id);
        if (NULL != $poste) {
            $this->delete($poste);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Poste non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Poste $poste) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($poste);
        $em->flush();
    }

    public function update(Poste $poste) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($poste);
        $em->flush();
        return $poste;
    }

    public function findById($id) {
        $poste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->find($id);
        return $poste;
    }

    public function findByOcupant(\Rep\GestionBundle\Entity\Personnel $personnel) {
        $poste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findOneBy(array('occupant' => $personnel));
        return $poste;
    }

    public function findByDirection(\Rep\GestionBundle\Entity\Direction $direction) {
        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $direction));
        return $listPoste;
    }

    public function linkPosteToOccupant(\Rep\GestionBundle\Entity\Direction $direction) {
        $poste_occupant = array('poste', 'occupant');
        $listPoste = $this->findByDirection($direction);
    }

    public function findAll() {
        $poste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findAll();
        return $poste;
    }

    public function delete(Poste $poste) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($poste);
        $em->flush();
    }

}
