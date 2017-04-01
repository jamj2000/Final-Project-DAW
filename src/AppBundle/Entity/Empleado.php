<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Empleado
 * @ORM\Entity()
 */
class Empleado
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
     * @ORM\Column(type="string", length=9, unique=true)
     */
    private $nif;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $nombre;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $apellidos;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $calle;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $numero;

    /**
     * @var string
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $bloque;

    /**
     * @var string
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $escalera;

    /**
     * @var string
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $piso;

    /**
     * @var string
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $letra;

    /**
     * @var string
     * @ORM\Column(type="string", length=5)
     */
    private $codigoPostal;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $localidad;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $provincia;

    /**
     * @var string
     * @ORM\Column(type="string", length=9)
     */
    private $telefono;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaAlta;

    /**
     * @var boolean
     * @ORM\Column(type="boolean")
     */
    private $activo;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private $fechaBaja;

    /**
     * @var Finca[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Finca", mappedBy="propietario")
     */
    private $fincasPropiedad;

    /**
     * @var Finca[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Finca", mappedBy="arrendatario")
     * @ORM\JoinColumn(nullable=true)
     */
    private $fincasArrendadas;

    /**
     * @var Retirada[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Retirada", mappedBy="socio")
     * @ORM\JoinColumn(nullable=true)
     */
    private $retiradas;

    /**
     * @var Descuento
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Descuento", inversedBy="empleados")
     * @ORM\JoinColumn(nullable=true)
     */
    private $descuento;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fincasPropiedad = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fincasArrendadas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->retiradas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nif
     *
     * @param string $nif
     *
     * @return Empleado
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Empleado
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Empleado
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Empleado
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set bloque
     *
     * @param string $bloque
     *
     * @return Empleado
     */
    public function setBloque($bloque)
    {
        $this->bloque = $bloque;

        return $this;
    }

    /**
     * Get bloque
     *
     * @return string
     */
    public function getBloque()
    {
        return $this->bloque;
    }

    /**
     * Set escalera
     *
     * @param string $escalera
     *
     * @return Empleado
     */
    public function setEscalera($escalera)
    {
        $this->escalera = $escalera;

        return $this;
    }

    /**
     * Get escalera
     *
     * @return string
     */
    public function getEscalera()
    {
        return $this->escalera;
    }

    /**
     * Set piso
     *
     * @param string $piso
     *
     * @return Empleado
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set letra
     *
     * @param string $letra
     *
     * @return Empleado
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Empleado
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Empleado
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Empleado
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Empleado
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Empleado
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Empleado
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return Empleado
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Add fincasPropiedad
     *
     * @param \AppBundle\Entity\Finca $fincasPropiedad
     *
     * @return Empleado
     */
    public function addFincasPropiedad(\AppBundle\Entity\Finca $fincasPropiedad)
    {
        $this->fincasPropiedad[] = $fincasPropiedad;

        return $this;
    }

    /**
     * Remove fincasPropiedad
     *
     * @param \AppBundle\Entity\Finca $fincasPropiedad
     */
    public function removeFincasPropiedad(\AppBundle\Entity\Finca $fincasPropiedad)
    {
        $this->fincasPropiedad->removeElement($fincasPropiedad);
    }

    /**
     * Get fincasPropiedad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFincasPropiedad()
    {
        return $this->fincasPropiedad;
    }

    /**
     * Add fincasArrendada
     *
     * @param \AppBundle\Entity\Finca $fincasArrendada
     *
     * @return Empleado
     */
    public function addFincasArrendada(\AppBundle\Entity\Finca $fincasArrendada)
    {
        $this->fincasArrendadas[] = $fincasArrendada;

        return $this;
    }

    /**
     * Remove fincasArrendada
     *
     * @param \AppBundle\Entity\Finca $fincasArrendada
     */
    public function removeFincasArrendada(\AppBundle\Entity\Finca $fincasArrendada)
    {
        $this->fincasArrendadas->removeElement($fincasArrendada);
    }

    /**
     * Get fincasArrendadas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFincasArrendadas()
    {
        return $this->fincasArrendadas;
    }

    /**
     * Add retirada
     *
     * @param \AppBundle\Entity\Retirada $retirada
     *
     * @return Empleado
     */
    public function addRetirada(\AppBundle\Entity\Retirada $retirada)
    {
        $this->retiradas[] = $retirada;

        return $this;
    }

    /**
     * Remove retirada
     *
     * @param \AppBundle\Entity\Retirada $retirada
     */
    public function removeRetirada(\AppBundle\Entity\Retirada $retirada)
    {
        $this->retiradas->removeElement($retirada);
    }

    /**
     * Get retiradas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRetiradas()
    {
        return $this->retiradas;
    }

    /**
     * Set descuento
     *
     * @param \AppBundle\Entity\Descuento $descuento
     *
     * @return Empleado
     */
    public function setDescuento(\AppBundle\Entity\Descuento $descuento = null)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return \AppBundle\Entity\Descuento
     */
    public function getDescuento()
    {
        return $this->descuento;
    }
}