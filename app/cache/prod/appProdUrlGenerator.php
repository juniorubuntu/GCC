<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'rep_gestion_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/hello',    ),  ),  4 =>   array (  ),),
        'add_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/admin/ajouter',    ),  ),  4 =>   array (  ),),
        'list_one_admin' => array (  0 =>   array (    0 => 'codeSecret',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codeSecret',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/list',    ),  ),  4 =>   array (  ),),
        'list_all_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/admin/listAll/',    ),  ),  4 =>   array (  ),),
        'update_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/modifier',    ),  ),  4 =>   array (  ),),
        'delete_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/admin/supprimer',    ),  ),  4 =>   array (  ),),
        'add_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/ajouter',    ),  ),  4 =>   array (  ),),
        'list_one_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/list',    ),  ),  4 =>   array (  ),),
        'list_all_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/listAll/',    ),  ),  4 =>   array (  ),),
        'update_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/modifier',    ),  ),  4 =>   array (  ),),
        'delete_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/supprimer',    ),  ),  4 =>   array (  ),),
        'add_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/categorie/ajouter/',    ),  ),  4 =>   array (  ),),
        'list_one_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/list',    ),  ),  4 =>   array (  ),),
        'list_all_categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/categorie/listAll/',    ),  ),  4 =>   array (  ),),
        'update_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/modifier',    ),  ),  4 =>   array (  ),),
        'delete_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/categorie/supprimer',    ),  ),  4 =>   array (  ),),
        'add_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/compte/ajouter/',    ),  ),  4 =>   array (  ),),
        'list_one_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/list',    ),  ),  4 =>   array (  ),),
        'list_all_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/compte/listAll/',    ),  ),  4 =>   array (  ),),
        'update_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/modifier',    ),  ),  4 =>   array (  ),),
        'delete_compte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/compte/supprimer',    ),  ),  4 =>   array (  ),),
        'add_poste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/poste/ajouter/',    ),  ),  4 =>   array (  ),),
        'list_one_poste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/poste/list',    ),  ),  4 =>   array (  ),),
        'list_all_poste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/poste/listAll/',    ),  ),  4 =>   array (  ),),
        'update_poste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/poste/modifier',    ),  ),  4 =>   array (  ),),
        'delete_poste' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/poste/supprimer',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
