<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

// Entité représentant un film dans la base de données
#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Le titre est obligatoire
    #[Assert\NotBlank(message: "Le titre est obligatoire.")]
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    // Le réalisateur est obligatoire
    #[Assert\NotBlank(message: "Le réalisateur est obligatoire.")]
    #[ORM\Column(length: 255)]
    private ?string $director = null;

    // L'année doit être comprise entre 1900 et 2026
    #[Assert\NotBlank(message: "L'année de sortie est obligatoire.")]
    #[Assert\Range(min: 1900, max: 2026, notInRangeMessage: "L'année doit être comprise entre {{ min }} et {{ max }}.")]
    #[ORM\Column]
    private ?int $releaseYear = null;

    // Le synopsis est obligatoire
    #[Assert\NotBlank(message: "Le synopsis est obligatoire.")]
    #[ORM\Column(type: Types::TEXT)]
    private ?string $synopsis = null;

    // Le genre doit faire partie de la liste autorisée
    #[Assert\NotBlank(message: "Le genre est obligatoire.")]
    #[Assert\Choice(choices: ['Action', 'Science-Fiction', 'Comédie', 'Horreur', 'Drame'], message: "Choisissez un genre valide.")]
    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): static
    {
        $this->director = $director;

        return $this;
    }

    public function getReleaseYear(): ?int
    {
        return $this->releaseYear;
    }

    public function setReleaseYear(int $releaseYear): static
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): static
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }
}
