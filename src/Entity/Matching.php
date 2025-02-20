<?php
namespace App\Entity;

use App\Repository\MatchingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MatchingRepository::class)]
class Matching
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Validation: Max value of 100 for score_compatibilite
    #[ORM\Column]
    #[Assert\Range(
        min: 0,
        max: 100,
        notInRangeMessage: 'The score must be between {{ min }} and {{ max }}.'
    )]
    private ?float $score_compatibilite = null;

    // Validation: Min length of 5 for status
    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 5,
        minMessage: 'The status must be at least {{ limit }} characters long.'
    )]
    private ?string $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_matching = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScoreCompatibilite(): ?float
    {
        return $this->score_compatibilite;
    }

    public function setScoreCompatibilite(float $score_compatibilite): static
    {
        $this->score_compatibilite = $score_compatibilite;

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

    public function getDateMatching(): ?\DateTimeInterface
    {
        return $this->date_matching;
    }

    public function setDateMatching(?\DateTimeInterface $date_matching): static
    {
        $this->date_matching = $date_matching;

        return $this;
    }
}
