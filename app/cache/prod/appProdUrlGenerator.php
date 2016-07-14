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
        'add_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/administration/ajouter',    ),  ),  4 =>   array (  ),),
        'list_one_admin' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/administration/list',    ),  ),  4 =>   array (  ),),
        'add_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/ajouter',    ),  ),  4 =>   array (  ),),
        'list_one_personnel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/GCC/personnel/listAll/',    ),  ),  4 =>   array (  ),),
        'update_personnel' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::updateAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/GCC/personnel/modifier',    ),  ),  4 =>   array (  ),),
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
