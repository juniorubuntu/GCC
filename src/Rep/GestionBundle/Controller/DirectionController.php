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
use Rep\GestionBundle\Entity\Poste;
use Symfony\Component\Form\FormBuilder;
use Rep\GestionBundle\Form\Type;

class DirectionController extends Controller {

    private $treeDir = '';

    public function getTreeDir() {
        return $this->treeDir;
    }

    public function setTreeDir($treeDir) {
        $this->treeDir .= $treeDir;
    }

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

    public function builTreeAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:accueil.html.twig', array('arbreDirection' => $this->getTreeDir()));
    }

    public function detailAction($id) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $sousDir = $this->listSousDir($aDetailler);

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:detail.html.twig', array('arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir));
    }

    public function addPosteAction($id) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $sousDir = $this->listSousDir($aDetailler);

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addPoste.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir));
    }

    public function updatePosteAction($id, $idPoste) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $poste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->find($idPoste);

        $sousDir = $this->listSousDir($aDetailler);

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addPoste.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir,
                    'posted' => $poste,
        ));
    }

    public function addPersonnelAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addPersonnel.html.twig', array(
                    'arbreDirection' => $this->getTreeDir()));
    }

    public function addCategorieAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addCategorie.html.twig', array(
                    'arbreDirection' => $this->getTreeDir()));
    }

    /*
      public function addPosteAction($id) {
      $aDetailler = $this->findById($id);

      $listPoste = $this->getDoctrine()
      ->getRepository('RepGestionBundle:Poste')
      ->findBy(array('direction' => $aDetailler));

      $sousDir = $this->listSousDir($aDetailler);
      $direction = $this->getDoctrine()
      ->getRepository('RepGestionBundle:Direction')
      ->findOneBy(array('directionPere' => NULL));
      $this->generate_tree_list($direction);

      // creation du formulaire

      $poste = new Poste();
      $poste->setDirection($aDetailler);

      $formBuilder = $this->createFormBuilder($poste);
      $formBuilder
      ->add('nomPoste', 'text')
      ->add('categorie', new \Rep\GestionBundle\Form\Type\CategorieType())
      ->add('observation', 'textarea');

      $form = $formBuilder->getForm();


      $request = $this->get('request');

      if ($request->getMethod() == 'POST') {
      $form->bind($request);
      if ($form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($poste);
      $em->flush();
      return $this->render('RepGestionBundle:Rep:detail.html.twig', array('arbreDirection' => $this->getTreeDir(),
      'aDetailler' => $aDetailler,
      'listPoste' => $listPoste,
      'listSousDir' => $sousDir));
      }
      }
      return $this->render('RepGestionBundle::test.html.twig', array('arbreDirection' => $this->getTreeDir(),
      'aDetailler' => $aDetailler,
      'listPoste' => $listPoste,
      'listSousDir' => $sousDir,
      'form' => $form->createView()));
      } */

    public function addBrancheAction($id) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $sousDir = $this->listSousDir($aDetailler);

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addBranche.html.twig', array('arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir));
    }

    public function updateBrancheAction($id, $idDir) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $branche = new Direction();
        $branche = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->find($idDir);
        

        $sousDir = $this->listSousDir($aDetailler);

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addBranche.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir,
                    'branched' => $branche
        ));
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

    public function listDirPosteAndOccupant(Direction $direction) {
        
    }

    public function generate_tree_list($direction, $parent = NULL) {
        $allSousDir = $this->listSousDir($direction);
        $nbre = count($allSousDir);
        if ($nbre >= 1) {
            $this->setTreeDir('<ul style=" color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14);" id="id_' . $direction->getId() . '" class= "expd pere_' . $parent . '">'
                    . '<li type="button" style=" list-style: none; margin-left: -48px;">'
                    . '<span onclick="expanNode(' . $direction->getId() . ')" class="list_' . $direction->getId() . ' glyphicon glyphicon-minus-sign" style="margin-left: 25px;"> </span>'
                    . '<a href="http://localhost/GCC/web/app_dev.php/GCC/direction/detail/' . $direction->getId() . '">'
                    . '<b><nav style= "border: solid 1px white; border-radius: 5px; display: inline-table; padding: 2px; margin-top: 2px; cursor: pointer; color:antiquewhite;">' . $direction . ''
                    . '</b></nav>'
                    . ''
                    . '</li>'
                    . '</a>');
        } else {
            $this->setTreeDir('<ul style="color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14);" id="id_' . $direction->getId() . '" class= "expd pere_' . $parent . '">'
                    . '<li type="button" style="list-style: none; margin-left: -48px;">'
                    . '<span onclick="expanNode(' . $direction->getId() . ')" class="list_' . $direction->getId() . ' glyphicon glyphicon-triangle-right" style="margin-left: 25px;"> </span>'
                    . '<a href="http://localhost/GCC/web/app_dev.php/GCC/direction/detail/' . $direction->getId() . '">'
                    . '<b><nav style= "border: solid 1px white; border-radius: 5px; display: inline-table; padding: 2px; margin-top: 2px; cursor: pointer; color: #100101;">' . $direction . ''
                    . '</b></nav>'
                    . ''
                    . '</li>'
                    . '</a>');
        }
        $sousDir = new Direction();
        foreach ($allSousDir as $sousDir) {
            $this->generate_tree_list($sousDir, $direction->getId());
        }
        $this->setTreeDir('</ul>');
    }

}
