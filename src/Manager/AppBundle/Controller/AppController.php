<?php

namespace Manager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManagerAppBundle:App:layout.html.twig');
    }
}
