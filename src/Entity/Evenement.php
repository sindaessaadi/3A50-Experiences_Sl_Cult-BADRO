<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre ne peut pas être vide.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "Le titre doit contenir au moins {{ limit }} caractères.")]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description ne peut pas être vide.")]
    #[Assert\Length(min: 10, max: 255, minMessage: "La description doit contenir au moins {{ limit }} caractères.")]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date ne peut pas être vide.")]
    #[Assert\Type("\DateTimeInterface", message: "La date doit être une date valide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure ne peut pas être vide.")]
    #[Assert\Type("\DateTimeInterface", message: "L'heure doit être une heure valide.")]
    private ?\DateTimeInterface $heure = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le lieu ne peut pas être vide.")]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type ne peut pas être vide.")]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom de l'organisateur ne peut pas être vide.")]
    private ?string $organisateur_nom = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le nombre maximum de participants ne peut pas être vide.")]
    #[Assert\Positive(message: "Le nombre maximum de participants doit être un nombre positif.")]
    private ?int $nombre_max_participants = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut ne peut pas être vide.")]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le prix du ticket ne peut pas être vide.")]
    private ?string $ticket_prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La fin de la période d'inscription ne peut pas être vide.")]
    private ?string $periode_inscription_fin = null;

    public function getId(): ?int
    {
        return $this->id;
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