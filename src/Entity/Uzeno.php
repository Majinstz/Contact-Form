<?php

namespace App\Entity;

use App\Repository\UzenoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UzenoRepository::class)
 */
class Uzeno
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $Nev;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $uzenet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNev(): ?string
    {
        return $this->Nev;
    }

    public function setNev(string $Nev): self
    {
        $this->Nev = $Nev;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUzenet(): ?string
    {
        return $this->uzenet;
    }

    public function setUzenet(string $uzenet): self
    {
        $this->uzenet = $uzenet;

        return $this;
    }
}
