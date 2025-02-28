<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Preferences;
use App\Form\PreferencesFormType;

#[Route('/Frontend/preferences')]

final class PreferencesController extends AbstractController
{
    // Injection de l'EntityManager dans le constructeur
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    } 

    #[Route('/Frontend/preferences', name: 'app_preferences')]
    public function index(Request $request): Response
    {
        $preferences = new Preferences();
        // Create the form
        $form = $this->createForm(PreferencesFormType::class,$preferences);

        // Handle form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$entityManager = $this->getDoctrine()->getManager();
            $this->entityManager->persist($preferences);
            $this->entityManager->flush();

        
            return $this->redirectToRoute('app_preferences');
        }
        

        // Render the form view
        return $this->render('Frontend/preferences/pref.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
