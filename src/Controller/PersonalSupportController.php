<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PersonalSupportController extends AbstractController
{
    #[Route('/pilotage-de-projets', name: 'app_personal_support')]
    public function index(): Response
    {
        return $this->render('personal_support/index.html.twig', [
            'controller_name' => 'PersonalSupportController',
        ]);
    }
    #[Route('/personal-support', name: 'old_personal_support')]
    public function redirectOld(): RedirectResponse
    {
        return $this->redirectToRoute('app_personal_support', [], 301);
    }
}
