<?php

namespace App\Entity;

use App\Repository\NoticeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoticeRepository::class)]
class Notice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'notices')]
    private ?country $country = null;

    #[ORM\Column(nullable: true)]
    private ?float $min_year = null;

    #[ORM\Column(nullable: true)]
    private ?float $max_year = null;

    #[ORM\Column(nullable: true)]
    private ?int $category_employee = null;

    #[ORM\Column(nullable: true)]
    private ?float $months_must_paid = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $start_at = null;

    #[ORM\Column(nullable: true)]
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

    public function getMinYear(): ?float
    {
        return $this->min_year;
    }

    public function setMinYear(?float $min_year): static
    {
        $this->min_year = $min_year;

        return $this;
    }

    public function getMaxYear(): ?float
    {
        return $this->max_year;
    }

    public function setMaxYear(?float $max_year): static
    {
        $this->max_year = $max_year;

        return $this;
    }

    public function getCategoryEmployee(): ?int
    {
        return $this->category_employee;
    }

    public function setCategoryEmployee(?int $category_employee): static
    {
        $this->category_employee = $category_employee;

        return $this;
    }

    public function getMonthsMustPaid(): ?float
    {
        return $this->months_must_paid;
    }

    public function setMonthsMustPaid(?float $months_must_paid): static
    {
        $this->months_must_paid = $months_must_paid;

        return $this;
    }

    public function getStartAt(): ?\DateTimeImmutable
    {
        return $this->start_at;
    }

    public function setStartAt(?\DateTimeImmutable $start_at): static
    {
        $this->start_at = $start_at;

        return $this;
    }

    public function getEndAt(): ?\DateTimeImmutable
    {
        return $this->end_at;
    }

    public function setEndAt(?\DateTimeImmutable $end_at): static
    {
        $this->end_at = $end_at;

        return $this;
    }
}
