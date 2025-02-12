<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_event = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $organisateur_nom = null;

    #[ORM\Column]
    private ?int $nombre_max_participants = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $ticket_prix = null;

    #[ORM\Column(length: 255)]
    private ?string $periode_inscription_fin = null;

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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getOrganisateurNom(): ?string
    {
        return $this->organisateur_nom;
    }

    public function setOrganisateurNom(string $organisateur_nom): static
    {
        $this->organisateur_nom = $organisateur_nom;

        return $this;
    }

    public function getNombreMaxParticipants(): ?int
    {
        return $this->nombre_max_participants;
    }

    public function setNombreMaxParticipants(int $nombre_max_participants): static
    {
        $this->nombre_max_participants = $nombre_max_participants;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getTicketPrix(): ?string
    {
        return $this->ticket_prix;
    }

    public function setTicketPrix(string $ticket_prix): static
    {
        $this->ticket_prix = $ticket_prix;

        return $this;
    }

    public function getPeriodeInscriptionFin(): ?string
    {
        return $this->periode_inscription_fin;
    }

    public function setPeriodeInscriptionFin(string $periode_inscription_fin): static
    {
        $this->periode_inscription_fin = $periode_inscription_fin;

        return $this;
    }
}
