<?php

namespace GestionFaenaBundle\Repository\faena;

/**
 * ValorNumericoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ValorNumericoRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAcumuladoAtributo(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
    									\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
    									\GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT sum(valor.valor) as stock
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE mov.faenaDiaria = :faena AND 
                                   		 mov.eliminado = :eliminado AND 
                                   		 atributoAbstracto = :atributo AND
                                   		 conMov.concepto = :concepto
                                   GROUP BY atributoAbstracto")
                    ->setParameter('faena', $faena)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getOneOrNullResult();
    }

    public function getArticulosCongelandoAgrupadosPorFaena(\DateTime $desde, \DateTime $hasta, 
                                                            \GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
                                                            array $articulo,
                                                            \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto,
                                                            \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
                                                            $typeOfMovimiento)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT ABS(sum(valor.valor)) as stock,  faena.fechaFaena as fecha, mov.id as idPfd, faena.id as idFd, '' as articulo
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN mov.faenaDiaria faena
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.articulo art
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE faena.fechaFaena BETWEEN :desde AND :hasta AND 
                                         mov.eliminado = :eliminado AND 
                                         atributoAbstracto = :atributo AND
                                         art in (:articulo) AND
                                         conMov.concepto = :concepto AND
                                         (mov INSTANCE OF $typeOfMovimiento) AND
                                         pfd.procesoFaena = :proceso
                                    GROUP BY faena")
                    ->setParameter('desde', $desde)
                    ->setParameter('hasta', $hasta)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getResult();
    }

    public function getArticulosEnviadosACongelar(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
                                                    \GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
                                                    \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT ABS(valor.valor) as stock, art.nombre as articulo, cg.id as idCG
                                   FROM GestionFaenaBundle:faena\MovimientoCompuesto mc
                                   JOIN mc.movimientoDestino md
                                   JOIN md.procesoFnDay pfdDest

                                   JOIN mc.movimientoOrigen mo
                                   JOIN GestionFaenaBundle:faena\ValorNumerico valor WITH valor.movimiento = mo
                                   INNER JOIN valor.atributoAbstracto atributoAbstracto
                                   INNER JOIN mo.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.articulo art                                   
                                    
                                   LEFT JOIN art.categoriaGeneral cg

                                   WHERE mc.faenaDiaria = :faena AND 
                                         mc.eliminado = :eliminado AND 
                                         mo.eliminado = :eliminado AND 
                                         md.eliminado = :eliminado AND 
                                         atributoAbstracto = :atributo AND
                                         pfdDest.procesoFaena = :proceso
                                   ORDER BY art.nombre")
                    ->setParameter('faena', $faena)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getResult();
    }

    public function getArticulosCongelandoAgrupadosPorFaenaWithAtributo(\DateTime $desde, \DateTime $hasta, 
                                                                        \GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
                                                                        \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo,
                                                                        \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto,
                                                                        \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
                                                                        $typeOfMovimiento)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT ABS(sum(valor.valor)) as stock,  faena.fechaFaena as fecha, mov.id as idPfd, faena.id as idFd, '' as articulo
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN mov.faenaDiaria faena
                                   INNER JOIN valor.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.articulo art
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE faena.fechaFaena BETWEEN :desde AND :hasta AND 
                                         mov.eliminado = :eliminado AND 
                                         atributoAbstracto = :atributo AND
                                         art = :articulo AND
                                         conMov.concepto = :concepto AND
                                         (mov INSTANCE OF $typeOfMovimiento) AND
                                         pfd.procesoFaena = :proceso
                                    GROUP BY faena")
                    ->setParameter('desde', $desde)
                    ->setParameter('hasta', $hasta)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getResult();
    }

    public function getAllAtributoParaTipoMovimientoYArticulo(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
                                                            \GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
                                                            \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo,
                                                            \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto,
                                                            \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
                                                            $typeOfMovimiento)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT valor.valor as stock, mov.id as id, art.nombre as nombre
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.articulo art
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE mov.faenaDiaria = :faena AND 
                                         mov.eliminado = :eliminado AND 
                                         atributoAbstracto = :atributo AND
                                         art = :articulo AND
                                         conMov.concepto = :concepto AND
                                         (mov INSTANCE OF $typeOfMovimiento) AND
                                         pfd.procesoFaena = :proceso")
                    ->setParameter('faena', $faena)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getResult();
    }

    public function getAllAtributoParaTipoMovimientoYManyArticulo(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
                                                            \GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
                                                            \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo,
                                                            \GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto,
                                                            \GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
                                                            $typeOfMovimiento,
                                                            \GestionFaenaBundle\Entity\gestionBD\Articulo $articulo2)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT valor.valor as stock, mov.id as id, art.nombre as nombre
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.articulo art
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE mov.faenaDiaria = :faena AND 
                                         mov.eliminado = :eliminado AND 
                                         atributoAbstracto = :atributo AND
                                         (art = :articulo OR art = :articulo2) AND
                                         conMov.concepto = :concepto AND
                                         (mov INSTANCE OF $typeOfMovimiento) AND
                                         pfd.procesoFaena = :proceso")
                    ->setParameter('faena', $faena)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('articulo2', $articulo2)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getResult();
    }

    public function getAcumuladoAtributoParaTipoMovimientoYArticulo(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
					    									\GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
					    									\GestionFaenaBundle\Entity\gestionBD\Articulo $articulo,
					    									\GestionFaenaBundle\Entity\faena\ConceptoMovimiento $concepto,
					    									\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo,
					    									$typeOfMovimiento)
    {

        return $this->getEntityManager()
                    ->createQuery("SELECT sum(valor.valor) as stock
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.artProcFaena artAtrCon
                                   INNER JOIN artAtrCon.concepto conMov                                    
                                   WHERE mov.faenaDiaria = :faena AND 
                                   		 mov.eliminado = :eliminado AND 
                                   		 atributoAbstracto = :atributo AND
                                   		 artAtrCon.articulo = :articulo AND
                                   		 conMov.concepto = :concepto AND
                                   		 (mov INSTANCE OF $typeOfMovimiento) AND
                                   		 pfd.procesoFaena = :proceso
                                   GROUP BY atributoAbstracto")
                    ->setParameter('faena', $faena)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('proceso', $procesoFaena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getOneOrNullResult();
       /* return $this->getEntityManager()
                    ->createQuery("SELECT sum(valor.valor) as stock, MIN(fd.fechaFaena) as fmin, MAX(fd.fechaFaena) as fmax
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto
                                   INNER JOIN mov.faenaDiaria fd
                                   INNER JOIN mov.procesoFnDay pfd
                                   INNER JOIN mov.artProcFaena artAtrCon    
                                   INNER JOIN artAtrCon.concepto conMov                                  
                                   WHERE mov.faenaDiaria = :faena AND 
                                   		 mov.eliminado = :eliminado AND 
                                   		 artAtrCon.articulo = :articulo AND
                                   		 pfd.procesoFaena = :procesoFaena AND
                                   		 conMov.concepto = :concepto AND
                                   		 atributoAbstracto = :atributo AND
                                   		 (mov INSTANCE OF $typeOfMovimiento)
                                   	GROUP BY atributoAbstracto")
                    ->setParameter('faena', $faena)
                    ->setParameter('articulo', $articulo)
                    ->setParameter('procesoFaena', $procesoFaena)
                    ->setParameter('concepto', $concepto)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getOneOrNullResult();*/
    }

    public function getAcumuladoAtributoWhitAAC(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
		    									\GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto $aac,
		    									\GestionFaenaBundle\Entity\gestionBD\AtributoAbstracto $atributo)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT sum(valor.valor) as stock
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN valor.atributo atributo
                                   INNER JOIN atributo.atributoAbstracto atributoAbstracto                               
                                   WHERE mov.faenaDiaria = :faena AND 
                                   		 mov.eliminado = :eliminado AND 
                                   		 mov.artProcFaena = :aac AND
                                   		 atributoAbstracto = :atributo
                                   GROUP BY atributoAbstracto")
                    ->setParameter('faena', $faena)
                    ->setParameter('aac', $aac)
                    ->setParameter('atributo', $atributo)
                    ->setParameter('eliminado', false)
                    ->getOneOrNullResult();
    }

    public function getArticulosTransformados(\GestionFaenaBundle\Entity\FaenaDiaria $faena, 
		    									\GestionFaenaBundle\Entity\gestionBD\Articulo $origenTrx,
		    									\GestionFaenaBundle\Entity\ProcesoFaena $procesoFaena,
		    									$typeOfMovimiento)
    {
        return $this->getEntityManager()
                    ->createQuery("SELECT valor, valor.valor as stock
                                   FROM GestionFaenaBundle:faena\ValorNumerico valor
                                   INNER JOIN valor.movimiento mov
                                   INNER JOIN mov.artProcFaena aac    
                                   INNER JOIN mov.procesoFnDay pfd                        
                                   WHERE mov.faenaDiaria = :faena AND 
                                   		 mov.eliminado = :eliminado AND 
                                   		 aac.articulo = :origenTrx AND
                                   		 (mov INSTANCE OF $typeOfMovimiento) AND
                                   		 pfd.procesoFaena = :proceso")
                    ->setParameter('faena', $faena)
                    ->setParameter('eliminado', false)
                    ->setParameter('origenTrx', $origenTrx)
                    ->setParameter('proceso', $procesoFaena)
                    ->getResult();
    }
}
