<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PersonalSupportController extends AbstractController
{
    #[Route('/personal-support', name: 'app_personal_support')]
    public function index(): Response
    {
        return $this->render('personal_support/index.html.twig', [
            'controller_name' => 'PersonalSupportController',
        ]);
    }
}
