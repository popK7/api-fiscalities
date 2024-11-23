<?php

namespace App\Entity;

use App\Repository\IndemnityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndemnityRepository::class)]
class Indemnity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'indemnities')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?int $min_year = null;

    #[ORM\Column(nullable: true)]
    private ?int $max_year = null;

    #[ORM\Column(nullable: true)]
    private ?float $hours_must_paid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
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

    public function getMinYear(): ?int
    {
        return $this->min_year;
    }

    public function setMinYear(?int $min_year): static
    {
        $this->min_year = $min_year;

        return $this;
    }

    public function getMaxYear(): ?int
    {
        return $this->max_year;
    }

    public function setMaxYear(?int $max_year): static
    {
        $this->max_year = $max_year;

        return $this;
    }

    public function getHoursMustPaid(): ?float
    {
        return $this->hours_must_paid;
    }

    public function setHoursMustPaid(?float $hours_must_paid): static
    {
        $this->hours_must_paid = $hours_must_paid;

        return $this;
    }
}
