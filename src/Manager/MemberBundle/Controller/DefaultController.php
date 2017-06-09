<?php

namespace Manager\MemberBundle\Controller;

use Manager\MemberBundle\Entity\Member;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberRepository = $em->getRepository('ManagerMemberBundle:Member');

        $memberList = $memberRepository->findAll();

        return $this->render(
            'ManagerMemberBundle::index.html.twig',
            array(
                'memberList' => $memberList
            )
        );
    }

    public function addMemberAction(Request $request)
    {
        $member = new Member();
        if ($request->isMethod('POST')) {
            $post = $request->request;
            var_dump($post);
            /*
            $member->setFirstname();
            $member->setLastname();
            $member->setFunction();
            $member->setEmail(); */
            $em = $this->getDoctrine()->getManager();
        }
    }
}
