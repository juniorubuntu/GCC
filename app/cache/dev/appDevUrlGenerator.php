<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'rep_gestion_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\StartController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/',    ),  ),  4 =>   array (  ),),
        'rep_gestion_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\LoginController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/login',    ),  ),  4 =>   array (  ),),
        'rep_gestion_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AccueilController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/accueil',    ),  ),  4 =>   array (  ),),
        'add_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/admin/ajouter',    ),  ),  4 =>   array (  ),),
        'list_one_admin' => array (  0 =>   array (    0 => 'codeSecret',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codeSecret',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/list',    ),  ),  4 =>   array (  ),),
        'list_all_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/admin/listAll/',    ),  ),  4 =>   array (  ),),
        'update_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/modifier',    ),  ),  4 =>   array (  ),),
        'delete_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/supprimer',    ),  ),  4 =>   array (  ),),
        'add_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addPersonnelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/ajouter',    ),  ),  4 =>   array (  ),),
        'save_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::savePersonnelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/save',    ),  ),  4 =>   array (  ),),
        'list_one_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/list',    ),  ),  4 =>   array (  ),),
        'list_all_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllPersonnelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/listAll/',    ),  ),  4 =>   array (  ),),
        'update_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updatePersonnelAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/modifier',    ),  ),  4 =>   array (  ),),
        'delete_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/supprimer',    ),  ),  4 =>   array (  ),),
        'add_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/categorie/ajouter/',    ),  ),  4 =>   array (  ),),
        'save_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::saveCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/categorie/save',    ),  ),  4 =>   array (  ),),
        'list_one_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/list',    ),  ),  4 =>   array (  ),),
        'list_all_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/categorie/listAll/',    ),  ),  4 =>   array (  ),),
        'update_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateCategorieAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/modifier',    ),  ),  4 =>   array (  ),),
        'delete_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/supprimer',    ),  ),  4 =>   array (  ),),
        'add_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/compte/ajouter/',    ),  ),  4 =>   array (  ),),
        'list_one_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/list',    ),  ),  4 =>   array (  ),),
        'list_all_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/compte/listAll/',    ),  ),  4 =>   array (  ),),
        'update_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateCompteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/modifier',    ),  ),  4 =>   array (  ),),
        'delete_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::deleteCompteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/supprimer',    ),  ),  4 =>   array (  ),),
        'add_poste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addPosteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/poste/ajouterAlaDirection',    ),  ),  4 =>   array (  ),),
        'save_poste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::savePosteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/poste/save',    ),  ),  4 =>   array (  ),),
        'list_one_poste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/poste/list',    ),  ),  4 =>   array (  ),),
        'list_all_poste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/poste/listAll/',    ),  ),  4 =>   array (  ),),
        'update_poste' => array (  0 =>   array (    0 => 'id',    1 => 'idPoste',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updatePosteAction',  ),  2 =>   array (    'id' => '\\d+',    'idPoste' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idPoste',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/GCC/poste/modifier',    ),  ),  4 =>   array (  ),),
        'delete_poste' => array (  0 =>   array (    0 => 'id',    1 => 'idPost',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',    'idPost' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idPost',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/GCC/poste/supprimer',    ),  ),  4 =>   array (  ),),
        'add_direction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/direction/ajouter/',    ),  ),  4 =>   array (  ),),
        'save_branche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::saveBrancheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/branche/save',    ),  ),  4 =>   array (  ),),
        'list_one_direction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/direction/list',    ),  ),  4 =>   array (  ),),
        'list_all_direction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/direction/listAll/',    ),  ),  4 =>   array (  ),),
        'list_tree_direction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::builTreeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/direction/arbre/',    ),  ),  4 =>   array (  ),),
        'list_detail_direction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::detailAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/direction/detail',    ),  ),  4 =>   array (  ),),
        'update_direction' => array (  0 =>   array (    0 => 'id',    1 => 'idDir',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateBrancheAction',  ),  2 =>   array (    'id' => '\\d+',    'idDir' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idDir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/GCC/direction/modifier',    ),  ),  4 =>   array (  ),),
        'update_direction_pere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updatePereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/direction/modifierPere/',    ),  ),  4 =>   array (  ),),
        'delete_direction' => array (  0 =>   array (    0 => 'id',    1 => 'idDir',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',    'idDir' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'idDir',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/GCC/direction/supprimer',    ),  ),  4 =>   array (  ),),
        'list_sous_direction' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listSousDirAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/direction/listSousDirection',    ),  ),  4 =>   array (  ),),
        'add_branche' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addBrancheAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/branche/ajouterAlaDirection',    ),  ),  4 =>   array (  ),),
        'export_data_branche' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::exportDirectionDataAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/branche/export-Donnees',    ),  ),  4 =>   array (  ),),
        'impression_data' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::buildExcelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/impression',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/GCC/branche',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
