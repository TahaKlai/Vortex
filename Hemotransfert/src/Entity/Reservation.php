<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[Broadcast]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ID_Reservation = null;

    #[ORM\Column]
    private ?int $ID_Demande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datereservation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heurereservation = null;

    #[ORM\Column(length: 255)]
    private ?string $quantitereserve = null;

    #[ORM\Column(length: 255)]
    private ?string $statusreservation = null;

    #[ORM\Column(length: 255)]
    private ?string $cas = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIDReservation(): ?int
    {
        return $this->ID_Reservation;
    }

    public function setIDReservation(int $ID_Reservation): static
    {
        $this->ID_Reservation = $ID_Reservation;

        return $this;
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

    public function getDatereservation(): ?\DateTimeInterface
    {
        return $this->datereservation;
    }

    public function setDatereservation(\DateTimeInterface $datereservation): static
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    public function getHeurereservation(): ?\DateTimeInterface
    {
        return $this->heurereservation;
    }

    public function setHeurereservation(\DateTimeInterface $heurereservation): static
    {
        $this->heurereservation = $heurereservation;

        return $this;
    }

    public function getQuantitereserve(): ?string
    {
        return $this->quantitereserve;
    }

    public function setQuantitereserve(string $quantitereserve): static
    {
        $this->quantitereserve = $quantitereserve;

        return $this;
    }

    public function getStatusreservation(): ?string
    {
        return $this->statusreservation;
    }

    public function setStatusreservation(string $statusreservation): static
    {
        $this->statusreservation = $statusreservation;

        return $this;
    }

    public function getCas(): ?string
    {
        return $this->cas;
    }

    public function setCas(string $cas): static
    {
        $this->cas = $cas;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}
