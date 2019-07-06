<?php

namespace App\Controller;


use App\Entity\UserPerso;
use App\Form\UserPersoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserPersoController extends AbstractController
{
    /**
     * @Route("/perso", name="perso")   
     */
    public function index()
    {
        $userPerso = new UserPerso();
        
        $form = $this->createForm(UserPersoType::class, $userPerso);
        
        return $this->render('user_perso/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
