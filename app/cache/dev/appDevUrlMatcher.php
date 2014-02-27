<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/images/b0e4b15')) {
            // _assetic_b0e4b15
            if ($pathinfo === '/images/b0e4b15.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0e4b15',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_b0e4b15',);
            }

            // _assetic_b0e4b15_0
            if ($pathinfo === '/images/b0e4b15_favicon_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0e4b15',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_b0e4b15_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/76c252b')) {
            // _assetic_76c252b
            if ($pathinfo === '/js/76c252b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '76c252b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_76c252b',);
            }

            if (0 === strpos($pathinfo, '/js/76c252b_')) {
                // _assetic_76c252b_0
                if ($pathinfo === '/js/76c252b_errorHandling_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '76c252b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_76c252b_0',);
                }

                // _assetic_76c252b_1
                if ($pathinfo === '/js/76c252b_jquery_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '76c252b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_76c252b_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/44bc276')) {
            // _assetic_44bc276
            if ($pathinfo === '/css/44bc276.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '44bc276',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_44bc276',);
            }

            // _assetic_44bc276_0
            if ($pathinfo === '/css/44bc276_style2_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '44bc276',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_44bc276_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/c15f12f')) {
            // _assetic_c15f12f
            if ($pathinfo === '/js/c15f12f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c15f12f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c15f12f',);
            }

            if (0 === strpos($pathinfo, '/js/c15f12f_')) {
                if (0 === strpos($pathinfo, '/js/c15f12f_monoc')) {
                    // _assetic_c15f12f_0
                    if ($pathinfo === '/js/c15f12f_monocore_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c15f12f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c15f12f_0',);
                    }

                    // _assetic_c15f12f_1
                    if ($pathinfo === '/js/c15f12f_monoctrl_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c15f12f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c15f12f_1',);
                    }

                }

                // _assetic_c15f12f_2
                if ($pathinfo === '/js/c15f12f_errorHandling_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c15f12f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c15f12f_2',);
                }

                // _assetic_c15f12f_3
                if ($pathinfo === '/js/c15f12f_jquery_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c15f12f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_c15f12f_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/66cc442')) {
            // _assetic_66cc442
            if ($pathinfo === '/css/66cc442.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '66cc442',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_66cc442',);
            }

            if (0 === strpos($pathinfo, '/css/66cc442_')) {
                if (0 === strpos($pathinfo, '/css/66cc442_monoc')) {
                    // _assetic_66cc442_0
                    if ($pathinfo === '/css/66cc442_monocore_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66cc442',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_66cc442_0',);
                    }

                    // _assetic_66cc442_1
                    if ($pathinfo === '/css/66cc442_monoctrl_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '66cc442',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_66cc442_1',);
                    }

                }

                // _assetic_66cc442_2
                if ($pathinfo === '/css/66cc442_style2_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '66cc442',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_66cc442_2',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        if (0 === strpos($pathinfo, '/reader')) {
            // read_book
            if (preg_match('#^/reader/(?P<publicationId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'read_book')), array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\ReaderController::readAction',));
            }

            // reader
            if ($pathinfo === '/reader') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\ReaderController::indexAction',  '_route' => 'reader',);
            }

            // reader_test
            if ($pathinfo === '/reader/test') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\ReaderController::hardcomponentAction',  '_route' => 'reader_test',);
            }

        }

        // reader_components
        if (0 === strpos($pathinfo, '/component') && preg_match('#^/component/(?P<componentId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reader_components')), array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\ReaderController::componentAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\LoginController::indexAction',  '_route' => 'login',);
                }

                // posdta_login
                if ($pathinfo === '/login/posdta') {
                    return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\LoginController::posdtaAction',  '_route' => 'posdta_login',);
                }

                // login_test
                if ($pathinfo === '/login/test') {
                    return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\LoginController::testAction',  '_route' => 'login_test',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

            // logout_test
            if ($pathinfo === '/login/posdta') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\LoginController::testlogoutAction',  '_route' => 'logout_test',);
            }

        }

        if (0 === strpos($pathinfo, '/registry')) {
            // registry
            if ($pathinfo === '/registry') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\RegistryController::indexAction',  '_route' => 'registry',);
            }

            // registry_create
            if ($pathinfo === '/registry/create') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\RegistryController::createAction',  '_route' => 'registry_create',);
            }

            // registry_test
            if ($pathinfo === '/registry/test') {
                return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\RegistryController::testAction',  '_route' => 'registry_test',);
            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'Posdta\\Bundle\\SiteBundle\\Controller\\IndexController::indexAction',  '_route' => 'index',);
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
