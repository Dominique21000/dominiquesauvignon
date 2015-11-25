<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
