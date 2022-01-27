<?php

namespace GestionFaenaBundle\Form\gestionBD;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CamionVentaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('entidad', EntidadExternaType::class, array(
                                    'data_class' => 'GestionFaenaBundle\Entity\gestionBD\CamionVenta',
                                ))
                ->add('acoplado')
                ->add('cantPrecintos')
                ->add('empresa')
                ->add('senasa')
                ->add('guardar', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionFaenaBundle\Entity\gestionBD\CamionVenta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionfaenabundle_gestionbd_camionventa';
    }


}
