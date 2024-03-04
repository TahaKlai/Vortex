<?php

namespace App\Entity;

use App\Repository\LivreurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LivreurRepository::class)]
class Livreur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank(message: "Le champ CIN ne doit pas être vide")]
    #[Assert\Type(type: 'integer', message: "Le champ CIN doit être un entier")]
    #[ORM\Column]
    private ?int $cin = null;

    #[Assert\NotBlank(message: "Le champ Nom ne doit pas être vide")]
    #[Assert\Length(max: 255, maxMessage: "Le champ Nom ne doit pas dépasser {{ limit }} caractères")]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message: "Le champ Prénom ne doit pas être vide")]
    #[Assert\Length(max: 255, maxMessage: "Le champ Prénom ne doit pas dépasser {{ limit }} caractères")]
    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[Assert\NotBlank(message: "Le champ Téléphone ne doit pas être vide")]
    #[Assert\Type(type: 'integer', message: "Le champ Téléphone doit être un entier")]
    #[ORM\Column]
    private ?int $tel = null;

    #[Assert\NotBlank(message: "Le champ Email ne doit pas être vide")]
    #[Assert\Email(message: "Le champ Email doit être une adresse email valide")]
    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[Assert\NotBlank(message: "Le champ Statut ne doit pas être vide")]
    #[ORM\Column(length: 255)]
    private ?string $statutL = null;

    #[Assert\NotBlank(message: "Le champ Zone de livraison ne doit pas être vide")]
    #[ORM\Column(length: 255)]
    private ?string $zoneLiv = null;

    #[ORM\OneToMany(targetEntity: Materiel::class, mappedBy: 'livreur')]
    private Collection $Materiels;

    public function __construct()
    {
        $this->Materiels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getStatutL(): ?string
    {
        return $this->statutL;
    }

    public function setStatutL(string $statutL): static
    {
        $this->statutL = $statutL;

        return $this;
    }

    public function getZoneLiv(): ?string
    {
        return $this->zoneLiv;
    }

    public function setZoneLiv(string $zoneLiv): static
    {
        $this->zoneLiv = $zoneLiv;

        return $this;
    }

    /**
     * @return Collection<int, Materiel>
     */
    public function getMateriels(): Collection
    {
        return $this->Materiels;
    }

    public function addMateriel(Materiel $materiel): static
    {
        if (!$this->Materiels->contains($materiel)) {
            $this->Materiels->add($materiel);
            $materiel->setLivreur($this);
        }

        return $this;
    }

    public function removeMateriel(Materiel $materiel): static
    {
        if ($this->Materiels->removeElement($materiel)) {
            // set the owning side to null (unless already changed)
            if ($materiel->getLivreur() === $this) {
                $materiel->setLivreur(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNom(); // Supposons que 'nom' est une propriété de votre entité Livreur
    }
}
