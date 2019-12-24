<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EducationRepository")
 */
class Education
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ecole;

    /**
     * @ORM\Column(type="date")
     */
    private $DateEntree;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateSortie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Certification;

    /**
     * @ORM\Column(type="text")
     */
    private $Descriptif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEcole(): ?string
    {
        return $this->Ecole;
    }

    public function setEcole(string $Ecole): self
    {
        $this->Ecole = $Ecole;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->DateEntree;
    }

    public function setDateEntree(\DateTimeInterface $DateEntree): self
    {
        $this->DateEntree = $DateEntree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->DateSortie;
    }

    public function setDateSortie(?\DateTimeInterface $DateSortie): self
    {
        $this->DateSortie = $DateSortie;

        return $this;
    }

    public function getCertification(): ?string
    {
        return $this->Certification;
    }

    public function setCertification(string $Certification): self
    {
        $this->Certification = $Certification;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->Descriptif;
    }

    public function setDescriptif(string $Descriptif): self
    {
        $this->Descriptif = $Descriptif;

        return $this;
    }
}
