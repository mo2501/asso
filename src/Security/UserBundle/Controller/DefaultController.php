<?php

namespace Security\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SecurityUserBundle:Default:index.html.twig');
    }
}
