<?php

namespace App\Entity;

use App\Repository\AbsenceOptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AbsenceOptionRepository::class)]
class AbsenceOption
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'absenceOption', cascade: ['persist', 'remove'])]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?int $start_after_month = null;

    #[ORM\Column(nullable: true)]
    private ?float $limit_per_year = null;

    #[ORM\Column(nullable: true)]
    private ?int $total_months = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $options = null;

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

    public function getStartAfterMonth(): ?int
    {
        return $this->start_after_month;
    }

    public function setStartAfterMonth(?int $start_after_month): static
    {
        $this->start_after_month = $start_after_month;

        return $this;
    }

    public function getLimitPerYear(): ?float
    {
        return $this->limit_per_year;
    }

    public function setLimitPerYear(?float $limit_per_year): static
    {
        $this->limit_per_year = $limit_per_year;

        return $this;
    }

    public function getTotalMonths(): ?int
    {
        return $this->total_months;
    }

    public function setTotalMonths(?int $total_months): static
    {
        $this->total_months = $total_months;

        return $this;
    }

    public function getOptions(): ?string
    {
        return $this->options;
    }

    public function setOptions(?string $options): static
    {
        $this->options = $options;

        return $this;
    }
}
