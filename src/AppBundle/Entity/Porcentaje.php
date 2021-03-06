<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Porcentaje
 * @ORM\Entity()
 */
class Porcentaje
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $denominacion;

    /**
     * @var float
     * @ORM\Column(type="float", precision=2)
     * @Assert\NotBlank(message="Este campo es obligatorio")
     * @Assert\Regex("/^[0-9]+(\.[0-9]+)?$/")
     */
    private $cantidad;


    /**
     * Convierte a string
     */
    public function __toString()
    {
        return $this->getDenominacion();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     *
     * @return Porcentaje
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion
     *
     * @return string
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return Porcentaje
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
