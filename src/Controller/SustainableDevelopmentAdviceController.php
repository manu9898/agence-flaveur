<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SustainableDevelopmentAdviceController extends AbstractController
{
    #[Route('/sustainable-development-advice', name: 'app_sustainable_development_advice')]
    public function index(): Response
    {
        return $this->render('sustainable_development_advice/index.html.twig', [
            'controller_name' => 'SustainableDevelopmentAdviceController',
        ]);
    }
}
