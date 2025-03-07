<?php



namespace App\Entity;

use App\Repository\ReplyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReplyRepository::class)]
class Reply
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_user = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le contenu ne doit pas etre vide")]
    private ?string $contenu = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_reponse = null;

    #[ORM\ManyToOne(inversedBy: 'replies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Experience $id_exp = null;

    public function __construct()
    {
        
        $this->date_reponse= new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateReponse(): ?\DateTimeInterface
    {
        return $this->date_reponse;
    }

    public function setDateReponse(\DateTimeInterface $date_reponse): static
    {
        $this->date_reponse = new \DateTime();

        return $this;
    }

    public function getIdExp(): ?Experience
    {
        return $this->id_exp;
    }

    public function setIdExp(?Experience $id_exp): static
    {
        $this->id_exp = $id_exp;

        return $this;
    }
}
