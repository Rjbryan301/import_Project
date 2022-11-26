<?php

namespace App\Entity;

use App\Repository\CarteGriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteGriseRepository::class)
 */
class CarteGrise
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=18)
     */
    private $vin;

    /**
     * @ORM\Column(type="string", length=7, nullable=true)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $prospect;

    /**
     * @ORM\Column(type="integer")
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $energie;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Vehicule", inversedBy="vehicule")
     * @ORM\JoinColumn(name="vehicule_id", referencedColumnName="id")
     */
    private $vehicule;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Proprietaire", inversedBy="proprietaires")
     * @ORM\JoinColumn(name="proprietaires_id", referencedColumnName="id")
     */
    private $proprietaires;





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getProspect(): ?string
    {
        return $this->prospect;
    }

    public function setProspect(string $prospect): self
    {
        $this->prospect = $prospect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getEnergie(): ?string
    {
        return $this->energie;
    }

    public function setEnergie(?string $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?Vehicule $vehicule): self
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getProprietaires(): ?Proprietaire
    {
        return $this->proprietaires;
    }

    public function setProprietaires(?Proprietaire $proprietaires): self
    {
        $this->proprietaires = $proprietaires;

        return $this;
    }
}
