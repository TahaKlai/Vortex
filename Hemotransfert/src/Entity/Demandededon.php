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
    #[ORM\Column(type: 'integer')]
    private $ID_Demande = null;
    
    #[ORM\Column(type: 'integer')]
    private $ID_Donateur = null;

    #[ORM\Column(type: 'datetime')]
    private $datedemande = null;

    #[ORM\Column(type: 'string')]
    private $typededon = null;

    #[ORM\Column(type: 'integer')]
    private $quantitedemande = null;

    #[ORM\Column(type: 'string')]
    private $statusdemande = null;
    
    public function getId(): ?int
    {
        return $this->ID_Demande;
    }
   

    public function getIDDemande(): ?int
    {
        return $this->ID_Demande;
    }

    public function setIDDemande(int $ID_Demande)
    {
        $this->ID_Demande = $ID_Demande;
        return $this; // You can still return $this without specifying return type
    }
    public function getIDDonateur(): ?int
    {
        return $this->ID_Donateur;
    }
    public function setIDDonateur(int $ID_Donateur)
    {
        $this->ID_Donateur = $ID_Donateur;
        return $this;
    }

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande)
    {
        $this->datedemande = $datedemande;
        return $this;
    }
    public function getTypededon(): ?string
    {
        return $this->typededon;
    }
    public function setTypededon(string $typededon)
    {
        $this->typededon = $typededon;
        return $this;
    }
    public function getQuantitedemande(): ?string
    {
        return $this->quantitedemande;
    }

    public function setQuantitedemande(string $quantitedemande)
    {
        $this->quantitedemande = $quantitedemande;
        return $this;
    }
    public function getStatusdemande(): ?string
    {
        return $this->statusdemande;
    }
    public function setStatusdemande(string $statusdemande)
    {
        $this->statusdemande = $statusdemande;
        return $this;
    }
}

