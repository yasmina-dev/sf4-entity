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

        $user->setId(100);
        $user->setNom('Yasmina');
        $user->setPrenom('IKHLEF');

        return $this->render('home/index.html.twig',
            [
               'utilisateur'=> $user
            ]
        );
    }
}
