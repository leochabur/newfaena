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
}
