<?php

namespace App\Entity;

use App\Repository\PrestationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestationRepository::class)]
class Prestation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'prestations')]
    private ?cotisation $cotisation = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $patronal = null;

    #[ORM\Column]
    private ?float $salarial = null;

    #[ORM\Column]
    private ?float $_limit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCotisation(): ?cotisation
    {
        return $this->cotisation;
    }

    public function setCotisation(?cotisation $cotisation): static
    {
        $this->cotisation = $cotisation;

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

    public function getPatronal(): ?float
    {
        return $this->patronal;
    }

    public function setPatronal(float $patronal): static
    {
        $this->patronal = $patronal;

        return $this;
    }

    public function getSalarial(): ?float
    {
        return $this->salarial;
    }

    public function setSalarial(float $salarial): static
    {
        $this->salarial = $salarial;

        return $this;
    }

    public function getLimit(): ?float
    {
        return $this->_limit;
    }

    public function setLimit(float $_limit): static
    {
        $this->_limit = $_limit;

        return $this;
    }
}
