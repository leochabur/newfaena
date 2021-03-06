<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Atributo
 *
 * @ORM\Table(name="sp_gst_atr_abs")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\AtributoRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="integer")
 * @ORM\DiscriminatorMap({1:"Atributo",2: "AtributoMedible", 3: "AtributoMedibleManual", 4: "AtributoMedibleAutomatico", 5: "AtributoInformable", 
                          6: "AtributoInformableExterno", 7: "AtributoInformableArbitrario"})
 * @ORM\HasLifecycleCallbacks()
 */

abstract class Atributo
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
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", options={"default":true})
     */
    private $activo = true;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asignado", type="boolean", options={"default":false})
     */
    private $asignado = false;  //como se debe configurar un atributo para cada articulo de cada concepto, una vez que se asigna al articulo ya no se debe volver a utilizar

    /**
     * @var int
     *
     * @ORM\Column(name="posicion", type="integer")
     */
    private $posicion = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="mostrar", type="boolean", options={"default":false})
     */
    private $mostrar = true;
   

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto", inversedBy="atributos") 
    * @ORM\JoinColumn(name="id_artatrcon", referencedColumnName="id")
    */      
    private $articuloAtrConc;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto", inversedBy="atributos", fetch="EAGER") 
    * @ORM\JoinColumn(name="id_atr_abs", referencedColumnName="id")
    */      
    private $atributoAbstracto;

    /**
     * @ORM\OneToMany(targetEntity="GestionFaenaBundle\Entity\faena\ValorAtributo", mappedBy="atributo")
     */
    private $valoresAtributos;

    /**
     * @var string
     *
     * @ORM\Column(name="eliminado", type="boolean", options={"default":false}, nullable=true)
     */
    private $eliminado = false;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto") 
    * @ORM\JoinColumn(name="id_atr_base", referencedColumnName="id")
    */      
    private $atributoBase;  //para el caso que se deba modificar la informacion del mismo atributo (Ej al ajustar el informe de Faena)

    /**
     * @ORM\Column(name="espejo", type="boolean", options={"default":false}, nullable=true)
     */
    private $espejo = false;  //para el caso que se dese modficar el valor de un atributo no se altere el original -idem anterior-

    /**
     * @ORM\Column(name="mostrarAlCargar", type="boolean", options={"default":true}, nullable=true)
     */
    private $mostrarAlCargar = true;  //para el caso que se manejen datos paralelos no se muetren a realizar la carga

    /**
     * @ORM\Column(name="defecto", type="float", nullable=true)
     */
    private $defecto;  //valor por defecto asignado

    /**
     * @ORM\Column(name="redondea", type="boolean", options={"default"=false})
     */
    private $redondea = false; // si debe redondear el numero
    
    /**
     * @var string
     *
     * @ORM\Column(name="admiteCero", type="boolean", options={"default":false}, nullable=true)
     */
    private $admiteCero = false; //para el caso que se desee realizar un movimiento y quede trackeado


    public function getNumeroOrden()
    {
        return ($this->posicion?$this->posicion:$this->id);
    }


    /**
     * Get id
     *
     * @return int
     */
    
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->nombre;
    }

    public function getTipo()
    {

    }

    public function getCarga()
    {
        return 'Manual';
    }

    public function getUnidadMedida()
    {

    }

    public function getCalculo()
    {

    }

    public function getAjuste()
    {
        
    }

    public abstract function getEntityValorAtributo(\GestionFaenaBundle\Entity\gestionBD\Atributo $atributo, $data = null);///devuelve a que entidad debe instanciar para asignar el valor
    public abstract function getType(); //devuleve el codigo de cada clase

    public function getManual()
    {
        return false;
    }

    public function getFactoresCalculo()
    {
        return null;
    }

    public function getPosition()
    {
        return 0;
    }

    public function getAcumula()
    {
        return null;
    }

    public function getDecimales()
    {
        return null;
    }

    public function getPromedia()
    {
        return null;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Atributo
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

    abstract public function getClass();



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Atributo
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
     * Set asignado
     *
     * @param boolean $asignado
     *
     * @return Atributo
     */
    public function setAsignado($asignado)
    {
        $this->asignado = $asignado;

        return $this;
    }

    /**
     * Get asignado
     *
     * @return boolean
     */
    public function getAsignado()
    {
        return $this->asignado;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     *
     * @return Atributo
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set mostrar
     *
     * @param boolean $mostrar
     *
     * @return Atributo
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;

        return $this;
    }

    /**
     * Get mostrar
     *
     * @return boolean
     */
    public function getMostrar()
    {
        return $this->mostrar;
    }

    /**
     * Set articuloAtrConc
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto $articuloAtrConc
     *
     * @return Atributo
     */
    public function setArticuloAtrConc(\GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto $articuloAtrConc = null)
    {
        $this->articuloAtrConc = $articuloAtrConc;

        return $this;
    }

    /**
     * Get articuloAtrConc
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto
     */
    public function getArticuloAtrConc()
    {
        return $this->articuloAtrConc;
    }

    public function manejaDecimales()
    {
        return false;
    }

    /**
     * @ORM\PrePersist
     */
    public function setAsign()
    {
        $this->asignado = true;
    }

    /**
     * Set atributoAbstracto
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoAbstracto
     *
     * @return Atributo
     */
    public function setAtributoAbstracto(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoAbstracto = null)
    {
        $this->atributoAbstracto = $atributoAbstracto;

        return $this;
    }

    /**
     * Get atributoAbstracto
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto
     */
    public function getAtributoAbstracto()
    {
        return $this->atributoAbstracto;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->valoresAtributos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add valoresAtributo
     *
     * @param \GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo
     *
     * @return Atributo
     */
    public function addValoresAtributo(\GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo)
    {
        $this->valoresAtributos[] = $valoresAtributo;

        return $this;
    }

    /**
     * Remove valoresAtributo
     *
     * @param \GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo
     */
    public function removeValoresAtributo(\GestionFaenaBundle\Entity\faena\ValorAtributo $valoresAtributo)
    {
        $this->valoresAtributos->removeElement($valoresAtributo);
    }

    /**
     * Get valoresAtributos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getValoresAtributos()
    {
        return $this->valoresAtributos;
    }

    /**
     * Set eliminado
     *
     * @param boolean $eliminado
     *
     * @return Atributo
     */
    public function setEliminado($eliminado)
    {
        $this->eliminado = $eliminado;

        return $this;
    }

    /**
     * Get eliminado
     *
     * @return boolean
     */
    public function getEliminado()
    {
        return $this->eliminado;
    }

    /**
     * Set espejo
     *
     * @param boolean $espejo
     *
     * @return Atributo
     */
    public function setEspejo($espejo)
    {
        $this->espejo = $espejo;

        return $this;
    }

    /**
     * Get espejo
     *
     * @return boolean
     */
    public function getEspejo()
    {
        return $this->espejo;
    }

    /**
     * Set atributoBase
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoBase
     *
     * @return Atributo
     */
    public function setAtributoBase(\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributoBase = null)
    {
        $this->atributoBase = $atributoBase;

        return $this;
    }

    /**
     * Get atributoBase
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto
     */
    public function getAtributoBase()
    {
        return $this->atributoBase;
    }

    /**
     * Set mostrarAlCargar
     *
     * @param boolean $mostrarAlCargar
     *
     * @return Atributo
     */
    public function setMostrarAlCargar($mostrarAlCargar)
    {
        $this->mostrarAlCargar = $mostrarAlCargar;

        return $this;
    }

    /**
     * Get mostrarAlCargar
     *
     * @return boolean
     */
    public function getMostrarAlCargar()
    {
        return $this->mostrarAlCargar;
    }

    /**
     * Set defecto
     *
     * @param float $defecto
     *
     * @return Atributo
     */
    public function setDefecto($defecto)
    {
        $this->defecto = $defecto;

        return $this;
    }

    /**
     * Get defecto
     *
     * @return float
     */
    public function getDefecto()
    {
        return $this->defecto;
    }

    /**
     * Set redondea
     *
     * @param boolean $redondea
     *
     * @return Atributo
     */
    public function setRedondea($redondea)
    {
        $this->redondea = $redondea;

        return $this;
    }

    /**
     * Get redondea
     *
     * @return boolean
     */
    public function getRedondea()
    {
        return $this->redondea;
    }

    /**
     * Set admiteCero
     *
     * @param boolean $admiteCero
     *
     * @return Atributo
     */
    public function setAdmiteCero($admiteCero)
    {
        $this->admiteCero = $admiteCero;

        return $this;
    }

    /**
     * Get admiteCero
     *
     * @return boolean
     */
    public function getAdmiteCero()
    {
        return $this->admiteCero;
    }
}
