<?php

namespace Manager\SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManagerSecretariaBundle:Default:index.html.twig');
    }
}
