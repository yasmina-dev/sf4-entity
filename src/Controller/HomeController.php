<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $user = new User();
        $user->setNom('tatat');
        $user->setPrenom('toto');

        // etape 1: apelle ou service doctrine
        $em = $this->getDoctrine()->getManager();
        //etape 2 persister
        $em->persist($user);
        // etape 3 pousser en base enregistrer
       $em->flush();

        return $this->render('home/index.html.twig',
            [
                'utilisateur' => $user
            ]
        );
    }
}
