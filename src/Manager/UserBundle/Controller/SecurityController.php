<?php
/**
 * Created by PhpStorm.
 * User: BRPX0413
 * Date: 31/05/2017
 * Time: 14:56
 */

namespace Manager\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction (Request $request)
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('manager_app_homepage');
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render(
            'ManagerUserBundle:Security:login.html.twig',
            array(
                'last_username' => $authenticationUtils->getLastUserName(),
                'error' => $authenticationUtils->getLastAuthenticationError(),
            )
        );
    }

}