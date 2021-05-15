<?php

namespace GestionFaenaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use GestionFaenaBundle\Entity\gestionBD\Sucursal; 
use GestionFaenaBundle\Entity\gestionBD\Consignatario; 
use GestionFaenaBundle\Entity\gestionBD\Remito; 
use GestionFaenaBundle\Entity\gestionBD\Anexo; 
use GestionFaenaBundle\Entity\gestionBD\Reparto; 
use GestionFaenaBundle\Entity\gestionBD\Exportacion; 

class ConceptoVentaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $proceso = $options['proceso'];
        $builder->add('entidadExterna',
                    ChoiceType::class, 
                     ['choices' => ['Anexo'=> Anexo::class, 
                                    'Remito'=> Remito::class, 
                                    'Sucursal'=> Sucursal::class, 
                                    'Consignatario'=> Consignatario::class,
                                    'Exportacion' => Exportacion::class,
                                    'Reparto' => Reparto::class]])
                ->add('procesoFaena', 
                      EntityType::class, 
                      [
                      'class' => 'GestionFaenaBundle:ProcesoFaena',
                      'choices' => [$proceso],
                      ])
                ->add('concepto')
                ->add('atributo')
                ->add('guardar', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionFaenaBundle\Entity\ConceptoVenta'
        ));
        $resolver->setRequired('proceso');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionfaenabundle_conceptoventa';
    }


}
