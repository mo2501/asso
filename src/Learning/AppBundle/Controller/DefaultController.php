<?php

namespace Learning\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LearningAppBundle:Default:index.html.twig');
    }
}
