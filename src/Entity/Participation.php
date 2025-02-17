<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_event = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_participant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_inscription = null;
    
    #[ORM\Column(length: 255)]
    private ?string $evenement_nom = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getIdEvent(): ?int
    {
        return $this->id_event;
    }

    public function setIdEvent(int $id_event): static
    {
        $this->id_event = $id_event;

        return $this;
    }

    public function getNomParticipant(): ?string
    {
        return $this->nom_participant;
    }

    public function setNomParticipant(string $nom_participant): static
    {
        $this->nom_participant = $nom_participant;

        return $this;
    }

    public function getDateInscription(): ?\DateTime
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTime $date): self
    {
        $this->date_inscription = $date;
        return $this;
    }

    public function getEvenementNom(): ?string
    {
        return $this->evenement_nom;
    }

    public function setEvenementNom(string $evenement_nom): static
    {
        $this->evenement_nom = $evenement_nom;

        return $this;
    }

    public function __construct()
{
    $this->date_inscription = new \DateTime(); // Automatically set current date
}

    

}
