<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserPersoController extends AbstractController
{
    /**
     * @Route("/user/perso", name="user_perso")
     */
    public function index()
    {
        return $this->render('user_perso/index.html.twig', [
            'controller_name' => 'UserPersoController',
        ]);
    }
}
