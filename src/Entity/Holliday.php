<?php

namespace App\Entity;

use App\Repository\HollidayRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HollidayRepository::class)]
class Holliday
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'hollidays')]
    private ?country $country = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $day = null;

    #[ORM\Column(nullable: true)]
    private ?int $month = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $start_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $end_at = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDay(): ?int
    {
        return $this->day;
    }

    public function setDay(?int $day): static
    {
        $this->day = $day;

        return $this;
    }

    public function getMonth(): ?int
    {
        return $this->month;
    }

    public function setMonth(?int $month): static
    {
        $this->month = $month;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
