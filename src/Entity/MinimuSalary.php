<?php

namespace App\Entity;

use App\Repository\MinimuSalaryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MinimuSalaryRepository::class)]
class MinimuSalary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'minimuSalaries')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?float $total_per_hours = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $start_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $end_at = null;

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

    public function getTotalPerHours(): ?float
    {
        return $this->total_per_hours;
    }

    public function setTotalPerHours(?float $total_per_hours): static
    {
        $this->total_per_hours = $total_per_hours;

        return $this;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->start_at;
    }

    public function setStartAt(\DateTimeImmutable $start_at): static
    {
        $this->start_at = $start_at;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->end_at;
    }

    public function setEndAt(\DateTimeImmutable $end_at): static
    {
        $this->end_at = $end_at;

        return $this;
    }
}
