<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LoisirRepository")
 */
class Loisir
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
    private $NomLoisir;

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

    public function getNomLoisir(): ?string
    {
        return $this->NomLoisir;
    }

    public function setNomLoisir(string $NomLoisir): self
    {
        $this->NomLoisir = $NomLoisir;

        return $this;
    }
}
