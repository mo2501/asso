<?php

namespace Cloud\FileManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CloudFileManagerBundle:Default:index.html.twig');
    }
}
