<?php

namespace GestionVentasBundle\Repository;

/**
 * NumeracionRemitoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NumeracionRemitoRepository extends \Doctrine\ORM\EntityRepository
{

    public function getNumeracion() { 
        
        return $this->createQueryBuilder('n')
                    ->where('n.activo = :activo')
                    ->setParameter('activo', true)
                    ->getQuery()
                    ->getOneOrNullResult(); 
    } 
}
