<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    /**
     * @var Collection<int, Cotisation>
     */
    #[ORM\OneToMany(targetEntity: Cotisation::class, mappedBy: 'country')]
    private Collection $cotisations;

    /**
     * @var Collection<int, Seniority>
     */
    #[ORM\OneToMany(targetEntity: Seniority::class, mappedBy: 'country')]
    private Collection $seniorities;

    /**
     * @var Collection<int, Absence>
     */
    #[ORM\OneToMany(targetEntity: Absence::class, mappedBy: 'country')]
    private Collection $absences;

    #[ORM\OneToOne(mappedBy: 'country', cascade: ['persist', 'remove'])]
    private ?AbsenceOption $absenceOption = null;

    /**
     * @var Collection<int, Indemnity>
     */
    #[ORM\OneToMany(targetEntity: Indemnity::class, mappedBy: 'country')]
    private Collection $indemnities;

    /**
     * @var Collection<int, MinimuSalary>
     */
    #[ORM\OneToMany(targetEntity: MinimuSalary::class, mappedBy: 'country')]
    private Collection $minimuSalaries;

    /**
     * @var Collection<int, MinimumSalaryOption>
     */
    #[ORM\OneToMany(targetEntity: MinimumSalaryOption::class, mappedBy: 'country')]
    private Collection $minimumSalaryOptions;

    /**
     * @var Collection<int, Holliday>
     */
    #[ORM\OneToMany(targetEntity: Holliday::class, mappedBy: 'country')]
    private Collection $hollidays;

    /**
     * @var Collection<int, SupHour>
     */
    #[ORM\OneToMany(targetEntity: SupHour::class, mappedBy: 'country')]
    private Collection $supHours;

    /**
     * @var Collection<int, Notice>
     */
    #[ORM\OneToMany(targetEntity: Notice::class, mappedBy: 'country')]
    private Collection $notices;

    public function __construct()
    {
        $this->cotisations = new ArrayCollection();
        $this->seniorities = new ArrayCollection();
        $this->absences = new ArrayCollection();
        $this->indemnities = new ArrayCollection();
        $this->minimuSalaries = new ArrayCollection();
        $this->minimumSalaryOptions = new ArrayCollection();
        $this->hollidays = new ArrayCollection();
        $this->supHours = new ArrayCollection();
        $this->notices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return Collection<int, Cotisation>
     */
    public function getCotisations(): Collection
    {
        return $this->cotisations;
    }

    public function addCotisation(Cotisation $cotisation): static
    {
        if (!$this->cotisations->contains($cotisation)) {
            $this->cotisations->add($cotisation);
            $cotisation->setCountry($this);
        }

        return $this;
    }

    public function removeCotisation(Cotisation $cotisation): static
    {
        if ($this->cotisations->removeElement($cotisation)) {
            // set the owning side to null (unless already changed)
            if ($cotisation->getCountry() === $this) {
                $cotisation->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Seniority>
     */
    public function getSeniorities(): Collection
    {
        return $this->seniorities;
    }

    public function addSeniority(Seniority $seniority): static
    {
        if (!$this->seniorities->contains($seniority)) {
            $this->seniorities->add($seniority);
            $seniority->setCountry($this);
        }

        return $this;
    }

    public function removeSeniority(Seniority $seniority): static
    {
        if ($this->seniorities->removeElement($seniority)) {
            // set the owning side to null (unless already changed)
            if ($seniority->getCountry() === $this) {
                $seniority->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Absence>
     */
    public function getAbsences(): Collection
    {
        return $this->absences;
    }

    public function addAbsence(Absence $absence): static
    {
        if (!$this->absences->contains($absence)) {
            $this->absences->add($absence);
            $absence->setCountry($this);
        }

        return $this;
    }

    public function removeAbsence(Absence $absence): static
    {
        if ($this->absences->removeElement($absence)) {
            // set the owning side to null (unless already changed)
            if ($absence->getCountry() === $this) {
                $absence->setCountry(null);
            }
        }

        return $this;
    }

    public function getAbsenceOption(): ?AbsenceOption
    {
        return $this->absenceOption;
    }

    public function setAbsenceOption(?AbsenceOption $absenceOption): static
    {
        // unset the owning side of the relation if necessary
        if ($absenceOption === null && $this->absenceOption !== null) {
            $this->absenceOption->setCountry(null);
        }

        // set the owning side of the relation if necessary
        if ($absenceOption !== null && $absenceOption->getCountry() !== $this) {
            $absenceOption->setCountry($this);
        }

        $this->absenceOption = $absenceOption;

        return $this;
    }

    /**
     * @return Collection<int, Indemnity>
     */
    public function getIndemnities(): Collection
    {
        return $this->indemnities;
    }

    public function addIndemnity(Indemnity $indemnity): static
    {
        if (!$this->indemnities->contains($indemnity)) {
            $this->indemnities->add($indemnity);
            $indemnity->setCountry($this);
        }

        return $this;
    }

    public function removeIndemnity(Indemnity $indemnity): static
    {
        if ($this->indemnities->removeElement($indemnity)) {
            // set the owning side to null (unless already changed)
            if ($indemnity->getCountry() === $this) {
                $indemnity->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MinimuSalary>
     */
    public function getMinimuSalaries(): Collection
    {
        return $this->minimuSalaries;
    }

    public function addMinimuSalary(MinimuSalary $minimuSalary): static
    {
        if (!$this->minimuSalaries->contains($minimuSalary)) {
            $this->minimuSalaries->add($minimuSalary);
            $minimuSalary->setCountry($this);
        }

        return $this;
    }

    public function removeMinimuSalary(MinimuSalary $minimuSalary): static
    {
        if ($this->minimuSalaries->removeElement($minimuSalary)) {
            // set the owning side to null (unless already changed)
            if ($minimuSalary->getCountry() === $this) {
                $minimuSalary->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MinimumSalaryOption>
     */
    public function getMinimumSalaryOptions(): Collection
    {
        return $this->minimumSalaryOptions;
    }

    public function addMinimumSalaryOption(MinimumSalaryOption $minimumSalaryOption): static
    {
        if (!$this->minimumSalaryOptions->contains($minimumSalaryOption)) {
            $this->minimumSalaryOptions->add($minimumSalaryOption);
            $minimumSalaryOption->setCountry($this);
        }

        return $this;
    }

    public function removeMinimumSalaryOption(MinimumSalaryOption $minimumSalaryOption): static
    {
        if ($this->minimumSalaryOptions->removeElement($minimumSalaryOption)) {
            // set the owning side to null (unless already changed)
            if ($minimumSalaryOption->getCountry() === $this) {
                $minimumSalaryOption->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Holliday>
     */
    public function getHollidays(): Collection
    {
        return $this->hollidays;
    }

    public function addHolliday(Holliday $holliday): static
    {
        if (!$this->hollidays->contains($holliday)) {
            $this->hollidays->add($holliday);
            $holliday->setCountry($this);
        }

        return $this;
    }

    public function removeHolliday(Holliday $holliday): static
    {
        if ($this->hollidays->removeElement($holliday)) {
            // set the owning side to null (unless already changed)
            if ($holliday->getCountry() === $this) {
                $holliday->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SupHour>
     */
    public function getSupHours(): Collection
    {
        return $this->supHours;
    }

    public function addSupHour(SupHour $supHour): static
    {
        if (!$this->supHours->contains($supHour)) {
            $this->supHours->add($supHour);
            $supHour->setCountry($this);
        }

        return $this;
    }

    public function removeSupHour(SupHour $supHour): static
    {
        if ($this->supHours->removeElement($supHour)) {
            // set the owning side to null (unless already changed)
            if ($supHour->getCountry() === $this) {
                $supHour->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notice>
     */
    public function getNotices(): Collection
    {
        return $this->notices;
    }

    public function addNotice(Notice $notice): static
    {
        if (!$this->notices->contains($notice)) {
            $this->notices->add($notice);
            $notice->setCountry($this);
        }

        return $this;
    }

    public function removeNotice(Notice $notice): static
    {
        if ($this->notices->removeElement($notice)) {
            // set the owning side to null (unless already changed)
            if ($notice->getCountry() === $this) {
                $notice->setCountry(null);
            }
        }

        return $this;
    }
}
