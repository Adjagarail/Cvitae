<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CodingRepository")
 */
class Coding
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
    private $NomLangage;

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

    public function getNomLangage(): ?string
    {
        return $this->NomLangage;
    }

    public function setNomLangage(string $NomLangage): self
    {
        $this->NomLangage = $NomLangage;

        return $this;
    }
}
