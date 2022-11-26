<?php

namespace App\Entity;

use App\Repository\FicheRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FicheRepository::class)
 */
class Fiche
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $CompteAffaire;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $CompteEvenement;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $CompteDernierEvenement;

    /**
     * @ORM\Column(type="integer")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $proprietaireActuel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->CompteAffaire;
    }

    public function setCompteAffaire(string $CompteAffaire): self
    {
        $this->CompteAffaire = $CompteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->CompteEvenement;
    }

    public function setCompteEvenement(string $CompteEvenement): self
    {
        $this->CompteEvenement = $CompteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->CompteDernierEvenement;
    }

    public function setCompteDernierEvenement(string $CompteDernierEvenement): self
    {
        $this->CompteDernierEvenement = $CompteDernierEvenement;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getProprietaireActuel(): ?string
    {
        return $this->proprietaireActuel;
    }

    public function setProprietaireActuel(?string $proprietaireActuel): self
    {
        $this->proprietaireActuel = $proprietaireActuel;

        return $this;
    }
}
