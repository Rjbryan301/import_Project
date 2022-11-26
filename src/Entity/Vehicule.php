<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VehiculeRepository::class)
 */
class Vehicule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMiseEnCirculation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDernierEvenement;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $modele;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $version;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\CarteGrise")
     */
    protected $CarteGrise;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->dateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(?\DateTimeInterface $dateMiseEnCirculation): self
    {
        $this->dateMiseEnCirculation = $dateMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->dateDernierEvenement;
    }

    public function setDateDernierEvenement(\DateTimeInterface $dateDernierEvenement): self
    {
        $this->dateDernierEvenement = $dateDernierEvenement;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(?string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getCarteGrise(): ?CarteGrise
    {
        return $this->CarteGrise;
    }

    public function setCarteGrise(?CarteGrise $CarteGrise): self
    {
        $this->CarteGrise = $CarteGrise;

        return $this;
    }
}
