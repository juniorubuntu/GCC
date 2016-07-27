<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/GCC')) {
            // rep_gestion_homepage
            if (rtrim($pathinfo, '/') === '/GCC') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rep_gestion_homepage');
                }

                return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\StartController::indexAction',  '_route' => 'rep_gestion_homepage',);
            }

            // rep_gestion_login
            if ($pathinfo === '/GCC/login') {
                return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\LoginController::indexAction',  '_route' => 'rep_gestion_login',);
            }

            if (0 === strpos($pathinfo, '/GCC/a')) {
                // rep_gestion_accueil
                if ($pathinfo === '/GCC/accueil') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\AccueilController::indexAction',  '_route' => 'rep_gestion_accueil',);
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

            }

            if (0 === strpos($pathinfo, '/GCC/personnel')) {
                // add_personnel
                if ($pathinfo === '/GCC/personnel/ajouter') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addPersonnelAction',  '_route' => 'add_personnel',);
                }

                // save_personnel
                if ($pathinfo === '/GCC/personnel/save') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::savePersonnelAction',  '_route' => 'save_personnel',);
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

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllPersonnelAction',  '_route' => 'list_all_personnel',);
                    }

                }

                // update_personnel
                if (0 === strpos($pathinfo, '/GCC/personnel/modifier') && preg_match('#^/GCC/personnel/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_personnel')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updatePersonnelAction',));
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

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addCategorieAction',  '_route' => 'add_categorie',);
                    }

                    // save_categorie
                    if ($pathinfo === '/GCC/categorie/save') {
                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::saveCategorieAction',  '_route' => 'save_categorie',);
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

                            return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllCategorieAction',  '_route' => 'list_all_categorie',);
                        }

                    }

                    // update_categorie
                    if (0 === strpos($pathinfo, '/GCC/categorie/modifier') && preg_match('#^/GCC/categorie/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_categorie')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateCategorieAction',));
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

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addCompteAction',  '_route' => 'add_compte',);
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

                            return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllCompteAction',  '_route' => 'list_all_compte',);
                        }

                    }

                    // update_compte
                    if (0 === strpos($pathinfo, '/GCC/compte/modifier') && preg_match('#^/GCC/compte/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_compte')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateCompteAction',));
                    }

                    // delete_compte
                    if (0 === strpos($pathinfo, '/GCC/compte/supprimer') && preg_match('#^/GCC/compte/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_compte')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::deleteCompteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/GCC/poste')) {
                // add_poste
                if (0 === strpos($pathinfo, '/GCC/poste/ajouterAlaDirection') && preg_match('#^/GCC/poste/ajouterAlaDirection/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addPosteAction',));
                }

                // save_poste
                if ($pathinfo === '/GCC/poste/save') {
                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::savePosteAction',  '_route' => 'save_poste',);
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

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PersonnelController::listAllAction',  '_route' => 'list_all_poste',);
                    }

                }

                // update_poste
                if (0 === strpos($pathinfo, '/GCC/poste/modifier') && preg_match('#^/GCC/poste/modifier/(?P<id>\\d+)/(?P<idPoste>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updatePosteAction',));
                }

                // delete_poste
                if (0 === strpos($pathinfo, '/GCC/poste/supprimer') && preg_match('#^/GCC/poste/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_poste')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\PosteController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/GCC/direction')) {
                // add_direction
                if (rtrim($pathinfo, '/') === '/GCC/direction/ajouter') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'add_direction');
                    }

                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::ajouterAction',  '_route' => 'add_direction',);
                }

                if (0 === strpos($pathinfo, '/GCC/direction/list')) {
                    // list_one_direction
                    if (preg_match('#^/GCC/direction/list/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_one_direction')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAction',));
                    }

                    // list_all_direction
                    if (rtrim($pathinfo, '/') === '/GCC/direction/listAll') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'list_all_direction');
                        }

                        return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listAllAction',  '_route' => 'list_all_direction',);
                    }

                }

                // list_tree_direction
                if (rtrim($pathinfo, '/') === '/GCC/direction/arbre') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'list_tree_direction');
                    }

                    return array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::builTreeAction',  '_route' => 'list_tree_direction',);
                }

                // list_detail_direction
                if (0 === strpos($pathinfo, '/GCC/direction/detail') && preg_match('#^/GCC/direction/detail/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_detail_direction')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::detailAction',));
                }

                // update_direction
                if (0 === strpos($pathinfo, '/GCC/direction/modifier') && preg_match('#^/GCC/direction/modifier/(?P<id>\\d+)/(?P<idDir>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_direction')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::updateBrancheAction',));
                }

                // delete_direction
                if (0 === strpos($pathinfo, '/GCC/direction/supprimer') && preg_match('#^/GCC/direction/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_direction')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::deleteAction',));
                }

                // list_sous_direction
                if (0 === strpos($pathinfo, '/GCC/direction/listSousDirection') && preg_match('#^/GCC/direction/listSousDirection/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_sous_direction')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::listSousDirAction',));
                }

            }

            if (0 === strpos($pathinfo, '/GCC/branche')) {
                // add_branche
                if (0 === strpos($pathinfo, '/GCC/branche/ajouterAlaDirection') && preg_match('#^/GCC/branche/ajouterAlaDirection/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_branche')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::addBrancheAction',));
                }

                // export_data_branche
                if (0 === strpos($pathinfo, '/GCC/branche/export-Donnees') && preg_match('#^/GCC/branche/export\\-Donnees/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'export_data_branche')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::exportDirectionDataAction',));
                }

                // impression_data
                if (preg_match('#^/GCC/branche/(?P<id>[^/]++)/impression$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'impression_data')), array (  '_controller' => 'Rep\\GestionBundle\\Controller\\DirectionController::buildExcelAction',));
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
