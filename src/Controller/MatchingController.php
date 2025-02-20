<?php

namespace App\Controller;

use App\Entity\Matching;
use App\Form\MatchingType;
use App\Repository\MatchingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/Frontend/matching')]
#[Route('/Backend/matching')]
final class MatchingController extends AbstractController
{
    #[Route(name: 'app_matching_index', methods: ['GET'])]
    public function index(MatchingRepository $matchingRepository, Request $request): Response
    {
        $routePrefix = $request->attributes->get('_route_prefix');

        $template = match ($routePrefix) {
            '/Frontend/matching' => 'Frontend/matching/index.html.twig',
            '/Backend/matching' => 'Backend/matching/index.html.twig',
            default => 'matching/index.html.twig',
        };

        return $this->render($template, [
            'matchings' => $matchingRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_matching_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $routePrefix = $request->attributes->get('_route_prefix');

        $matching = new Matching();
        $form = $this->createForm(MatchingType::class, $matching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Validate the Matching entity manually
            $errors = $validator->validate($matching);

            if (count($errors) > 0) {
                // If there are validation errors, return to the form and display the errors
                $template = match ($routePrefix) {
                    '/Frontend/matching' => 'Frontend/matching/new.html.twig',
                    '/Backend/matching' => 'Backend/matching/new.html.twig',
                    default => 'matching/new.html.twig',
                };

                return $this->render($template, [
                    'matching' => $matching,
                    'form' => $form,
                    'errors' => $errors,
                ]);
            }

            // Persist the entity if no validation errors
            $entityManager->persist($matching);
            $entityManager->flush();

            return $this->redirectToRoute('app_matching_index', [], Response::HTTP_SEE_OTHER);
        }

        $template = match ($routePrefix) {
            '/Frontend/matching' => 'Frontend/matching/new.html.twig',
            '/Backend/matching' => 'Backend/matching/new.html.twig',
            default => 'matching/new.html.twig',
        };

        return $this->render($template, [
            'matching' => $matching,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matching_show', methods: ['GET'])]
    public function show(Matching $matching, Request $request): Response
    {
        $routePrefix = $request->attributes->get('_route_prefix');

        $template = match ($routePrefix) {
            '/Frontend/matching' => 'Frontend/matching/show.html.twig',
            '/Backend/matching' => 'Backend/matching/show.html.twig',
            default => 'matching/show.html.twig',
        };

        return $this->render($template, [
            'matching' => $matching,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_matching_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Matching $matching, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $routePrefix = $request->attributes->get('_route_prefix');

        $form = $this->createForm(MatchingType::class, $matching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Validate the Matching entity manually
            $errors = $validator->validate($matching);

            if (count($errors) > 0) {
                // If there are validation errors, return to the form and display the errors
                $template = match ($routePrefix) {
                    '/Frontend/matching' => 'Frontend/matching/edit.html.twig',
                    '/Backend/matching' => 'Backend/matching/edit.html.twig',
                    default => 'matching/edit.html.twig',
                };

                return $this->render($template, [
                    'matching' => $matching,
                    'form' => $form,
                    'errors' => $errors,
                ]);
            }

            // Save the updated entity
            $entityManager->flush();

            return $this->redirectToRoute('app_matching_index', [], Response::HTTP_SEE_OTHER);
        }

        $template = match ($routePrefix) {
            '/Frontend/matching' => 'Frontend/matching/edit.html.twig',
            '/Backend/matching' => 'Backend/matching/edit.html.twig',
            default => 'matching/edit.html.twig',
        };

        return $this->render($template, [
            'matching' => $matching,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_matching_delete', methods: ['POST'])]
    public function delete(Request $request, Matching $matching, EntityManagerInterface $entityManager): Response
    {
        // Correct CSRF token check (request->get('_token'))
        if ($this->isCsrfTokenValid('delete'.$matching->getId(), $request->request->get('_token'))) {
            $entityManager->remove($matching);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matching_index', [], Response::HTTP_SEE_OTHER);
    }
}
