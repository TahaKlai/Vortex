<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Company;
use App\Form\CompanyType;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
 
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $ID_c;
    
        #[ORM\Column(length: 255)]
        #[Assert\NotBlank(message:"Le nom de la compagnie est requis.")]
        #[Assert\Length(max: 255, maxMessage:"Le nom de la compagnie ne peut pas dépasser {{ limit }} caractères.")]
        private ?string $Nom_c;
    
        #[ORM\Column(length: 255)]
        #[Assert\NotBlank(message:"L'adresse est requise.")]
        #[Assert\Length(max: 255, maxMessage:"L'adresse ne peut pas dépasser {{ limit }} caractères.")]
        private ?string $Adresse;
    
        #[ORM\Column]
#[Assert\NotBlank(message: "Le numéro de téléphone est requis.")]
#[Assert\Regex(pattern: '/^\d+$/', message: "Le numéro de téléphone doit être un nombre positif.")]
private ?int $Num_tel;
    
        #[ORM\Column(length: 255)]
        #[Assert\NotBlank(message:"L'adresse e-mail est requise.")]
        #[Assert\Email(message:"Veuillez saisir une adresse e-mail valide.")]
        private ?string $mail;
    
        #[ORM\Column(length: 255)]
        #[Assert\Url(message:"Veuillez saisir une URL valide pour le site web.")]
        private ?string $Site_Web;
    
        #[ORM\Column(length: 255)]
        #[Assert\Length(max: 255, maxMessage:"Le pays ne peut pas dépasser {{ limit }} caractères.")]
        private ?string $Pays_c;
    
        #[ORM\Column(length: 255)]
        #[Assert\Length(min: 10, maxMessage:"La description de la compagnie ne peut pas dépasser {{ limit }} caractères.")]
        private ?string $Description_c;


    public function getIDC(): ?int
    {
        return $this->ID_c;
    }


    public function getNomC(): ?string
    {
        return $this->Nom_c;
    }

    public function setNomC(string $Nom_c): static
    {
        $this->Nom_c = $Nom_c;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->Num_tel;
    }

    public function setNumTel(int $Num_tel): static
    {
        $this->Num_tel = $Num_tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->Site_Web;
    }

    public function setSiteWeb(string $Site_Web): static
    {
        $this->Site_Web = $Site_Web;

        return $this;
    }

    public function getPaysC(): ?string
    {
        return $this->Pays_c;
    }

    public function setPaysC(string $Pays_c): static
    {
        $this->Pays_c = $Pays_c;

        return $this;
    }

    public function getDescriptionC(): ?string
    {
        return $this->Description_c;
    }

    public function setDescriptionC(string $Description_c): static
    {
        $this->Description_c = $Description_c;

        return $this;
    }
	
/**
 * @ORM\ManyToMany(targetEntity="App\Entity\Volunteer", mappedBy="companies")
 */
private $volunteers;


    public function __construct()
    {
        $this->volunteers = new ArrayCollection();
    }
/**
 * @return Collection
 */
public function getVolunteers(): Collection
{
    return $this->volunteers ?? new ArrayCollection();
}
public function addVolunteer(Volunteer $volunteer): self
{
    if (!$this->volunteers->contains($volunteer)) {
        $this->volunteers[] = $volunteer;
        $volunteer->addCompany($this);
    }

    return $this;
}

public function removeVolunteer(Volunteer $volunteer): self
{
    if ($this->volunteers->removeElement($volunteer)) {
        $volunteer->removeCompany($this);
    }

    return $this;
}
}
