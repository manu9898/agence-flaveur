<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProjectDevelopmentController extends AbstractController
{
    #[Route('/coordination-animation', name: 'app_project_development')]
    public function index(): Response
    {
        return $this->render('project_development/index.html.twig', [
            'controller_name' => 'ProjectDevelopmentController',
        ]);
    }

    #[Route('/project-development', name: 'old_project_development')]
    public function redirectOld(): RedirectResponse
    {
        return $this->redirectToRoute('app_project_development', [], 301);
    }
}
