<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    #[Route('/Frontend/home', name: 'app_home_frontend')]
    public function indexFrontend(): Response
    {
        return $this->render('Frontend/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/Backend/home', name: 'app_home_backend')]
    public function indexBackend(): Response
    {
        return $this->render('Backend/home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
