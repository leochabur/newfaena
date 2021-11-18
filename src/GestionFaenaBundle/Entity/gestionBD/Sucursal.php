<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursal
 *
 * @ORM\Table(name="sp_gst_ent_ext_suc")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\SucursalRepository")
 */
class Sucursal extends EntidadComercial
{


    protected function getIsCliente()
    {
        return true;
    }

    public function getInstance()
    {
        return 5;
    }

    public function getTypeOfVenta()
    {
        return get_class($this);
    }

}
