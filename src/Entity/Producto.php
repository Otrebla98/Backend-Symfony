<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 */
class Producto
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
    private $Nombre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Descripcion;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $precio;

    /**
     * @ORM\Column(type="string",  nullable=true, length=100)
     */
    private $talla;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(?string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(?string $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
     public function getTalla(): ?string
    {
        return $this->talla;
    }

    public function setTalla(?string $talla): self
    {
        $this->talla = $talla;

        return $this;
    }
}
