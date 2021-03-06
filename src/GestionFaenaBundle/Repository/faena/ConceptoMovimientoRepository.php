<?php

namespace GestionFaenaBundle\Repository\faena;

/**
 * ConceptoMovimientoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConceptoMovimientoRepository extends \Doctrine\ORM\EntityRepository
{
	public function getConceptoOfTransformacion()
	{
			return $this->createQueryBuilder('cm')
						->where('cm.transforma = :transforma')
						->setParameter('transforma', true)
						->getQuery()
						->getOneOrNullResult();
	}

	public function getConceptoOfAjuste()
	{
			return $this->createQueryBuilder('cm')
						->where('cm.ajusta = :ajusta')
						->setParameter('ajusta', true)
						->getQuery()
						->getOneOrNullResult();
	}
}
