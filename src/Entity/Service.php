<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 */
class Service
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
    private $Icon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomService;

    /**
     * @ORM\Column(type="text")
     */
    private $Descriptif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIcon(): ?string
    {
        return $this->Icon;
    }

    public function setIcon(string $Icon): self
    {
        $this->Icon = $Icon;

        return $this;
    }

    public function getNomService(): ?string
    {
        return $this->NomService;
    }

    public function setNomService(string $NomService): self
    {
        $this->NomService = $NomService;

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
