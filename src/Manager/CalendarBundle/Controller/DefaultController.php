<?php

namespace Manager\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ManagerCalendarBundle:Default:index.html.twig');
    }
}
