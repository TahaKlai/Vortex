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
    private $id = null;

    #[ORM\Column]
    private $ID_Reservation = null;

    #[ORM\Column]
    private $ID_Demande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private $datereservation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private $heurereservation = null;

    #[ORM\Column(length: 255)]
    private $quantitereserve = null;

    #[ORM\Column(length: 255)]
    private $statusreservation = null;

    #[ORM\Column(length: 255)]
    private $commentaire = null;

    #[ORM\Column(length: 10)]
    private $cas = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getIDReservation(): ?int
    {
        return $this->ID_Reservation;
    }

    public function setIDReservation(int $ID_Reservation)
    {
        $this->ID_Reservation = $ID_Reservation;

        return $this;
    }

    public function getIDDemande(): ?int
    {
        return $this->ID_Demande;
    }

    public function setIDDemande(int $ID_Demande)
    {
        $this->ID_Demande = $ID_Demande;

        return $this;
    }

    public function getDatereservation(): ?\DateTimeInterface
    {
        return $this->datereservation;
    }

    public function setDatereservation(\DateTimeInterface $datereservation)
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    public function getHeurereservation(): ?\DateTimeInterface
    {
        return $this->heurereservation;
    }

    public function setHeurereservation(\DateTimeInterface $heurereservation)
    {
        $this->heurereservation = $heurereservation;

        return $this;
    }

    public function getQuantitereserve(): ?string
    {
        return $this->quantitereserve;
    }

    public function setQuantitereserve(string $quantitereserve)
    {
        $this->quantitereserve = $quantitereserve;

        return $this;
    }

    public function getStatusreservation(): ?string
    {
        return $this->statusreservation;
    }

    public function setStatusreservation(string $statusreservation)
    {
        $this->statusreservation = $statusreservation;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getCas(): ?string
    {
        return $this->cas;
    }

    public function setCas(string $cas)
    {
        $this->cas = $cas;

        return $this;
    }
}
