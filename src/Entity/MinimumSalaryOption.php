<?php

namespace App\Entity;

use App\Repository\MinimumSalaryOptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MinimumSalaryOptionRepository::class)]
class MinimumSalaryOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'minimumSalaryOptions')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?float $hours_per_year = null;

    #[ORM\Column(nullable: true)]
    private ?float $hours_per_month = null;

    #[ORM\Column]
    private ?float $hours_per_week = null;

    #[ORM\Column(nullable: true)]
    private ?float $hours_per_day = null;

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

    public function getHoursPerYear(): ?float
    {
        return $this->hours_per_year;
    }

    public function setHoursPerYear(?float $hours_per_year): static
    {
        $this->hours_per_year = $hours_per_year;

        return $this;
    }

    public function getHoursPerMonth(): ?float
    {
        return $this->hours_per_month;
    }

    public function setHoursPerMonth(?float $hours_per_month): static
    {
        $this->hours_per_month = $hours_per_month;

        return $this;
    }

    public function getHoursPerWeek(): ?float
    {
        return $this->hours_per_week;
    }

    public function setHoursPerWeek(float $hours_per_week): static
    {
        $this->hours_per_week = $hours_per_week;

        return $this;
    }

    public function getHoursPerDay(): ?float
    {
        return $this->hours_per_day;
    }

    public function setHoursPerDay(?float $hours_per_day): static
    {
        $this->hours_per_day = $hours_per_day;

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
