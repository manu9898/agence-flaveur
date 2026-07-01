<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EditorialController extends AbstractController
{
    #[Route('/sensibilisation-communication', name: 'app_editorial')]
    public function index(): Response
    {
        return $this->render('editorial/index.html.twig', [
            'controller_name' => 'EditorialController',
        ]);
    }

    #[Route('/editorial', name: 'old_editorial')]
    public function redirectOld(): RedirectResponse
    {
        return $this->redirectToRoute('app_editorial', [], 301);
    }
}
