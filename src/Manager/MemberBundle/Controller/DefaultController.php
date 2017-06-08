<?php

namespace Manager\MemberBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberRepository = $em->getRepository('ManagerMemberBundle:Member');

        $memberList = $memberRepository->findAll();

        return $this->render(
            'ManagerMemberBundle:Default:index.html.twig',
            array(
                'memberList' => $memberList
            )
        );
    }
}
