<?php

namespace GestionSigcerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * DetalleSolicitud
 *
 * @ORM\Table(name="sig_det_sol")
 * @ORM\Entity(repositoryClass="GestionSigcerBundle\Repository\DetalleSolicitudRepository")
 */
class DetalleSolicitud
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
     * @var float
     *
     * @ORM\Column(name="pesoNeto", type="float", nullable=true)
     */
    private $pesoNeto;

    /**
     * @var float
     *
     * @ORM\Column(name="pesoBruto", type="float", nullable=true)
     */
    private $pesoBruto;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", nullable=true)
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidadSanitario", type="float", nullable=true)
     */
    private $cantidadSanitario;

    /**
     * @var string
     *
     * @ORM\Column(name="certificadoOrigen", type="string", length=255, nullable=true)
     */
    private $certificadoOrigen;

    /**
    * @ORM\ManyToOne(targetEntity="GestionSigcerBundle\Entity\opciones\Producto") 
    * @ORM\JoinColumn(name="id_art", referencedColumnName="id")
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
    */      
    private $articulo;

    /**
    * @ORM\ManyToOne(targetEntity="TropaSolicitud", inversedBy="detalles") 
    * @ORM\JoinColumn(name="id_tropa", referencedColumnName="id", nullable=true)
    */      
    private $tropa;

    /**
    * @ORM\ManyToOne(targetEntity="GestionSigcerBundle\Entity\opciones\Envase") 
    * @ORM\JoinColumn(name="id_env_primario", referencedColumnName="id")
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
    */      
    private $envasePrimario;

    /**
    * @ORM\ManyToOne(targetEntity="GestionSigcerBundle\Entity\opciones\Envase") 
    * @ORM\JoinColumn(name="id_env_secundario", referencedColumnName="id")
    */      
    private $envaseSecundario;

    /**
    * @ORM\ManyToOne(targetEntity="Solicitud", inversedBy="detalles") 
    * @ORM\JoinColumn(name="id_sol", referencedColumnName="id")
    */      
    private $solicitud;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pesoNeto
     *
     * @param float $pesoNeto
     *
     * @return DetalleSolicitud
     */
    public function setPesoNeto($pesoNeto)
    {
        $this->pesoNeto = $pesoNeto;

        return $this;
    }

    /**
     * Get pesoNeto
     *
     * @return float
     */
    public function getPesoNeto()
    {
        return $this->pesoNeto;
    }

    /**
     * Set pesoBruto
     *
     * @param float $pesoBruto
     *
     * @return DetalleSolicitud
     */
    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get pesoBruto
     *
     * @return float
     */
    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return DetalleSolicitud
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
     * Set certificadoOrigen
     *
     * @param string $certificadoOrigen
     *
     * @return DetalleSolicitud
     */
    public function setCertificadoOrigen($certificadoOrigen)
    {
        $this->certificadoOrigen = $certificadoOrigen;

        return $this;
    }

    /**
     * Get certificadoOrigen
     *
     * @return string
     */
    public function getCertificadoOrigen()
    {
        return $this->certificadoOrigen;
    }

    /**
     * Set tropa
     *
     * @param \GestionSigcerBundle\Entity\TropaSolicitud $tropa
     *
     * @return DetalleSolicitud
     */
    public function setTropa(\GestionSigcerBundle\Entity\TropaSolicitud $tropa = null)
    {
        $this->tropa = $tropa;

        return $this;
    }

    /**
     * Get tropa
     *
     * @return \GestionSigcerBundle\Entity\TropaSolicitud
     */
    public function getTropa()
    {
        return $this->tropa;
    }

    /**
     * Set envasePrimario
     *
     * @param \GestionSigcerBundle\Entity\opciones\Envase $envasePrimario
     *
     * @return DetalleSolicitud
     */
    public function setEnvasePrimario(\GestionSigcerBundle\Entity\opciones\Envase $envasePrimario = null)
    {
        $this->envasePrimario = $envasePrimario;

        return $this;
    }

    /**
     * Get envasePrimario
     *
     * @return \GestionSigcerBundle\Entity\opciones\Envase
     */
    public function getEnvasePrimario()
    {
        return $this->envasePrimario;
    }

    /**
     * Set envaseSecundario
     *
     * @param \GestionSigcerBundle\Entity\opciones\Envase $envaseSecundario
     *
     * @return DetalleSolicitud
     */
    public function setEnvaseSecundario(\GestionSigcerBundle\Entity\opciones\Envase $envaseSecundario = null)
    {
        $this->envaseSecundario = $envaseSecundario;

        return $this;
    }

    /**
     * Get envaseSecundario
     *
     * @return \GestionSigcerBundle\Entity\opciones\Envase
     */
    public function getEnvaseSecundario()
    {
        return $this->envaseSecundario;
    }

    /**
     * Set solicitud
     *
     * @param \GestionSigcerBundle\Entity\Solicitud $solicitud
     *
     * @return DetalleSolicitud
     */
    public function setSolicitud(\GestionSigcerBundle\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \GestionSigcerBundle\Entity\Solicitud
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * Set articulo
     *
     * @param \GestionSigcerBundle\Entity\opciones\Producto $articulo
     *
     * @return DetalleSolicitud
     */
    public function setArticulo(\GestionSigcerBundle\Entity\opciones\Producto $articulo = null)
    {
        $this->articulo = $articulo;

        return $this;
    }

    /**
     * Get articulo
     *
     * @return \GestionSigcerBundle\Entity\opciones\Producto
     */
    public function getArticulo()
    {
        return $this->articulo;
    }

    /**
     * Set cantidadSanitario
     *
     * @param float $cantidadSanitario
     *
     * @return DetalleSolicitud
     */
    public function setCantidadSanitario($cantidadSanitario)
    {
        $this->cantidadSanitario = $cantidadSanitario;

        return $this;
    }

    /**
     * Get cantidadSanitario
     *
     * @return float
     */
    public function getCantidadSanitario()
    {
        return $this->cantidadSanitario;
    }
}
