<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Linea
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VentaRepository")
 */
class Linea
{
    /**
     * @var int
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var float
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Este campo es obligatorio")
     */
    private $cantidad;

    /**
     * @var float
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @var Venta
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Venta", inversedBy="lineas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $venta;

    /**
     * @var Producto
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto", inversedBy="lineas")
     * @ORM\JoinColumn(nullable=true)
     */
    private $producto;

    /**
     * @var Lote
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Lote", inversedBy="lineas")
     * @ORM\JoinColumn(nullable=true)
     */
    private $lote;


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
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return Linea
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

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Linea
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set venta
     *
     * @param \AppBundle\Entity\Venta $venta
     *
     * @return Linea
     */
    public function setVenta(\AppBundle\Entity\Venta $venta)
    {
        $this->venta = $venta;

        return $this;
    }

    /**
     * Get venta
     *
     * @return \AppBundle\Entity\Venta
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     *
     * @return Linea
     */
    public function setProducto(\AppBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set lote
     *
     * @param \AppBundle\Entity\Lote $lote
     *
     * @return Linea
     */
    public function setLote(\AppBundle\Entity\Lote $lote = null)
    {
        $this->lote = $lote;

        return $this;
    }

    /**
     * Get lote
     *
     * @return \AppBundle\Entity\Lote
     */
    public function getLote()
    {
        return $this->lote;
    }
}
