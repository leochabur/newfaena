<?php

namespace GestionFaenaBundle\Entity\gestionBD;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anexo
 *
 * @ORM\Table(name="sp_gst_ent_ext_anexos")
 * @ORM\Entity(repositoryClass="GestionFaenaBundle\Repository\gestionBD\AnexoRepository")
 */
class Anexo extends EntidadComercial
{

    protected function getIsCliente()
    {
        return true;
    }


    public function getInstance()
    {
        return 8;
    }

    public function getTypeOfVenta()
    {
        return get_class($this);
    }
}
