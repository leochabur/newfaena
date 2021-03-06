<?php

namespace GestionFaenaBundle\Repository;

/**
 * FaenaDiariaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FaenaDiariaRepository extends \Doctrine\ORM\EntityRepository
{

	public function findAllFaenas() { 
	    return $this->createQueryBuilder('f')
	    			->where('f.isActive = :activa')
	    			->setParameter('activa', true)
			        ->addOrderBy('f.fechaFaena', 'DESC')
			        ->getQuery()
			        ->getResult(); 
	} 

	public function getFaenaConFecha(\DateTime $fecha) { 
	    return $this->createQueryBuilder('f')
			        ->where('f.fechaFaena = :fecha')
			        ->setParameter('fecha', $fecha->format('Y-m-d'))
			        ->getQuery()
			        ->getOneOrNullResult(); 
	} 

	public function getFaenaAnteriorDeFecha(\DateTime $fecha) { 
	    return $this->createQueryBuilder('f')
			        ->where('f.fechaFaena < :fecha')
			        ->orderBy('f.fechaFaena', 'DESC')
			        ->setParameter('fecha', $fecha->format('Y-m-d'))
			        ->getQuery()
			        ->setMaxResults(1)
			        ->getOneOrNullResult(); 
	} 
}
