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
    private $quotaData = '';
    private $total = 0;

    public function getTreeDir() {
        return $this->treeDir;
    }

    function getQuotaData() {
        return $this->quotaData;
    }

    function setQuotaData($quotaData) {
        $this->quotaData .= $quotaData;
    }

    public function setTreeDir($treeDir) {
        $this->treeDir .= $treeDir;
    }

    function getTotal() {
        return $this->total;
    }

    function setTotal($total) {
        $this->total += $total;
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

        $listCategorie = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->findAll();

        $listOccupant = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();

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
                    'listCategorie' => $listCategorie,
                    'listOccupant' => $listOccupant));
    }

    public function updatePosteAction($id, $idPoste) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $poste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->find($idPoste);

        $listCategorie = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->findAll();

        $listOccupant = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();

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
                    'listCategorie' => $listCategorie,
                    'listOccupant' => $listOccupant
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

    public function addCompteAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $listOccupant = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addCompte.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'listOccupant' => $listOccupant));
    }

    public function updateCompteAction($id) {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $compte = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Compte')
                ->find($id);

        $listOccupant = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addCompte.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'compte' => $compte,
                    'listOccupant' => $listOccupant));
    }

    public function updatePersonnelAction($id) {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $personnel = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->find($id);

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addPersonnel.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'personnel' => $personnel));
    }

    public function listAllPersonnelAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $personnels = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:listPersonnel.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'personnels' => $personnels));
    }

    public function listAllCompteAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $comptes = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Compte')
                ->findAll();

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:listCompte.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'comptes' => $comptes));
    }

    public function deleteCompteAction() {
        
    }

    function exportDirectionDataAction($id) {
        $aDetailler = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $aDetailler));

        $this->buildQuotaData($aDetailler);

        $export = $this->getQuotaData();

        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:exportData.html.twig', array('arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'export' => $export,
                    'total' => $this->getTotal()));
    }

    function buildQuotaData(Direction $direction, $i = 1) {
        
        require_once '/GCC/PHPExcel/Classes/PHPExcel.php';
        
        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $direction));

        foreach ($listPoste as $poste) {
            $this->setQuotaData(
                    '<tr>
                        <td><b>' . $i++ . '</b></td>
                        <td><b>' . $poste->getOccupant() . '</b></td>
                        <td><b>' . $poste->getOccupant()->getMatricule() . '</b></td>                                   
                        <td><b>' . $poste->getOccupant()->getNumTel() . '</b></td>                                   
                        <td style="color: blue"><b>' . $poste->getCategorie()->getQuota() . '</b></td>
                        <td><b>' . $poste->getOccupant()->getDateRecru()->format('d-m-Y') . '</b></td>
                        <td><b>' . $poste->getOccupant()->getRefDecision() . '</b></td>
                        <td>' . $poste->getObservation() . '</td>
                        <td><b>' . $direction . '</b></td>
                    </tr>');
            $this->setTotal($poste->getCategorie()->getQuota());
        }
        $allSousDir = $this->listSousDir($direction);
        foreach ($allSousDir as $sousDir) {
            $this->buildQuotaData($sousDir, $i);
        }
    }

}