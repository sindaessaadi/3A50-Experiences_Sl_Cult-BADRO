<?php




namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank]
    #[ORM\Column(length: 75)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $contenu = null;
   
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_publication = null;

    #[ORM\Column]
    #[Assert\NotBlank]

    private ?int $evaluation = null;

    #[ORM\Column]
    private ?int $id_user = null;

    /**
     * @var Collection<int, Reply>
     */
    
    #[ORM\OneToMany(targetEntity: Reply::class, mappedBy: 'id_exp', orphanRemoval: true)]
    private Collection $replies;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
        $this->date_publication = new \DateTime();
    }

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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_publication;
    }

    public function setDatePublication(\DateTimeInterface $date_publication): static
    {
         $this->date_publication = new \DateTime();

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(int $evaluation): static
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): static
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * @return Collection<int, Reply>
*/
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(Reply $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setIdExp($this);
        }

        return $this;
    }

    public function removeReply(Reply $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getIdExp() === $this) {
                $reply->setIdExp(null);
            }
        }

        return $this;
    }
} 