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

            if (0 === strpos($pathinfo, '/GCC/admin')) {
                // add_admin
                if ($pathinfo === '/GCC/admin/ajouter') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::ajouterAction',  '_route' => 'add_admin',);
                }

                if (0 === strpos($pathinfo, '/GCC/admin/list')) {
                    // list_one_admin
                    if (preg_match('#^/GCC/admin/list/(?P<codeSecret>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_admin')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAction',));
                    }

                    // list_all_admin
                    if (rtrim($pathinfo, '/') === '/GCC/admin/listAll') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'list_all_admin');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::listAllAction',  '_route' => 'list_all_admin',);
                    }

                }

                // update_admin
                if (0 === strpos($pathinfo, '/GCC/admin/modifier') && preg_match('#^/GCC/admin/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_admin')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::updateAction',));
                }

                // delete_admin
                if (0 === strpos($pathinfo, '/GCC/admin/supprimer') && preg_match('#^/GCC/admin/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_admin')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AdminController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/GCC/personnel')) {
                // add_personnel
                if ($pathinfo === '/GCC/personnel/ajouter') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::ajouterAction',  '_route' => 'add_personnel',);
                }

                if (0 === strpos($pathinfo, '/GCC/personnel/list')) {
                    // list_one_personnel
                    if (preg_match('#^/GCC/personnel/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_personnel')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAction',));
                    }

                    // list_all_personnel
                    if (rtrim($pathinfo, '/') === '/GCC/personnel/listAll') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'list_all_personnel');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  '_route' => 'list_all_personnel',);
                    }

                }

                // update_personnel
                if (0 === strpos($pathinfo, '/GCC/personnel/modifier') && preg_match('#^/GCC/personnel/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_personnel')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::updateAction',));
                }

                // delete_personnel
                if (0 === strpos($pathinfo, '/GCC/personnel/supprimer') && preg_match('#^/GCC/personnel/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_personnel')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/GCC/c')) {
                if (0 === strpos($pathinfo, '/GCC/categorie')) {
                    // add_categorie
                    if (rtrim($pathinfo, '/') === '/GCC/categorie/ajouter') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'add_categorie');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::ajouterAction',  '_route' => 'add_categorie',);
                    }

                    if (0 === strpos($pathinfo, '/GCC/categorie/list')) {
                        // list_one_categorie
                        if (preg_match('#^/GCC/categorie/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_categorie')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::listAction',));
                        }

                        // list_all_categorie
                        if (rtrim($pathinfo, '/') === '/GCC/categorie/listAll') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'list_all_categorie');
                            }

                            return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::listAllAction',  '_route' => 'list_all_categorie',);
                        }

                    }

                    // update_categorie
                    if (0 === strpos($pathinfo, '/GCC/categorie/modifier') && preg_match('#^/GCC/categorie/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_categorie')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::updateAction',));
                    }

                    // delete_categorie
                    if (0 === strpos($pathinfo, '/GCC/categorie/supprimer') && preg_match('#^/GCC/categorie/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_categorie')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CategorieController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/GCC/compte')) {
                    // add_compte
                    if (rtrim($pathinfo, '/') === '/GCC/compte/ajouter') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'add_compte');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::ajouterAction',  '_route' => 'add_compte',);
                    }

                    if (0 === strpos($pathinfo, '/GCC/compte/list')) {
                        // list_one_compte
                        if (preg_match('#^/GCC/compte/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_compte')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::listAction',));
                        }

                        // list_all_compte
                        if (rtrim($pathinfo, '/') === '/GCC/compte/listAll') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'list_all_compte');
                            }

                            return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::listAllAction',  '_route' => 'list_all_compte',);
                        }

                    }

                    // update_compte
                    if (0 === strpos($pathinfo, '/GCC/compte/modifier') && preg_match('#^/GCC/compte/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_compte')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::updateAction',));
                    }

                    // delete_compte
                    if (0 === strpos($pathinfo, '/GCC/compte/supprimer') && preg_match('#^/GCC/compte/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_compte')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\CompteController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/GCC/poste')) {
                // add_poste
                if (rtrim($pathinfo, '/') === '/GCC/poste/ajouter') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'add_poste');
                    }

                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::ajouterAction',  '_route' => 'add_poste',);
                }

                if (0 === strpos($pathinfo, '/GCC/poste/list')) {
                    // list_one_poste
                    if (preg_match('#^/GCC/poste/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::listAction',));
                    }

                    // list_all_poste
                    if (rtrim($pathinfo, '/') === '/GCC/poste/listAll') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'list_all_poste');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::listAllAction',  '_route' => 'list_all_poste',);
                    }

                }

                // update_poste
                if (0 === strpos($pathinfo, '/GCC/poste/modifier') && preg_match('#^/GCC/poste/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::updateAction',));
                }

                // delete_poste
                if (0 === strpos($pathinfo, '/GCC/poste/supprimer') && preg_match('#^/GCC/poste/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::deleteAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
