<?php

namespace App\Controller;

use App\Entity\Experience;
use App\Form\ExperienceType;
use App\Repository\ExperienceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/experience')]
final class ExperienceController extends AbstractController
{
    #[Route('/', name: 'app_experience_index')]
    public function index(Request $request, ExperienceRepository $experienceRepository): Response
    {
        // Get sorting parameters from the query (default is 'asc')
        $sortFieldTitre = $request->query->get('sort_titre', 'asc');
        $sortFieldContenu = $request->query->get('sort_contenu', 'asc');
        $sortFieldDatePublication = $request->query->get('sort_datePublication', 'asc');
        $sortFieldEvaluation = $request->query->get('sort_evaluation', 'asc');
        
        // Get the search query from the request
        $searchTitre = $request->query->get('search_titre', '');
    
        // Fetch experiences, applying the search filter if necessary
        $experiences = $experienceRepository->findByTitreSearch($searchTitre, [
            'titre' => $sortFieldTitre,
            'contenu' => $sortFieldContenu,
            'date_publication' => $sortFieldDatePublication,
            'evaluation' => $sortFieldEvaluation,
        ]);
    
        return $this->render('experience/index.html.twig', [
            'experiences' => $experiences,
            'sort_titre' => $sortFieldTitre,
            'sort_contenu' => $sortFieldContenu,
            'sort_datePublication' => $sortFieldDatePublication,
            'sort_evaluation' => $sortFieldEvaluation,
            'search_titre' => $searchTitre,  // Pass the search term to the view
        ]);
    }

    #[Route('/stats', name: 'experience_stats')]
    public function experienceStats(ExperienceRepository $repository): Response
    {
        $counts = [];
    
        // Loop through all evaluation values (1, 2, 3, 4, 5)
        for ($i = 1; $i <= 5; $i++) {
            $counts[$i] = $repository->countByEvaluation($i); // Get the count for each evaluation
        }

        return $this->render('experience/stats.html.twig', [
            'counts' => $counts,
        ]);
    }

    #[Route('/new', name: 'app_experience_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $experience = new Experience();
        $experience->setDatePublication(new \DateTime());
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($experience);
            $entityManager->flush();

            return $this->redirectToRoute('app_experience_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('experience/new.html.twig', [
            'experience' => $experience,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_experience_show', methods: ['GET'])]
    public function show(Experience $experience): Response
    {
        return $this->render('experience/show.html.twig', [
            'experience' => $experience,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_experience_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Experience $experience, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_experience_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('experience/edit.html.twig', [
            'experience' => $experience,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_experience_delete', methods: ['POST'])]
    public function delete(Request $request, Experience $experience, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$experience->getId(), $request->request->get('_token'))) {
            $entityManager->remove($experience);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_experience_index', [], Response::HTTP_SEE_OTHER);
    }
}
