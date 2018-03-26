<?php

namespace baseBundle\Controller;

use baseBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;

class RegistrationController extends Controller
{
    public function registerAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = new User();
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $this->createForm('baseBundle\Form\ClientRegistrationType', $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $user = $form->getData();
                $pwd = $user->getPassword();
                $encoder = $this->container->get('security.password_encoder');
                $pwd = $encoder->encodePassword($user, $pwd);
                $user->setPassword($pwd);
                $user->setEnabled(true);
                if ($user->getService() !== null) {
                    $user->addRole("ROLE_PASTRY");
                } else $user->addRole("ROLE_USER");

                $em->persist($user);
                $em->flush();
                //return $this->redirectToRoute('base_homepage');

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;

            }
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('FOSUserBundle:Registration:register.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }





/*
public function registerAction(Request $request)
{
    $user = new User();
    $form = $this->createForm('baseBundle\Form\ClientRegistrationType', $user);
    $form->handleRequest($request);
    //$user->upload();

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();

        $user= new User();
        $user= $form->getData();
        $pwd=$user->getPassword();
        $encoder=$this->container->get('security.password_encoder');
        $pwd=$encoder->encodePassword($user, $pwd);
        $user->setPassword($pwd);
        if ($user->getService() !== null){
        $user->addRole("ROLE_Pastry");}
        else $user->addRole("ROLE_Client");

        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('base_homepage');
    }
//FOSUserBundle:Registration:register.html.twig
    return $this->render('FOSUserBundle:Registration:register.html.twig', array(
        'user' => $user,
        'form' => $form->createView(),
    ));
}*/
}