<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[assert\Email(message: 'The email is not a valid email.')]
    #[assert\NotBlank(message: 'The email is required.')]
    #[assert\Length(min: 5, max: 180, minMessage: 'The email must be at least 5 characters long.', maxMessage: 'The email cannot be longer than 180 characters.')]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[assert\Length(min: 5, max: 255, minMessage: 'The password must be at least 5 characters long.', maxMessage: 'The password cannot be longer than 255 characters.')]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    #[assert\NotBlank(message: 'The name is required.')]
    private ?string $name = null;

    #[ORM\Column(length: 50)]
    #[assert\NotBlank(message: 'The last name is required.')]
    private ?string $last_name = null;

    #[ORM\Column(length: 3)]
    #[assert\NotBlank(message: 'The groupesanguin is required.')]
    private ?string $groupesanguin = null;

    #[ORM\Column(length: 30)]
    #[assert\NotBlank(message: 'The type is required.')]
    private ?string $type = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[assert\length(max: 100, maxMessage: 'The adresse cannot be longer than 100 characters.')]
    private ?string $adresse = null;

    #[ORM\Column(length: 8, nullable: true)]
    #[assert\length(max: 8, maxMessage: 'The telephone cannot be longer than 8 characters.')]
    private ?string $telephone = null;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getSalt()
    {
        // Add implementation here if needed.
        return null;
    }

    public function getUsername()
    {
        // Add implementation here if needed.
        return (string) $this->email;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getGroupesanguin(): ?string
    {
        return $this->groupesanguin;
    }

    public function setGroupesanguin(string $groupesanguin): static
    {
        $this->groupesanguin = $groupesanguin;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }
}
