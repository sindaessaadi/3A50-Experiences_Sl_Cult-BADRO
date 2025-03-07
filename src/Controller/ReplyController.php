<?php


namespace App\Controller;

use App\Entity\Reply;
use App\Form\ReplyType;
use App\Repository\ReplyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reply')]
final class ReplyController extends AbstractController
{
    #[Route(name: 'app_reply_index', methods: ['GET'])]
    public function index(Request $request, ReplyRepository $replyRepository): Response
    {
        // Get sorting parameters (default is 'asc')
        $sortFieldId = $request->query->get('sort_id', 'asc');
        $sortFieldIdUser = $request->query->get('sort_idUser', 'asc');
        $sortFieldContenu = $request->query->get('sort_contenu', 'asc');
        $sortFieldDateReponse = $request->query->get('sort_dateReponse', 'asc');
    
        // Fetch replies sorted by each specific field
        $replies = $replyRepository->findBy([], [
            'id' => $sortFieldId,
            'id_user' => $sortFieldIdUser,
            'contenu' => $sortFieldContenu,
            'date_reponse' => $sortFieldDateReponse,
        ]);
    
        return $this->render('reply/index.html.twig', [
            'replies' => $replies,
            'sort_id' => $sortFieldId,
            'sort_idUser' => $sortFieldIdUser,
            'sort_contenu' => $sortFieldContenu,
            'sort_dateReponse' => $sortFieldDateReponse,
        ]);
    }
    #[Route('/average-replies-per-experience', name: 'app_reply_average_replies', methods: ['GET'])]
    public function averageRepliesPerExperience(ReplyRepository $replyRepository, EntityManagerInterface $entityManager): Response
    {
        // Fetch replies grouped by experience (id_exp)
        $query = $entityManager->createQuery(
            'SELECT e.id AS experience_id, COUNT(r.id) AS reply_count
            FROM App\Entity\Reply r
            JOIN r.id_exp e
            GROUP BY e.id'
        );

        $result = $query->getResult();

        // Calculate the average replies per experience
        $totalReplies = 0;
        $totalExperiences = count($result);

        foreach ($result as $row) {
            $totalReplies += $row['reply_count'];
        }

        $averageReplies = $totalExperiences > 0 ? $totalReplies / $totalExperiences : 0;

        return $this->render('reply/average_replies_per_experience.html.twig', [
            'averageReplies' => $averageReplies,
            'replyStats' => $result, // This will contain the number of replies per experience
        ]);
    }
    

    #[Route('/new', name: 'app_reply_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reply = new Reply();
        $reply->setDateReponse(new \DateTime());
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reply);
            $entityManager->flush();

            return $this->redirectToRoute('app_reply_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reply/new.html.twig', [
            'reply' => $reply,
            'form' => $form,
        ]);
    }

#[Route('/{id}', name: 'app_reply_show', methods: ['GET'])]
    public function show(Reply $reply): Response
    {
        return $this->render('reply/show.html.twig', [
            'reply' => $reply,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reply_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reply $reply, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reply_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reply/edit.html.twig', [
            'reply' => $reply,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_reply_delete', methods: ['POST'])]
    public function delete(Request $request, Reply $reply, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reply->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reply);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reply_index', [], Response::HTTP_SEE_OTHER);
    }
    // src/Controller/ReplyController.php

   
}

