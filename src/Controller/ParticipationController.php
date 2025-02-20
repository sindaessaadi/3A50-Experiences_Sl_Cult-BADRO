<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Participation;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/Frontend/participation')]
final class ParticipationController extends AbstractController
{
    #[Route(name: 'app_participation_index', methods: ['GET'])]
    public function index(ParticipationRepository $participationRepository): Response
    {
        return $this->render('Frontend/participation/index.html.twig', [
            'participations' => $participationRepository->findAll(),
        ]);
    }

    #[Route('/buy/{id}', name: 'participation_buy', methods: ['GET', 'POST'])]
    public function buyTicket(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
    {
        
        
        
        if (!$evenement) {
            throw $this->createNotFoundException('Event not found.');
        }
        

        if ($evenement->getNombreMaxParticipants() <= 0) {
            $this->addFlash('danger', 'Sorry, this event is sold out!');
            return $this->redirectToRoute('evenement_index');
        }

        $participation = new Participation();
        
       
        $participation->setIdEvent($evenement->getId()); 
        $participation->setEvenementNom($evenement->getTitre());  
        $participation->setDateInscription(new \DateTime());
        $participation->setTicketCode($this->generateTicketCode()); 

       $form = $this->createForm(ParticipationType::class, $participation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $evenement->setNombreMaxParticipants($evenement->getNombreMaxParticipants() - 1);

        
        $em->persist($participation);
        $em->persist($evenement);
        $em->flush();

        $this->addFlash('success', 'Ticket successfully purchased!');
        return $this->redirectToRoute('app_participation_index');
    }

        return $this->render('Frontend/participation/buy.html.twig', [
            'form' => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

   
    private function generateTicketCode(): string
    {
        return bin2hex(random_bytes(5)); 
    }


    #[Route('/{id}', name: 'app_participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('Frontend/participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_participation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        
        $originalEvent = $participation->getIdEvent();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $participation->setTicketCode($this->generateTicketCode()); 

            
            $entityManager->flush();

            return $this->redirectToRoute('app_participation_index');
        }

        return $this->render('Frontend/participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_participation_index');
    }
}
