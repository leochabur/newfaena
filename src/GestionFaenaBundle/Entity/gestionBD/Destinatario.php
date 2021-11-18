<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destinatario
 *
 * @ORM\Table(name="sp_gst_ent_ext_dest")
 * @ORM\Entity
 */
class Destinatario extends EntidadComercial
{

    protected function getIsCliente()
    {
        return false;
    }

    public function getInstance()
    {
        return 12;
    }

    public function __toString()
    {
        if ($this->getEsConsignatario())
        {
            return strtoupper($this->getValor())." - CONSIGNATARIO";
        }

        return strtoupper($this->getValor());
    }

    public function getTypeOfVenta()
    {
        if ($this->getEsConsignatario())
        {
            return Consignatario::class;
        }

        return Remito::class;
    }
}
