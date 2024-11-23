<?php

namespace App\Entity;

use App\Repository\SupHourRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SupHourRepository::class)]
class SupHour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'supHours')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?float $hour_min = null;

    #[ORM\Column(nullable: true)]
    private ?float $hour_max = null;

    #[ORM\Column(nullable: true)]
    private ?int $category = null;

    #[ORM\Column(nullable: true)]
    private ?float $rate = null;

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

    public function getHourMin(): ?float
    {
        return $this->hour_min;
    }

    public function setHourMin(?float $hour_min): static
    {
        $this->hour_min = $hour_min;

        return $this;
    }

    public function getHourMax(): ?float
    {
        return $this->hour_max;
    }

    public function setHourMax(?float $hour_max): static
    {
        $this->hour_max = $hour_max;

        return $this;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(?int $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(?float $rate): static
    {
        $this->rate = $rate;

        return $this;
    }
}
