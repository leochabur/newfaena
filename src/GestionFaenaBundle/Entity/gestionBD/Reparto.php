<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparto
 *
 * @ORM\Table(name="sp_gst_ent_ext_rpto")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\RepartoRepository")
 */
class Reparto extends EntidadComercial
{
    protected function getIsCliente()
    {
        return true;
    }

    public function getInstance()
    {
        return 9;
    }

    public function getTypeOfVenta()
    {
        return get_class($this);
    }
}
