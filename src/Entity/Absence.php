<?php

namespace App\Entity;

use App\Repository\AbsenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbsenceRepository::class)]
class Absence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'absences')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_age = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_age = null;

    #[ORM\Column]
    private ?float $val = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?country
    {
        return $this->country;
    }

    public function setCountry(?country $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getMinAge(): ?int
    {
        return $this->min_age;
    }

    public function setMinAge(?int $min_age): static
    {
        $this->min_age = $min_age;

        return $this;
    }

    public function getMaxAge(): ?int
    {
        return $this->max_age;
    }

    public function setMaxAge(?int $max_age): static
    {
        $this->max_age = $max_age;

        return $this;
    }

    public function getVal(): ?float
    {
        return $this->val;
    }

    public function setVal(float $val): static
    {
        $this->val = $val;

        return $this;
    }
}
