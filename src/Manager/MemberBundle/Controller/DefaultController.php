<?php

namespace Manager\MemberBundle\Controller;

use Manager\MemberBundle\Entity\Member;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        // get member list
        $em = $this->getDoctrine()->getManager();

        $memberRepository = $em->getRepository('ManagerMemberBundle:Member');

        $memberList = $memberRepository->findAll();

        // init form add member
        $member = new Member();
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $member);
        $formBuilder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('status', TextType::class)
            ->add('function', TextType::class)
            ->add('mission', TextType::class)
            ->add('birthday', DateType::class, array(
                'years' => range(date("Y") - 100, date("Y")),
            ))
            ->add('startDate', DateType::class, array(
                'years' => range(date("Y") - 80, date("Y")),
            ))
            ->add('email', TextType::class)
            ->add('adress', TextType::class)
            ->add('mobilePhone', TextType::class)
            ->add('homePhone', TextType::class)
            ->add('proPhone', TextType::class)
            ->add('Ajouter', SubmitType::class);
        $form = $formBuilder->getForm();
        // end init form add member
        // post form add member
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($member);
                $em->flush();
                return $this->redirectToRoute('manager_member_homepage', array('new_id' => $member->getId()));
            }
        }
        // end post form add member

        return $this->render(
            'ManagerMemberBundle::index.html.twig',
            array(
                'memberList' => $memberList,
                'add_member_form' => $form->createView(),
            )
        );
    }

    public function addMemberAction(Request $request)
    {

    }

    public function editMemberAction(Request $request, Member $member)
    {
        // init form add member
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $member);
        $formBuilder
            ->add('firstname', TextType::class, array('data' => $member->getFirstname()))
            ->add('lastname', TextType::class, array('data' => $member->getLastname()))
            ->add('status', TextType::class, array('data' => $member->getStatus()))
            ->add('function', TextType::class, array('data' => $member->getFunction()))
            ->add('mission', TextType::class, array('data' => $member->getMission()))
            ->add('birthday', DateType::class, array(
                'years' => range(date("Y") - 100, date("Y")),
            ))
            ->add('startDate', DateType::class, array(
                'years' => range(date("Y") - 80, date("Y")),
            ))
            ->add('email', TextType::class, array('data' => $member->getEmail()))
            ->add('adress', TextType::class, array('data' => $member->getAdress()))
            ->add('mobilePhone', TextType::class, array('data' => $member->getMobilePhone()))
            ->add('homePhone', TextType::class, array('data' => $member->getHomePhone()))
            ->add('proPhone', TextType::class, array('data' => $member->getProPhone()))
            ->add('Ajouter', SubmitType::class);
        $form = $formBuilder->getForm();
        // end init form add member
        // post form add member
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($member);
                $em->flush();
                return $this->redirectToRoute('manager_member_homepage', array('member_id' => $member->getId()));
            }
        }
        // end post form add member

        return $this->render(
        'ManagerMemberBundle::index.html.twig',
            array(
                'edit_member_form' => $form->createView(),
            )
        );
    }

    public function removeMemberAction (Member $member)
    {

        $em = $this->getDoctrine()->getManager();
        $em->remove($member);
        $em->flush();

        return $this->redirectToRoute('manager_member_homepage', array('deleted_id' => $member->getId()));
    }
}
