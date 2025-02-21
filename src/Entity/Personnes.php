<?php

namespace App\Entity;

use App\Repository\PersonnesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: PersonnesRepository::class)]
#[Broadcast]
class Personnes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    // #[ORM\ManyToOne(targetEntity: Batiment::class, inversedBy: 'personnes')]
    // private ?Batiment $batiment = null;

    public function getId(): ?int
    {
        return $this->id;
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

    // public function getBatiment(): ?Batiment
    // {
    //     return $this->batiment;
    // }

    // public function setBatiment(?Batiment $batiment): static
    // {
    //     $this->batiment = $batiment;

    //     return $this;
    // }
}
