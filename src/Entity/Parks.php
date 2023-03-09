<?php

namespace App\Entity;

use App\Repository\ParksRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParksRepository::class)]
class Parks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $provincia = null;

    #[ORM\Column(length: 255)]
    private ?string $ecosistema = null;

    #[ORM\Column(length: 255)]
    private ?string $fichero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getEcosistema(): ?string
    {
        return $this->ecosistema;
    }

    public function setEcosistema(string $ecosistema): self
    {
        $this->ecosistema = $ecosistema;

        return $this;
    }

    public function getFichero(): ?string
    {
        return $this->fichero;
    }

    public function setFichero(string $fichero): self
    {
        $this->fichero = $fichero;

        return $this;
    }
}
