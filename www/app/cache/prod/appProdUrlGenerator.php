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
    private static $declaredRoutes = array(
        'ds_internaute_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_cv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::cvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_diplome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::diplomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diplome',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_competences' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::competencesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competences',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_experience' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::experienceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/experience',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_recommandations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::recommandationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recommandations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_formation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::formationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/formation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_references' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewReferencesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/references',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_liens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewLiensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/liens',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_diplomes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::diplomesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/diplomes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_depannage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DepannageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/depannage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_internaute_logiciels' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DepannageController::viewLogicielsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logiciels',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\DSController::viewAdminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_lien_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/lien/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_lien_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/lien/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_lien_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/lien/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_liens_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\LienController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liens/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_references_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/references/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_reference_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reference/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_reference_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/reference/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ds_admin_reference_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'DS\\InternauteBundle\\Controller\\ReferenceController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/reference/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
