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

    /**
     * @ORM\Column(name="consignatario", type="boolean", options={"default":false}, nullable=true)
     */

    private $esConsignatario = true;

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
        if ($this->esConsignatario)
        {
            return strtoupper($this->getValor())." - CONSIGNATARIO";
        }

        return strtoupper($this->getValor());
    }

    /**
     * Set esConsignatario
     *
     * @param boolean $esConsignatario
     *
     * @return Destinatario
     */
    public function setEsConsignatario($esConsignatario)
    {
        $this->esConsignatario = $esConsignatario;

        return $this;
    }

    /**
     * Get esConsignatario
     *
     * @return boolean
     */
    public function getEsConsignatario()
    {
        return $this->esConsignatario;
    }
}
