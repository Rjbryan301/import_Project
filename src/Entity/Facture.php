<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vendeurVN;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vendeurVo;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $numeroDossier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intermediaireDeVente;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEvenement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $origineEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVendeurVN(): ?string
    {
        return $this->vendeurVN;
    }

    public function setVendeurVN(?string $vendeurVN): self
    {
        $this->vendeurVN = $vendeurVN;

        return $this;
    }

    public function getVendeurVo(): ?string
    {
        return $this->vendeurVo;
    }

    public function setVendeurVo(?string $vendeurVo): self
    {
        $this->vendeurVo = $vendeurVo;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getIntermediaireDeVente(): ?string
    {
        return $this->intermediaireDeVente;
    }

    public function setIntermediaireDeVente(?string $intermediaireDeVente): self
    {
        $this->intermediaireDeVente = $intermediaireDeVente;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(\DateTimeInterface $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(string $origineEvenement): self
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }
}
