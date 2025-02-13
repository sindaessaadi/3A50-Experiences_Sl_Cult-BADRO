<?php

namespace App\Controller;

use App\Entity\Participation;
use App\Entity\Evenement;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/participation')]
class ParticipationController extends AbstractController
{
    #[Route('/', name: 'participation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $participations = $em->getRepository(Participation::class)->findAll();
        return $this->render('participation/index.html.twig', compact('participations'));
    }

    #[Route('/buy/{id}', name: 'participation_buy', methods: ['GET', 'POST'])]
    public function buyTicket(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
{
    $participation = new Participation();
    $participation->setIdEvent($evenement->getIdEvent());
    $participation->setEvenementNom($evenement->getTitre());
    $participation->setDateInscription(new \DateTime());

    dump($participation); // Debugging: Inspect the Participation object

    $form = $this->createForm(ParticipationType::class, $participation);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($participation);
        $em->flush();
        $this->addFlash('success', 'Ticket successfully purchased!');
        return $this->redirectToRoute('participation_index');
    }

    return $this->render('participation/buy.html.twig', [
        'form' => $form->createView(),
        'evenement' => $evenement,
    ]);
}

    #[Route('/{id}', name: 'participation_show', methods: ['GET'])]
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', compact('participation'));
    }

    #[Route('/{id}/delete', name: 'participation_delete', methods: ['POST'])]
    public function delete(Request $request, Participation $participation, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $participation->getIdParticipant(), $request->request->get('_token'))) {
            $event = $em->getRepository(Evenement::class)->find($participation->getIdEvent());

            if ($event) {
                $event->setNombreMaxParticipants($event->getNombreMaxParticipants() + 1); // Restore available spot
                $em->persist($event);
            }

            $em->remove($participation);
            $em->flush();
        }
        return $this->redirectToRoute('participation_index');
    }
}
