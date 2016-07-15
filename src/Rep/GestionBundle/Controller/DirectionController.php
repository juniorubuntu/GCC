<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Direction;

class DirectionController extends Controller {

    public function ajouterAction() {

        $direction = new Direction();
        $direction->setNomDir("Direction Maintenance");
        $direction->setObservation("La direction des meilleur");
        $this->create($direction);

        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $direction = $this->findById($id);
        return new Response('<pre>' . $direction . '</pre>');
    }

    public function listAllAction() {
        $allDirection = $this->findAll();
        $reponse = "";
        foreach ($allDirection as $direction) {
            $reponse = $reponse . '<br/>' . $direction;
        }
        return new Response($reponse);
    }

    public function listSousDirAction($id) {
        $direction = $this->findById($id);
        $listSousDir = $this->listSousDir($direction);
        $reponse = '';
        foreach ($listSousDir as $SousDir) {
            $reponse = $reponse . '<br/>' . $SousDir;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $direction = $this->findById($id);
        if (NULL != $direction) {
            $direction->setNomDir("DRIMS");
            $new = $this->update($direction);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Direction non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $direction = $this->findById($id);
        if (NULL != $direction) {
            $this->delete($direction);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Direction non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Direction $direction) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($direction);
        $em->flush();
    }

    public function update(Direction $direction) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($direction);
        $em->flush();
        return $direction;
    }

    public function findById($id) {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->find($id);
        return $direction;
    }

    public function findAll() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findAll();
        return $direction;
    }

    public function delete(Direction $direction) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($direction);
        $em->flush();
    }

    public function listSousDir(Direction $direction) {
        $sousDir = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findBy(array('directionPere' => $direction->getId()));
        return $sousDir;
    }

}
