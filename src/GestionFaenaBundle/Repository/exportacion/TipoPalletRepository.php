<?php

namespace GestionFaenaBundle\Repository\exportacion;

/**
 * TipoPalletRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoPalletRepository extends \Doctrine\ORM\EntityRepository
{


	public function findAllTipoPallets()
	{
	    return $this->createQueryBuilder('t')
	    			->where('t.activo = :activo')
	    			->setParameter('activo', true)
	    			->orderBy('t.tipo')
			        ->getQuery()
			        ->getResult(); 
	}
}
