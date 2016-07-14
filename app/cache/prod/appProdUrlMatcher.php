<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/GCC')) {
            // rep_gestion_homepage
            if (0 === strpos($pathinfo, '/GCC/hello') && preg_match('#^/GCC/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rep_gestion_homepage')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/GCC/administration')) {
                // add_admin
                if ($pathinfo === '/GCC/administration/ajouter') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::ajouterAction',  '_route' => 'add_admin',);
                }

                // list_one_admin
                if (0 === strpos($pathinfo, '/GCC/administration/list') && preg_match('#^/GCC/administration/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_admin')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAction',));
                }

            }

            if (0 === strpos($pathinfo, '/GCC/personnel')) {
                // add_personnel
                if ($pathinfo === '/GCC/personnel/ajouter') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::ajouterAction',  '_route' => 'add_personnel',);
                }

                // list_one_personnel
                if (rtrim($pathinfo, '/') === '/GCC/personnel/listAll') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'list_one_personnel');
                    }

                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  '_route' => 'list_one_personnel',);
                }

                // update_personnel
                if (0 === strpos($pathinfo, '/GCC/personnel/modifier') && preg_match('#^/GCC/personnel/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_personnel')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::updateAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
