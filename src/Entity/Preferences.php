<?php

namespace App\Entity;

use App\Repository\PreferencesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PreferencesRepository::class)]
class Preferences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select at least one country.")]
    private ?string $Country = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select at least one domain.")]
    private ?string $Domain = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select at least one language.")]
    private ?string $Preferred_Language = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select a teaching mode.")]
    private ?string $Teaching_Mode = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select at least one university type.")]
    private ?string $University_Type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select at least one cultural activity.")]
    private ?string $Cultural_Activities = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please select a preferred climate.")]
    private ?string $climat_pref = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please enter a language level.")]
    #[Assert\Regex(
        pattern: "/^(A1|A2|B1|B2|C1|C2)$/",
        message: "Language level must be A1, A2, B1, B2, C1, or C2."
    )]
    private ?string $Language_Level = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): static
    {
        $this->Country = $Country;
        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->Domain;
    }

    public function setDomain(string $Domain): static
    {
        $this->Domain = $Domain;
        return $this;
    }

    public function getPreferredLanguage(): ?string
    {
        return $this->Preferred_Language;
    }

    public function setPreferredLanguage(string $Preferred_Language): static
    {
        $this->Preferred_Language = $Preferred_Language;
        return $this;
    }

    public function getTeachingMode(): ?string
    {
        return $this->Teaching_Mode;
    }

    public function setTeachingMode(string $Teaching_Mode): static
    {
        $this->Teaching_Mode = $Teaching_Mode;
        return $this;
    }

    public function getUniversityType(): ?string
    {
        return $this->University_Type;
    }

    public function setUniversityType(string $University_Type): static
    {
        $this->University_Type = $University_Type;
        return $this;
    }

    public function getCulturalActivities(): ?string
    {
        return $this->Cultural_Activities;
    }

    public function setCulturalActivities(string $Cultural_Activities): static
    {
        $this->Cultural_Activities = $Cultural_Activities;
        return $this;
    }

    public function getClimatPref(): ?string
    {
        return $this->climat_pref;
    }

    public function setClimatPref(string $climat_pref): static
    {
        $this->climat_pref = $climat_pref;
        return $this;
    }

    public function getLanguageLevel(): ?string
    {
        return $this->Language_Level;
    }

    public function setLanguageLevel(string $Language_Level): static
    {
        $this->Language_Level = $Language_Level;
        return $this;
    }
}
