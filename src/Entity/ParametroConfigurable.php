<?php

namespace App\Entity;

use App\Repository\ParametroConfigurableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ParametroConfigurable
 *
 * @ORM\Table(name="parametros_configurables")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParametroConfigurableRepository")
 */
class ParametroConfigurable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="parametro", type="string", length=255)
     */
    private $parametro;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="string", length=100)
     */
    private $valor;

    /**
     * @var int
     *
     * @ORM\Column(name="activo", type="boolean")
     */
    private $activo;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="tipo"), type="string" nullable=true)
     */
    private $tipo;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parametro.
     *
     * @param string $parametro
     *
     * @return ParametroConfigurable
     */
    public function setParametro($parametro)
    {
        $this->parametro = $parametro;

        return $this;
    }

    /**
     * Get parametro.
     *
     * @return string
     */
    public function getParametro()
    {
        return $this->parametro;
    }

    /**
     * Set valor.
     *
     * @param string $valor
     *
     * @return ParametroConfigurable
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor.
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set activo.
     *
     * @param int $activo
     *
     * @return ParametroConfigurable
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo.
     *
     * @return int
     */
    public function getActivo()
    {
        return $this->activo;
    }


     public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo.
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
