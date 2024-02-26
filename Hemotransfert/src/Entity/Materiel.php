<?php

namespace App\Entity;

use App\Repository\MaterielRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MaterielRepository::class)]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 60)]
    #[Assert\NotBlank(message:"Le type de matériel ne peut pas être vide")]
    #[Assert\Length(max:60, maxMessage:"Le type de matériel ne peut pas dépasser {{ limit }} caractères")]
    private ?string $typeM = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"La description du matériel ne peut pas être vide")]
    #[Assert\Length(max:255, maxMessage:"La description du matériel ne peut pas dépasser {{ limit }} caractères")]
    private ?string $descriptionM = null;

    #[ORM\Column]
    #[Assert\NotNull(message:"La quantité de matériel ne peut pas être vide")]
    #[Assert\Type(type:"integer", message:"La quantité de matériel doit être un nombre entier")]
    private ?int $quantiteM = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message:"La date d'expiration ne peut pas être vide")]
    #[Assert\Type(type:"\DateTimeInterface", message:"La date d'expiration doit être une date valide")]
    private ?\DateTimeInterface $dateexpM = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le statut du matériel ne peut pas être vide")]
    #[Assert\Length(max:255, maxMessage:"Le statut du matériel ne peut pas dépasser {{ limit }} caractères")]
    private ?string $statutM = null;

    // #[ORM\Column(length: 255, nullable:true)]

    // private ?string $photoM = null;

    #[ORM\ManyToOne(inversedBy: 'Materiels')]
    private ?Livreur $livreur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeM(): ?string
    {
        return $this->typeM;
    }

    public function setTypeM(string $typeM): static
    {
        $this->typeM = $typeM;

        return $this;
    }

    public function getDescriptionM(): ?string
    {
        return $this->descriptionM;
    }

    public function setDescriptionM(string $descriptionM): static
    {
        $this->descriptionM = $descriptionM;

        return $this;
    }

    public function getQuantiteM(): ?int
    {
        return $this->quantiteM;
    }

    public function setQuantiteM(int $quantiteM): static
    {
        $this->quantiteM = $quantiteM;

        return $this;
    }

    public function getDateexpM(): ?\DateTimeInterface
    {
        return $this->dateexpM;
    }

    public function setDateexpM(\DateTimeInterface $dateexpM): static
    {
        $this->dateexpM = $dateexpM;

        return $this;
    }

    public function getStatutM(): ?string
    {
        return $this->statutM;
    }

    public function setStatutM(string $statutM): static
    {
        $this->statutM = $statutM;

        return $this;
    }


    

    // public function getPhotoM(): ?string
    // {
    //     return $this->photoM;
    // }

    // public function setPhotoM(?string $photoM): self
    // {
    //     $this->photoM = $photoM;

    //     return $this;
    // }
    // public function getPhotoM(): ?string
    // {
    //     return $this->photoM;
    // }

    // public function setPhotoM(?string $photoM): static
    // {
    //     $this->photoM = $photoM;

    //     return $this;
    // }

    public function getLivreur(): ?Livreur
    {
        return $this->livreur;
    }

    public function setLivreur(?Livreur $livreur): static
    {
        $this->livreur = $livreur;

        return $this;
    }
}
