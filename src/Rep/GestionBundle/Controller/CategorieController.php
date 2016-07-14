<?php

/**
 * Description of AdminController
 *
 * @author atbr
 */

namespace Rep\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Rep\GestionBundle\Entity\Categorie;

class CategorieController extends Controller {

    public function ajouterAction() {

        return new Response('<h1>Good!!!</h1>');
    }

    public function listAction($id) {
        $categorie = $this->findById($id);
        return new Response('<pre>' . $categorie . '</pre>');
    }

    public function listAllAction() {
        $allCategorie = $this->findAll();
        $reponse = "";
        foreach ($allCategorie as $categorie) {
            $reponse = $reponse . '<br/>' . $categorie;
        }
        return new Response($reponse);
    }

    public function updateAction($id) {
        $categorie = $this->findById($id);
        if (NULL != $categorie) {
            $categorie->setNomCategorie("Le nouveau");
            $new = $this->update($categorie);
            return new Response('<h1>Operation reussi!!! ' . $new . ' </h1>');
        }
        return new Response('<h1 style="color=red;">Categorie non existant!!!</h1>');
    }

    public function deleteAction($id) {
        $categorie = $this->findById($id);
        if (NULL != $categorie) {
            $this->delete($categorie);
            return new Response('<h1>Operation reussi!!!</h1>');
        }
        return new Response('<h1 style="color=red;">Categorie non existant!!!</h1>');
    }

    //
    //
    //
    // Mes fonctions 

    public function create(Categorie $categorie) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($categorie);
        $em->flush();
    }

    public function update(Categorie $categorie) {
        $em = $this->container->get('doctrine')->getManager();
        $em->persist($categorie);
        $em->flush();
        return $categorie;
    }

    public function findById($id) {
        $categorie = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->find($id);
        return $categorie;
    }

    public function findAll() {
        $categorie = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->findAll();
        return $categorie;
    }

    public function delete(Categorie $categorie) {
        $em = $this->container->get('doctrine')->getManager();
        $em->remove($categorie);
        $em->flush();
    }

}
