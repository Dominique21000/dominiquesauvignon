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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/3f6558b')) {
            // _assetic_3f6558b
            if ($pathinfo === '/css/3f6558b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3f6558b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3f6558b',);
            }

            if (0 === strpos($pathinfo, '/css/3f6558b_admin_')) {
                // _assetic_3f6558b_0
                if ($pathinfo === '/css/3f6558b_admin_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f6558b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3f6558b_0',);
                }

                // _assetic_3f6558b_1
                if ($pathinfo === '/css/3f6558b_admin_position_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3f6558b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3f6558b_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/3672499')) {
            // _assetic_3672499
            if ($pathinfo === '/js/3672499.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 3672499,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3672499',);
            }

            if (0 === strpos($pathinfo, '/js/3672499_part_2_')) {
                // _assetic_3672499_0
                if ($pathinfo === '/js/3672499_part_2_3672499_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 3672499,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3672499_0',);
                }

                if (0 === strpos($pathinfo, '/js/3672499_part_2_my')) {
                    // _assetic_3672499_1
                    if ($pathinfo === '/js/3672499_part_2_myFonctionsJS_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3672499,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3672499_1',);
                    }

                    // _assetic_3672499_2
                    if ($pathinfo === '/js/3672499_part_2_myJQuery_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 3672499,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3672499_2',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/8')) {
            if (0 === strpos($pathinfo, '/css/846fd61')) {
                // _assetic_846fd61
                if ($pathinfo === '/css/846fd61.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '846fd61',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_846fd61',);
                }

                if (0 === strpos($pathinfo, '/css/846fd61_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/846fd61_part_1_admin_')) {
                        // _assetic_846fd61_0
                        if ($pathinfo === '/css/846fd61_part_1_admin_position_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '846fd61',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_846fd61_0',);
                        }

                        // _assetic_846fd61_1
                        if ($pathinfo === '/css/846fd61_part_1_admin_style_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '846fd61',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_846fd61_1',);
                        }

                    }

                    // _assetic_846fd61_2
                    if ($pathinfo === '/css/846fd61_part_1_disposition-W8_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '846fd61',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_846fd61_2',);
                    }

                    // _assetic_846fd61_3
                    if ($pathinfo === '/css/846fd61_part_1_style-W8_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '846fd61',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_846fd61_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/82e1f38')) {
                // _assetic_82e1f38
                if ($pathinfo === '/css/82e1f38.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '82e1f38',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_82e1f38',);
                }

                if (0 === strpos($pathinfo, '/css/82e1f38_part_1_')) {
                    if (0 === strpos($pathinfo, '/css/82e1f38_part_1_admin_')) {
                        // _assetic_82e1f38_0
                        if ($pathinfo === '/css/82e1f38_part_1_admin_position_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '82e1f38',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_82e1f38_0',);
                        }

                        // _assetic_82e1f38_1
                        if ($pathinfo === '/css/82e1f38_part_1_admin_style_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '82e1f38',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_82e1f38_1',);
                        }

                    }

                    // _assetic_82e1f38_2
                    if ($pathinfo === '/css/82e1f38_part_1_disposition-W8_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '82e1f38',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_82e1f38_2',);
                    }

                    // _assetic_82e1f38_3
                    if ($pathinfo === '/css/82e1f38_part_1_style-W8_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '82e1f38',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_82e1f38_3',);
                    }

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ds_internaute_hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ds_internaute_hello')), array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DefaultController::indexAction',));
        }

        // ds_internaute_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ds_internaute_homepage');
            }

            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::accueilAction',  '_route' => 'ds_internaute_homepage',);
        }

        // ds_internaute_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::homeAction',  '_route' => 'ds_internaute_home',);
        }

        // ds_internaute_cv
        if ($pathinfo === '/cv') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::cvAction',  '_route' => 'ds_internaute_cv',);
        }

        // ds_internaute_diplome
        if ($pathinfo === '/diplome') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::diplomeAction',  '_route' => 'ds_internaute_diplome',);
        }

        // ds_internaute_competences
        if ($pathinfo === '/competences') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::competencesAction',  '_route' => 'ds_internaute_competences',);
        }

        // ds_internaute_experience
        if ($pathinfo === '/experience') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::experienceAction',  '_route' => 'ds_internaute_experience',);
        }

        // ds_internaute_recommandations
        if ($pathinfo === '/recommandations') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::recommandationsAction',  '_route' => 'ds_internaute_recommandations',);
        }

        // ds_internaute_formation
        if ($pathinfo === '/formation') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::formationAction',  '_route' => 'ds_internaute_formation',);
        }

        // ds_internaute_references
        if ($pathinfo === '/references') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewReferencesAction',  '_route' => 'ds_internaute_references',);
        }

        // ds_internaute_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::contactAction',  '_route' => 'ds_internaute_contact',);
        }

        // ds_internaute_liens
        if ($pathinfo === '/liens') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewLiensAction',  '_route' => 'ds_internaute_liens',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // ds_internaute_diplomes
            if ($pathinfo === '/diplomes') {
                return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::diplomesAction',  '_route' => 'ds_internaute_diplomes',);
            }

            // ds_internaute_depannage
            if ($pathinfo === '/depannage') {
                return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DepannageController::indexAction',  '_route' => 'ds_internaute_depannage',);
            }

        }

        // ds_internaute_logiciels
        if ($pathinfo === '/logiciels') {
            return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DepannageController::viewLogicielsAction',  '_route' => 'ds_internaute_logiciels',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ds_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewAdminAction',  '_route' => 'ds_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/lien')) {
                // ds_admin_lien_add
                if ($pathinfo === '/admin/lien/add') {
                    return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::addAction',  '_route' => 'ds_admin_lien_add',);
                }

                // ds_admin_lien_edit
                if (0 === strpos($pathinfo, '/admin/lien/edit') && preg_match('#^/admin/lien/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ds_admin_lien_edit')), array (  '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::editAction',));
                }

                // ds_admin_lien_delete
                if (0 === strpos($pathinfo, '/admin/lien/delete') && preg_match('#^/admin/lien/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ds_admin_lien_delete')), array (  '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::deleteAction',));
                }

                // ds_admin_liens_liste
                if ($pathinfo === '/admin/liens/liste') {
                    return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::viewAction',  '_route' => 'ds_admin_liens_liste',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/reference')) {
                // ds_admin_references_liste
                if ($pathinfo === '/admin/references/liste') {
                    return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::viewAction',  '_route' => 'ds_admin_references_liste',);
                }

                // ds_admin_reference_add
                if ($pathinfo === '/admin/reference/add') {
                    return array (  '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::addAction',  '_route' => 'ds_admin_reference_add',);
                }

                // ds_admin_reference_edit
                if (0 === strpos($pathinfo, '/admin/reference/edit') && preg_match('#^/admin/reference/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ds_admin_reference_edit')), array (  '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::editAction',));
                }

                // ds_admin_reference_delete
                if (0 === strpos($pathinfo, '/admin/reference/delete') && preg_match('#^/admin/reference/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ds_admin_reference_delete')), array (  '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::deleteAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
