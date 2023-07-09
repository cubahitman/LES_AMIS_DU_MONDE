<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Proget2Controller extends AbstractController
{
    #[Route('/proget2', name: 'app_proget2')]
    public function index(): Response
    {
        return $this->render('proget2/index.html.twig', [
            'controller_name' => 'Proget2Controller',
        ]);
    }
}
