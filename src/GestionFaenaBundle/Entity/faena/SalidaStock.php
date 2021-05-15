<?php

namespace GestionFaenaBundle\Entity\faena;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalidaStock
 *
 * @ORM\Table(name="sp_st_sal_st")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\faena\SalidaStockRepository")
 */
class SalidaStock extends MovimientoStock
{
	public function getType()
	{
		return 3;
	}

    public function updateValues($promedio, $entityManager, $automatico = false)
    {
        $iterator = $this->getValores()->getIterator();
        $iterator->uasort(function ($first, $second) {
            return (int) $first->getAtributo()->getPosition() > (int) $second->getAtributo()->getPosition() ? 1 : -1;
        });
        foreach ($this->getValores() as $valor)
        {
            $valor->calcularValor($this, $entityManager, $automatico);
        }
    }


    public function updateValueAtribute($valor)
    {
        return (-1)*$valor;

    }

    public function getFactor()
    {
        return -1;
    }

    public function __toString()
    {
        return "Egreso";
    }

    public function getConceptos($conceptos, $proceso = null){

        if ($proceso)
            $conceptosProceso = $proceso->getProcesoFaena()->getConceptos();
        else
            $conceptosProceso = $this->getProcesoFnDay()->getProcesoFaena()->getConceptos();
        $collections = array();
        foreach ($conceptos as $con) {
          // if (in_array($con->getEsa(), array(2,3,7)))
            //    if ($conceptosProceso->contains($con))
                    $collections[] = $con;
        }
        return $collections;
    }

    public static function getInstance()
    {
        return 3;
    }

    protected function updateVisible()
    {
        $this->setVisible(true);
    }

}
