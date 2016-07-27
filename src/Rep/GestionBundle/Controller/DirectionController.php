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
use Rep\GestionBundle\Entity\Personnel;
use Rep\GestionBundle\Entity\Categorie;
use Symfony\Component\Form\FormBuilder;
use Rep\GestionBundle\Form\Type;
use Rep\GestionBundle\Entity\ExcelExport;

class DirectionController extends Controller {

    private $treeDir = '';
    private $quotaData = '';
    private $total = 0;
    private $treeDirBranche = '';

    function getTreeDirBranche() {
        return $this->treeDirBranche;
    }

    function setTreeDirBranche($treeDirBranche) {
        $this->treeDirBranche .= $treeDirBranche;
    }

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
        $this->generate_tree_list_branche($direction);
        return $this->render('RepGestionBundle:Rep:detail.html.twig', array('arbreDirection' => $this->getTreeDir(),
                    'aDetailler' => $aDetailler,
                    'listPoste' => $listPoste,
                    'listSousDir' => $sousDir,
                    'arbreDirectionBranche' => $this->getTreeDirBranche()));
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

    public function savePosteAction() {

        $em = $this->getDoctrine()->getManager();

        $direction = $em->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $this->generate_tree_list($direction);

        $direction = $em->getRepository('RepGestionBundle:Direction')
                ->find($_POST['DirId']);

        $occupant = $em->getRepository('RepGestionBundle:Personnel')
                ->find($_POST['matP']);

        $categorie = $em->getRepository('RepGestionBundle:Categorie')
                ->find($_POST['prenP']);

        $poste = new Poste();

        if (isset($_POST['idP']) && !empty($_POST['idP'])) {
            $poste = $em->getRepository('RepGestionBundle:Poste')
                    ->find($_POST['idP']);
        }

        $poste->setNomPoste($_POST['nomP']);
        $poste->setOccupant($occupant);
        $poste->setCategorie($categorie);
        $poste->setObservation($_POST['observ']);
        $poste->setDirection($direction);

        if (!isset($_POST['nomP']) || !isset($_POST['prenP']) || !isset($_POST['matP']) || empty($_POST['nomP']) || empty($_POST['prenP']) || empty($_POST['matP'])) {

            $listPoste = $this->getDoctrine()
                    ->getRepository('RepGestionBundle:Poste')
                    ->findBy(array('direction' => $direction));

            $listSousDir = $this->getDoctrine()
                    ->getRepository('RepGestionBundle:Direction')
                    ->findBy(array('directionPere' => $direction));

            $listOccupant = $this->getDoctrine()
                    ->getRepository('RepGestionBundle:Personnel')
                    ->findAll();

            $listCategorie = $this->getDoctrine()
                    ->getRepository('RepGestionBundle:Categorie')
                    ->findAll();

            return $this->render('RepGestionBundle:Rep:addPoste.html.twig', array(
                        'error' => 1,
                        'posted' => $poste,
                        'aDetailler' => $direction,
                        'arbreDirection' => $this->getTreeDir(),
                        'listPoste' => $listPoste,
                        'listCategorie' => $listCategorie,
                        'listOccupant' => $listOccupant,
                        'listSousDir' => $listSousDir));
        }
        if (!isset($_POST['idP'])) {
            $em->persist($poste);
        }
        $em->flush();

        return $this->redirect($this->generateUrl('list_detail_direction', array(
                            'id' => $_POST['DirId']
        )));
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

    public function savePersonnelAction() {

        $em = $this->getDoctrine()->getManager();

        $direction = $em->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $this->generate_tree_list($direction);

        $personnel = new Personnel();

        if (isset($_POST['idP'])) {
            $personnel = $em->getRepository('RepGestionBundle:Personnel')
                    ->find($_POST['idP']);
        }
        $personnel->setNom($_POST['nomP']);
        $personnel->setPrenom($_POST['prenP']);
        $personnel->setMatricule($_POST['matP']);
        $personnel->setNumTel($_POST['telP']);
        $personnel->setRefDecision($_POST['deciP']);
        $personnel->setEmail($_POST['emailP']);
        $personnel->setDateRecru(new \DateTime($_POST['dateP']));

        if (empty($_POST['nomP']) || empty($_POST['prenP']) || empty($_POST['matP']) || empty($_POST['telP']) || empty($_POST['deciP']) || empty($_POST['emailP'])) {

            return $this->render('RepGestionBundle:Rep:addPersonnel.html.twig', array(
                        'error' => 1,
                        'personnel' => $personnel,
                        'arbreDirection' => $this->getTreeDir()));
        }
        if (!isset($_POST['idP'])) {
            $em->persist($personnel);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('list_all_personnel'));
    }

    public function addCategorieAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));
        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addCategorie.html.twig', array(
                    'arbreDirection' => $this->getTreeDir()));
    }

    public function saveCategorieAction() {

        $em = $this->getDoctrine()->getManager();

        $direction = $em->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $this->generate_tree_list($direction);

        $categorie = new Categorie();

        if (isset($_POST['idC'])) {
            $categorie = $em->getRepository('RepGestionBundle:Categorie')
                    ->find($_POST['idC']);
        }
        $categorie->setNomCategorie($_POST['nomP']);
        $categorie->setQuota($_POST['prenP']);

        if (empty($_POST['nomP']) || empty($_POST['prenP'])) {
            return $this->render('RepGestionBundle:Rep:addCategorie.html.twig', array(
                        'error' => 1,
                        'categorie' => $categorie,
                        'arbreDirection' => $this->getTreeDir()));
        }
        if (!isset($_POST['idC'])) {
            $em->persist($categorie);
        }
        $em->flush();
        return $this->redirect($this->generateUrl('list_all_categorie'));
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
            $this->setTreeDir('<ul style=" color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14); margin-left: -16px;" id="id_' . $direction->getId() . '" class= "expd pere_' . $parent . '">'
                    . '<li type="button" style=" list-style: none; margin-left: -48px;">'
                    . '<span onclick="expanNode(' . $direction->getId() . ')" class="list_' . $direction->getId() . ' glyphicon glyphicon-minus-sign" style="margin-left: 25px;"> </span>'
                    . '<a href="http://localhost/GCC/web/app_dev.php/GCC/direction/detail/' . $direction->getId() . '">'
                    . '<b><nav style= "border: solid 1px white; border-radius: 5px; display: inline-table; padding: 2px; margin-top: 2px; cursor: pointer; color:antiquewhite;">' . $direction . ''
                    . '</b></nav>'
                    . ''
                    . '</li>'
                    . '</a>');
        } else {
            $this->setTreeDir('<ul style="color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14); margin-left: -16px;" id="id_' . $direction->getId() . '" class= "expd pere_' . $parent . '">'
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

    public function generate_tree_list_branche($direction, $parent = NULL) {
        $allSousDir = $this->listSousDir($direction);
        $nbre = count($allSousDir);
        if ($nbre >= 1) {
            $this->setTreeDirBranche('<ul style=" color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14); margin-left: -16px;" id="id_' . $direction->getId() . '" class= "expd pereB_' . $parent . '">'
                    . '<li type="button" style=" list-style: none; margin-left: -48px;">'
                    . '<span onclick="expanNodeBranche(' . $direction->getId() . ')" class="list_' . $direction->getId() . ' glyphicon glyphicon-minus-sign" style="margin-left: 25px;"> </span>'
                    . '<b>'
                    . '<nav onclick="changeBranche(\'' . $direction . '\',\'' . $direction->getId() . '\',\'' . $parent . '\')" style= "border: solid 1px white; border-radius: 5px; display: inline-table; padding: 2px; margin-top: 2px; cursor: pointer; color:antiquewhite;">' . $direction . ''
                    . '</nav>'
                    . '</b>'
                    . '</li>');
        } else {
            $this->setTreeDirBranche('<ul style="color: #efa35c; border-left: 1px solid rgba(222, 212, 205, 0.14); margin-left: -16px;" id="id_' . $direction->getId() . '" class= "expd pereB_' . $parent . '">'
                    . '<li type="button" style="list-style: none; margin-left: -48px;">'
                    . '<span onclick="expanNodeBranche(' . $direction->getId() . ')" class="list_' . $direction->getId() . ' glyphicon glyphicon-triangle-right" style="margin-left: 25px;"> </span>'
                    . '<b>'
                    . '<nav onclick="changeBranche(\'' . $direction . '\',\'' . $direction->getId() . '\',\'' . $parent . '\')" style= "border: solid 1px white; border-radius: 5px; display: inline-table; padding: 2px; margin-top: 2px; cursor: pointer; color: #100101;">' . $direction . ''
                    . '</nav>'
                    . '</b>'
                    . '</li>');
        }
        $sousDir = new Direction();
        foreach ($allSousDir as $sousDir) {
            $this->generate_tree_list_branche($sousDir, $direction->getId());
        }
        $this->setTreeDirBranche('</ul>');
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

    public function updateCategorieAction($id) {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $categorie = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->find($id);

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:addCategorie.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'categorie' => $categorie));
    }

    public function listAllPersonnelAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $personnels = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Personnel')
                ->findAll();
        $personnels = array_reverse($personnels);

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

    public function listAllCategorieAction() {
        $direction = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Direction')
                ->findOneBy(array('directionPere' => NULL));

        $categories = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Categorie')
                ->findAll();

        $categories = array_reverse($categories);

        $this->generate_tree_list($direction);
        return $this->render('RepGestionBundle:Rep:listCategorie.html.twig', array(
                    'arbreDirection' => $this->getTreeDir(),
                    'categories' => $categories));
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

    private $somme = 0;
    private $index = 2;

    function buildExcelAction($id) {
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();
        $phpExcelObject->getProperties()->setCreator('Junior Ubuntu')
                ->setLastModifiedBy('Atemgoua Brumel')
                ->setTitle("Noms de la feuille");
        $phpExcelObject->createSheet(0);
        $phpExcelObject->setActiveSheetIndex(0);
        $phpExcelObject->getActiveSheet()->setTitle('Noms de la feuille');


        /// Perparation du fichier d'export .txt

        $file = fopen('../export.txt', 'w');
        $this->sortieFormate($file, $id);
        fclose($file);

        /// impression de l'entête

        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('B' . ($this->index - 1), 'N°');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('C' . ($this->index - 1), 'Noms et prénoms');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('D' . ($this->index - 1), 'Matricules');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('E' . ($this->index - 1), 'Téléphones');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('F' . ($this->index - 1), 'Quotas');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('G' . ($this->index - 1), 'Date Pre. Attr.');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('H' . ($this->index - 1), 'Décisions');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('I' . ($this->index - 1), 'Observations');
        $phpExcelObject->setActiveSheetIndex(0)->setCellValue('J' . ($this->index - 1), 'Direction');

        $this->impressionData($this->somme, $phpExcelObject, $id, $this->index);

        $phpExcelObject->getActiveSheet()->mergeCells(
                'B' . $this->index . ':C'
                . $this->index . ':D'
                . $this->index . ':E'
                . $this->index . ':F'
                . $this->index . ':G'
                . $this->index . ':H'
                . $this->index . ':I'
                . $this->index . ':J'
                . $this->index);
        $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('B' . $this->index, $this->somme);


        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        $writer->save('../report.xlsx');

        return $this->render('RepGestionBundle::test.html.twig');
    }

    function impressionData($somme, $phpExcelObject, $id, $i) {

        $direction = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $direction));


        foreach ($listPoste as $poste) {
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('B' . $this->index, $this->index);
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('C' . $this->index, $poste->getOccupant());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('D' . $this->index, $poste->getOccupant()->getMatricule());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('E' . $this->index, $poste->getOccupant()->getNumTel());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('F' . $this->index, $poste->getCategorie()->getQuota());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('G' . $this->index, $poste->getOccupant()->getDateRecru()->format('d-m-Y'));
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('H' . $this->index, $poste->getOccupant()->getRefDecision());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('I' . $this->index, $poste->getObservation());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('J' . $this->index, $direction);

            $this->somme += $poste->getCategorie()->getQuota();
            $this->index += 1;
        }
        $allSousDir = $this->listSousDir($direction);

        foreach ($allSousDir as $sousDir) {
            $this->impressionData($somme, $phpExcelObject, $sousDir->getId(), ++$i);
        }
    }

    function sortieFormate($file, $id) {
        $direction = $this->findById($id);

        $listPoste = $this->getDoctrine()
                ->getRepository('RepGestionBundle:Poste')
                ->findBy(array('direction' => $direction));
        foreach ($listPoste as $poste) {
            fwrite($file, $poste->getOccupant()->getNumTel()
                    . '|' . $poste->getOccupant()->getNumTel()
                    . '|' . ($poste->getCategorie()->getQuota() * 100) . "\r\n");
        }

        $allSousDir = $this->listSousDir($direction);

        foreach ($allSousDir as $sousDir) {
            $this->sortieFormate($file, $sousDir->getId());
        }
    }

}
