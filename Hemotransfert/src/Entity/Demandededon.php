<?php

namespace App\Entity;

use App\Repository\DemandededonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: DemandededonRepository::class)]
#[Broadcast]
class Demandededon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ID_Demande = null;

    #[ORM\Column]
    private ?int $ID_Donateur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedemande = null;

    #[ORM\Column(length: 255)]
    private ?string $typedon = null;

    #[ORM\Column(length: 255)]
    private ?string $quantitedemande = null;

    #[ORM\Column(length: 255)]
    private ?string $statusdemande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDDemande(): ?int
    {
        return $this->ID_Demande;
    }

    public function setIDDemande(int $ID_Demande): static
    {
        $this->ID_Demande = $ID_Demande;

        return $this;
    }

    public function getIDDonateur(): ?int
    {
        return $this->ID_Donateur;
    }

    public function setIDDonateur(int $ID_Donateur): static
    {
        $this->ID_Donateur = $ID_Donateur;

        return $this;
    }

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande): static
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getTypedon(): ?string
    {
        return $this->typedon;
    }

    public function setTypedon(string $typedon): static
    {
        $this->typedon = $typedon;

        return $this;
    }

    public function getQuantitedemande(): ?string
    {
        return $this->quantitedemande;
    }

    public function setQuantitedemande(string $quantitedemande): static
    {
        $this->quantitedemande = $quantitedemande;

        return $this;
    }

    public function getStatusdemande(): ?string
    {
        return $this->statusdemande;
    }

    public function setStatusdemande(string $statusdemande): static
    {
        $this->statusdemande = $statusdemande;

        return $this;
    }
}
