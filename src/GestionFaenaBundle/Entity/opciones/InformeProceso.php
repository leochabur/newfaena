<?php

namespace GestionFaenaBundle\Entity\opciones;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * InformeProceso
 *
 * @ORM\Table(name="sp_opc_def_inf")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\opciones\InformeProcesoRepository")
 */
class InformeProceso
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
     * @ORM\ManyToMany(targetEntity="GestionFaenaBundle\Entity\faena\ConceptoMovimiento", cascade={"all"})
     * @ORM\JoinTable(name="sp_proc_con_mov_por_proceso",
     *      joinColumns={@ORM\JoinColumn(name="id_inf_proc", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_con_mov", referencedColumnName="id", unique=true)}
     *      )
    /**
     * @Assert\Count(
     *      min = 1,
     *      minMessage = "Debe, al menos, seleccionar un concepto"
     * )
     */
    private $conceptos;


    /**
     * @ORM\OneToMany(targetEntity="AtributoInforme", mappedBy="informe")
     * @ORM\OrderBy({"posicion" = "ASC"})
     */
    private $atributos;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\ProcesoFaena", cascade={"all"}) 
    * @ORM\JoinColumn(name="id_proc_fan", referencedColumnName="id")
    * @Assert\NotNull(message="El campo no puede permanecer en blanco!")
    */      
    private $proceso;

    /**
    * @ORM\ManyToOne(targetEntity="GestionFaenaBundle\Entity\gestionBD\Atributo") 
    * @ORM\JoinColumn(name="id_atr_ajuste", referencedColumnName="id")
    */      
    private $atributoAjuste;
    

    public function __toString()
    {
        return $this->proceso."";
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

    /**
     * Add concepto
     *
     * @param \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto
     *
     * @return InformeProceso
     */
    public function addConcepto(\GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto)
    {
        $this->conceptos[] = $concepto;

        return $this;
    }

    /**
     * Remove concepto
     *
     * @param \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto
     */
    public function removeConcepto(\GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto)
    {
        $this->conceptos->removeElement($concepto);
    }

    /**
     * Get conceptos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConceptos()
    {
        return $this->conceptos;
    }

    /**
     * Set proceso
     *
     * @param \GestionFaenaBundle\Entity\ProcesoFaena $proceso
     *
     * @return InformeProceso
     */
    public function setProceso(\GestionFaenaBundle\Entity\ProcesoFaena $proceso = null)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso
     *
     * @return \GestionFaenaBundle\Entity\ProcesoFaena
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /**
     * Add atributo
     *
     * @param \GestionFaenaBundle\Entity\opciones\AtributoInforme $atributo
     *
     * @return InformeProceso
     */
    public function addAtributo(\GestionFaenaBundle\Entity\opciones\AtributoInforme $atributo)
    {
        $this->atributos[] = $atributo;

        return $this;
    }

    /**
     * Remove atributo
     *
     * @param \GestionFaenaBundle\Entity\opciones\AtributoInforme $atributo
     */
    public function removeAtributo(\GestionFaenaBundle\Entity\opciones\AtributoInforme $atributo)
    {
        $this->atributos->removeElement($atributo);
    }

    /**
     * Get atributos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAtributos()
    {
        return $this->atributos;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conceptos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->atributos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getAtrWhitSort($orden)
    {
        foreach ($this->atributos as $atr) {
            if ($atr->getNumeroOrden() == $orden)
                return $atr;
        }
        return null;
    }

    public function getAtributoAgrupa() //devuelve cual es el atributo por el cual se deben agrupar los datos
    {
        foreach ($this->atributos as $atr) {
            if ($atr->getAgrupa())
                return $atr;
        }
        return null;
    }

    public function getAtributosAcumulables() //devuelve un areglo con los atributos que se deben acumular
    {
        $atributos = array();
        foreach ($this->atributos as $atr) 
        {
            if ($atr->getSumariza())
            {
                $atributos[$atr->getAtributo()->getId()] = 's';
            }
            elseif ($atr->getPromedia()) {
                $atributos[$atr->getAtributo()->getId()] = 'p';
            }
        }
        return $atributos;
    }


    /**
     * Set atributoAjuste
     *
     * @param \GestionFaenaBundle\Entity\gestionBD\Atributo $atributoAjuste
     *
     * @return InformeProceso
     */
    public function setAtributoAjuste(\GestionFaenaBundle\Entity\gestionBD\Atributo $atributoAjuste = null)
    {
        $this->atributoAjuste = $atributoAjuste;

        return $this;
    }

    /**
     * Get atributoAjuste
     *
     * @return \GestionFaenaBundle\Entity\gestionBD\Atributo
     */
    public function getAtributoAjuste()
    {
        return $this->atributoAjuste;
    }
}
