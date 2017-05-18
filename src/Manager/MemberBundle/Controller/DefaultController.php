<?php

namespace Manager\MemberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManagerMemberBundle:Default:index.html.twig');
    }
}
