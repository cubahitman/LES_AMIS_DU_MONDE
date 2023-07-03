<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SidebarLeftController extends AbstractController
{
    #[Route('/sidebar_left', name: 'app_sidebar_left')]
    public function index(): Response
    {
        return $this->render('sidebar_left/index.html.twig', [
            'controller_name' => 'SidebarLeftController',
        ]);
    }
}
