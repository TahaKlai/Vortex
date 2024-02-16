<?php

namespace App\Entity;

use App\Repository\VolunteerRepository;
use App\Entity\Volunteer;
use App\Form\VolunteerType;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VolunteerRepository::class)]
class Volunteer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id_v;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom complet est requis.")]
    private $full_name;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'adresse du volontaire est requise.")]
    private $volunteer_address;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
    #[Assert\Regex(pattern: "/^\d+$/", message: "Le numéro de téléphone doit être un nombre positif.")]
    private $phone_number;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'adresse e-mail est requise.")]
    #[Assert\Email(message: "Veuillez saisir une adresse e-mail valide.")]
    private $email_address;

    #[ORM\Column(type: "date")]
    #[Assert\NotBlank(message: "La date de naissance est requise.")]
    private $date_of_birth;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "La profession est requise.")]
    private $occupation;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Les compétences sont requises.")]
    private $skills;

    #[ORM\Column(type: "boolean")]
    private $availability;

    public function getIdV(): ?int
    {
        return $this->id_v;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): self
    {
        $this->full_name = $full_name;

        return $this;
    }

    public function getVolunteerAddress(): ?string
    {
        return $this->volunteer_address;
    }

    public function setVolunteerAddress(string $volunteer_address): self
    {
        $this->volunteer_address = $volunteer_address;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->email_address;
    }

    public function setEmailAddress(string $email_address): self
    {
        $this->email_address = $email_address;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }
}
