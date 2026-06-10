<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StrategicAdviceController extends AbstractController
{
    #[Route('/strategic_advice', name: 'app_strategic_advice')]
    public function index(): Response
    {
        return $this->render('strategic_advice/index.html.twig', [
            'controller_name' => 'StrategicAdviceController',
        ]);
    }
}
