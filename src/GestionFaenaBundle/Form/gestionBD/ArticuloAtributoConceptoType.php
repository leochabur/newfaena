<?php

namespace GestionFaenaBundle\Form\gestionBD;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use GestionFaenaBundle\Form\faena\PropiedadAtributoType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ArticuloAtributoConceptoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('concepto', 
                        EntityType::class, 
                        [
                            'class' => 'GestionFaenaBundle\Entity\faena\ConceptoMovimientoProceso',
                            'choice_label' => 'vistaEdicionV2',
                            'query_builder' => function (EntityRepository $er) {
                                                                                    return $er->createQueryBuilder('c')
                                                                                              ->where('c.activo = :activo')
                                                                                              ->orderBy('c.procesoFaena')
                                                                                              ->setParameter('activo', true);
                                                                                }
                        ])
                ->add('articulo')
                ->add('guardar', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionFaenaBundle\Entity\gestionBD\ArticuloAtributoConcepto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionfaenabundle_gestionbd_articuloatributoconcepto';
    }


}
