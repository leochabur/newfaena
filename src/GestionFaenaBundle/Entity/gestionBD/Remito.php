<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remito
 *
 * @ORM\Table(name="sp_gst_ent_ext_retos")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\RemitoRepository")
 */
class Remito extends EntidadComercial
{

    protected function getIsCliente()
    {
        return true;
    }

    public function getInstance()
    {
        return 7;
    }

    public function getTypeOfVenta()
    {
        if ($this->getEsConsignatario())
        {
            return Consignatario::class;
        }

        return get_class($this);
    }
}
