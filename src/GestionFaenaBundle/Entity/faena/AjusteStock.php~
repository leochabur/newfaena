<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;

/**
 * AjusteStock
 *
 * @ORM\Table(name="sp_st_ajs_st")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\AjusteStockRepository")
 */
class AjusteStock extends MovimientoStock
{

    /**
     * @ORM\Column(name="observaciones", type="text")
     */
    private $observaciones;

	public function getType()
	{
		return 10;
	}

    public function updateValues($promedio, $entityManager, $automatico = false)
    {
    }

    public function getFactor()
    {

    }

    public function __toString()
    {
        return "Ajuste";
    }

    public function getConceptos($conceptos, $proceso = null)
    {

    }

    public static function getInstance()
    {
        return 10;
    }

    protected function updateVisible()
    {
        $this->setVisible(true);
    }


    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return AjusteStock
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
